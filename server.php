<?php
    require_once "lib/nusoap.php";
    function getComidas($datos)
    {
        if ($datos == "Comidas")
        {
            return join(", ", array(
                "Pizza",
                "Hot Dog",
                "Papas Fritas",
                "Hamburguesa",
                "Gorditas",
                "Sandwich",
                "Tacos",
                "Quesadillas",
                "Empanadas",
                "Pozole"));
        }
        else
        {
            return "Comidas no diponibles";
        }
    }
    $server = new soap_server();//Creamos instancia de SOAP
    $server->register("getComidas");//Indicamos el metodo o función a devolver
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
    $server->service($HTTP_RAW_POST_DATA);
?>