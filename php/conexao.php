<?php

if($_SERVER['HTTP_HOST'] == 'simon.caixa'){
//SERVIDOR DE DESENVOLVIMENTO
    $gaSql['user']       = "";
    $gaSql['password']   = "";
    $gaSql['db']         = "";
    $gaSql['server']     = "";
    $prefixo_tabelas = "[].";

}else{
//SERVIDOR DE PRODUÇÃO
    $gaSql['user']       = "";
    $gaSql['password']   = "";
    $gaSql['db']         = "";
    $gaSql['server']     = "";
    $prefixo_tabelas = "[].[].";
    }

     /*
     * ODBC connection
     */
    $connectionInfo = array("UID" => $gaSql['user'], "PWD" => $gaSql['password'], "Database"=>$gaSql['db'],"ReturnDatesAsStrings"=>true);
    $conn = sqlsrv_connect( $gaSql['server'], $connectionInfo);
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );  


?>
