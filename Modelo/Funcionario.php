<?php
    require_once("../Controlador/Conexion.php");
    class Funcionario{
        public function Consultar_Funcionario(){
            $conexion=new Conexion();
            $conx = $conexion->Conectar();
            $data=array();
            $sql=mysqli_query($conx,"SELECT `funcionario`.`f_cood`,`funcionario`.`f_nombre`,`funcionario`.`f_apellido`,`funcionario`.`f_documento`,`funcionario`.`f_correo`,`oficina`.`o_cood`,`oficina`.`o_descripcion`,`cuenta`.`c_cood`,`cuenta`.`c_usuario`,`cuenta`.`c_contrasena`,`tipo_cuenta`.`tc_cood`,`tipo_cuenta`.`tc_descripcion`
            FROM `funcionario`,`cuenta`,`tipo_cuenta`,`oficina`
            WHERE `funcionario`.`o_cood`=`oficina`.`o_cood` AND `funcionario`.`c_cood`=`cuenta`.`c_cood` AND `cuenta`.`tc_cood`=`tipo_cuenta`.`tc_cood`") or die ("Consulta Fallida");
            while($reg = mysqli_fetch_array($sql)){
                $data[$reg["f_cood"]] = array("Nombre"=>$reg["f_nombre"],
                                                "Apellido"=>$reg["f_apellido"],
                                                "Documento"=>$reg["f_documento"],
                                                "Correo"=>$reg["f_correo"],
                                                "Cod_Oficina"=>$reg["o_cood"],
                                                "Oficina"=>$reg["o_descripcion"],
                                                "Cod_Cuenta"=>$reg["c_cood"],
                                                "Usuario"=>$reg["c_usuario"],
                                                "Contrasena"=>$reg["c_contrasena"],
                                                "Cod_TipoCuenta"=>$reg["tc_cood"],
                                                "TipoCuenta"=>$reg["tc_descripcion"]);
            }
        return $data;
        }
    }
?>