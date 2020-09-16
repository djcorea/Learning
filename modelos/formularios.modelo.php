<?php
    
    require_once"conexion.php";
    
    class ModeloFormularios{

        /* -------------------------------------------------------------------------- */
        /*                               metodo registro                              */
        /* -------------------------------------------------------------------------- */
        
        static public function mdlRegistro($tabla,$datos){

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES
             (:nombre, :email, :password)");

             $stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
             $stmt->bindParam(":email",$datos["email"],PDO::PARAM_STR);
             $stmt->bindParam(":password",$datos["password"],PDO::PARAM_STR);
        
            if ($stmt->execute()) {
                # code...
                return"ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());  
            }

            $stmt->close();
            $stmt->null;
        }

             /* -------------------------------------------------------------------------- */
        /*                            Sleccionar Registros                            */
        /* -------------------------------------------------------------------------- */

        static public function mdlSeleccionarRegistros($tabla,$item,$valor){

            if($item==null && $valor==null){
            $stmt= Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y') as fecha_corta FROM $tabla");
            
            $stmt->execute();
            return $stmt-> fetchAll();
            }else{
                $stmt= Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y') as fecha_corta FROM $tabla where $item=:$item");
                $stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);
        
            
                $stmt->execute();
                return $stmt-> fetch();

            }
            $stmt->close();
            $stmt->null;
        }
    }

?>