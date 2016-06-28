<?php

class CubeController extends \BaseController
{


	#crear matriz M[][][] con el tamaño N recibido del formulario


	public function createM()
	{
        $datos = Input::all();
		$reglasc = array(
			'tamano' => 'required|numeric'
		);
        $reglasa =array(
            'w' => 'required |numeric',
            'x' => 'required |numeric',
            'y' => 'required |numeric',
            'z' => 'required |numeric'
        );
        $reglasm = array(

        );

		$mensajes = array(
			"required" => "El :attribute es obligatorio",
			"min" => "El :attribute debe tener minimo :min valores ",
			"max" => "El :attribute debe tener maximo :max valores ",
			"unique" => "El :attribute ya se encuentra registrado",
			'digits_between' => 'El campo :attribute debe estar entre :min - :max.',
			"numeric" => "formato debe ser numerico"
		);


		$n=Input::get('tamano');


		global $matriz1;
		if (Request::isMethod("POST")){
			if(Input::get('action')=="crear"){
				$validatorc = Validator::make($datos, $reglasc, $mensajes);
                if($validatorc->passes()){
                    Session::put('tam',$n);
					$matriz1=$this->crear($matriz1,$n);
					Session::put('arreglo',$matriz1);
                    return Redirect::to('crearM');
                }else{
                    return Redirect::to('crearM')->withErrors($validatorc);
                }
			}elseif (Input::get('action')=="actualizar"){
                $validatora = Validator::make($datos,$reglasa,$mensajes);
                if($validatora->passes()){
                    $w = Input::get('w');
                    $x = Input::get('x');
                    $y = Input::get('y');
                    $dato =	Input::get('z');
                    $matriz1 = Session::get('arreglo');
                    $matriz1= $this->actualizar($matriz1,$w,$x,$y,$dato);
                    Session::put('arreglo',$matriz1);
                    return Redirect::to('crearM');


                }else{
                    return Redirect::to('crearM')->withErrors($validatora);
                }
			}elseif (Input::get('action')=="consultar"){
                $validatorm = Validator::make($datos,$reglasm,$mensajes);
                if($validatorm->passes()){
                    $matriz1 = Session::get('arreglo');
                    $n = Session::get('tam');
                    $suma = $this->contar($matriz1,$n);
                    Session::put('suma',$suma);
                    return Redirect::to('crearM');



                }else{
                    return Redirect::to('crearM')->withErrors($validatorm);
                }
			}
		}else{
			return View::make('frontend.matriz');
		}


	}
	// recibe un matriz y el tamaño creando la matriz llena de 0 y retornando la nueva matriz
	public function crear ($matriz =array([],[],[]),$n){

		for ($i = 0; $i < $n; $i++) {
			for ($j = 0; $j < $n; $j++) {
				for ($z = 0; $z < $n; $z++) {
					$matriz[$i][$j][$z] = 0;

				}
			}
		}
		return $matriz;

	}

//recibe una matriz y el tamaño para hacer la sumatoria de cada valor dentro la matriz y retorna un valor
	public  function contar($matriz =array([],[],[]),$n){
		$tam=0;

		for ($i = 0; $i < $n; $i++) {
			for ($j = 0; $j < $n; $j++) {
				for ($z = 0; $z < $n; $z++) {

					$tam = $tam + $matriz [$i][$j][$z];

				}
			}
		}
		return $tam;
	}
// recibe las cordenadas y un valor  y mo escribe dentro de matriz y devuelve la matriz actualizada
	public function actualizar($matriz =array([],[],[]),$i,$j,$z,$dato){
		
		$matriz [$i][$j][$z]=$dato;
		return $matriz;
	}
	
}

