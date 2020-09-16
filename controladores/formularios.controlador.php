<?php

    class controladorFormularios{

//$rNombre,$rEmail,$rPwd
        static public function ctrRegistro(){
            if (isset ($_POST["rNombre"])) {
                $tabla="registros";
                $datos= array("nombre" => $_POST["rNombre"],
                              "email" => $_POST["rEmail"],
                              "password" => $_POST["rPwd"],
                );

                $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
                return $respuesta;
            }
        }

        /* -------------------------------------------------------------------------- */
        /*                            Sleccionar Registros                            */
        /* -------------------------------------------------------------------------- */

        static public function ctrSeleccionarRegistros(){
            $tabla="registros";
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,null,null);
            return $respuesta;
        }

        public function ctrIngreso(){
            if (isset($_POST["IngresoEmail"])) {
                $tabla="registros";
                $item="email";
                $valor=$_POST["IngresoEmail"];
                $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,$item,$valor);
                //echo '<pre>';print_r($respuesta);echo'</pre>';
                //  return $respuesta;
                if($respuesta["email"]==$_POST["IngresoEmail"] &&
                    $respuesta["password"]==$_POST["IngresoPwd"]){
                    
                       // echo '<div class="alert alert-success">Ingreso Exitoso"</div> ';
                        
                        echo '<script>
                            if (window.history.replaceState) {
                                window.history.replaceState(null,null,window.location.href);
                            }
                            window.location="index.php?pagina=inicio";
                        </script>';
                }else{

                    echo '<script>
                            if (window.history.replaceState) {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>';
                    echo '<div class="alert alert-danger">Error Al ingresar. User y/o password incorrectos</div>';
                }   
            }
        }
    }



?>