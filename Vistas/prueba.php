<?php
    require("../Modelo/Tipo_Cuenta.php");
    require("../Modelo/Estado_Elemento.php");
    require("../Modelo/Tipo_Elemento.php");
    require("../Modelo/Oficina.php");
    require("../Modelo/Elementos.php");
    require("../Modelo/Cuenta.php");
    require("../Modelo/Funcionario.php");
    $funcionario=new Funcionario();
    $cuenta=new Cuenta();
    $elementos = new Elementos();
    $estadolementos=new EstadoElemento(); 
    $oficina=new Oficina();
    $tipocuenta=new TipoCuenta();
    $tipoelemento=new TipoElemento();
    //$est_elemento=$estadolementos->Consultar_EstadoElemento();
    //---------------------------------------------------------------------------------------------
    /*$tipoCuenta = $tipocuenta->Consultar_TipoCuenta(); //Funciona
    foreach($tipoCuenta as $cod => $valor){
        echo "$cod == $valor <br>" ;
    }*/
    
    //Insertar_TipoCuenta('Usuario'); //Funciona
    //Actualizar_TipoCuenta(1,'SUPERADMIN');//Funciona
    //Eliminar_TipoCuenta(5);//Funciona
    //-----------------------------------------------------------------------------------------------
    //$estadoelemento=Consultar_EstadoElemento();
    /*foreach($est_elemento as $cod => $valor){
        echo "$cod == $valor <br>" ;
    }*/
    //Insertar_EstadoElemento('Prueba');
    //Actualizar_EstadoElemento(4,'PRUEBA');
    //Eliminar_EstadoElemento(4);


/*$Funcionario=$funcionario->Consultar_Funcionario();
foreach($Funcionario as $cod => $column){
    echo "$cod:<br>" ;
    while(list($clave,$valor)=each($column)){
        echo "      $clave:$valor <br>";
    }
}*/
















    //------------------------------------------------------------------------------------------------
    /*$Tipoelemento=$tipoelemento->Consultar_TipoElemento();
    foreach($Tipoelemento as $cod => $valor){
        echo "$cod == $valor <br>" ;
    }*/
    //$tipoelemento->Insertar_TipoElemento('Prueba');
    //Actualizar_TipoElemento(4,'PRUEBA');
    //$tipoelemento->Eliminar_TipoElemento(5);
















    //---------------------------------------------------------------------------------------------------
    /*$tipoelemento=$oficina->Consultar_Oficina();
    foreach($tipoelemento as $cod => $valor){
        echo "$cod == $valor <br>" ;
    }*/
    //$oficina->Insertar_Oficina('SISTEMAS');
    //$oficina->Actualizar_Oficina(1,'PAE');
    //$oficina->Eliminar_Oficina(1);
    //------------------------------------------------------------------------------------------------------
    //$elementos = new Elementos();
    /*$elemento=$elementos->Consultar_Elementos();
    //echo $elemento[1]["Descripcion"];
    foreach($elemento as $cod => $column){
        echo "$cod:<br>";
        while(list($clave,$valor)=each($column)){
            echo "      $clave:$valor <br>";
        }
        echo "<br>";
    }*/
    /*$hoy = getdate();
print_r($hoy);*/
    //$elementos->Insertar_Elementos('Teclado','THP234234','Esenses',1,'Nuevo',2);
    //$elementos->Actualizar_Elemento(2,'Mouse','MHP5435','Havic',3,'Partido',2);
    //$elementos->Eliminar_Elemento(2);
    //-------------------------------------------------------------------------------------------------------
    /*$Cuenta=$cuenta->Consultar_Cuenta();
    foreach($Cuenta as $cod => $column){
        echo "$cod:<br>" ;
        while(list($clave,$valor)=each($column)){
            echo "      $clave:$valor <br>";
        }
    }*/
    //$cuenta->Insertar_Cuenta('Imanol','1234',1);
    //$cuenta->Actualizar_Cuenta(1,'manolo','1234',1);
    //$result=$cuenta->Login('manolo','123');
    //var_dump($result);
    $conexion=new Conexion();
    $conx = $conexion->Conectar();
    $sql = mysqli_query($conx, "SELECT m_cod FROM movimiento");
    while($reg = mysqli_fetch_array($sql)){
        $id=$reg["m_cod"];
        echo gettype($id);
        echo $id;
    }
    $conexion->close();
?>