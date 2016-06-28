<?php
/**
 * Created by PhpStorm.
 * User: Duke
 * Date: 6/26/2016
 * Time: 1:38 PM
 */
public function postConfirm(){
    try{
        //Recibe dos parámetros por POST: El id de un servicio, el id de un conductor
        $id = Input::get('service_id');
        $servicio = Service::find ($id);
        //verifica que id de servicio sea diferente de null
        if($servicio != NULL){
            if($servicio->status_id == '6'){
                return  Response::json(array('error'=>'2'));
            }
            try{
                if($servicio->driver_id == NULL && $servicio->status_id == '1'){
                    $servicio = Service::update($id,array(
                        'driver_id'  => Input::get('driver_id'),
                        'status_id'  => '2'
                    ));
                    Driver::update(Input::get('driver_id'),array(
                        'available' => '0'
                    ));
                    $driverTmp = Driver::find(Input::get('driver_id'));
                    Service::update($id,array(
                        'car_id' => $driverTmp->car_id

                    ));
                    $pushMessage = 'Tu servicio a sido Confirmado';
                    $servicio = Service::find($id);
                    $push =Push::make();
                    if($servicio->user->uuid==Null){
                        return Response::json(array('error'=>'0'));
                    }
                    if($servicio->user->type == '1'){
                        $result = $push->ios($servicio->user->uuid,$pushMessage,1,'honk.wav','Open',array('service_id' =>$servicio->id));
                    }else{
                        $result = $push->android2($servicio->user->uuid,$pushMessage,1,'default','Open',array('service_id' =>$servicio->id));

                    }
                }else{
                    return Respose::json(array('error'=>'1'));
                }
            }catch(Exception $e){
                return Respose::json(array('error'=>'0'));
            }
        }else{
            return Respose::json(array('error'=>'3'));
        }
    }catch (Exception $e){
        echo "error";
    }
}