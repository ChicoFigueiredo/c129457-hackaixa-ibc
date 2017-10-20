<?php

if($_SERVER['HTTP_HOST'] == 'simon.caixa'){
//SERVIDOR DE DESENVOLVIMENTO
    $gaSql['user']       = "s501901";
    $gaSql['password']   = "s5019@gemon";
    $gaSql['db']         = "DB7642_SIMON";
    $gaSql['server']     = "DF7436SR687.corp.caixa.gov.br";
    $prefixo_tabelas = "[DB7642_SIMON].[dbo].";

}else{
//SERVIDOR DE PRODUÇÃO
    $gaSql['user']       = "s501901";
    $gaSql['password']   = "s5019@gemon";
    $gaSql['db']         = "DB7642_SIMON";
    $gaSql['server']     = "DF7436SR687.corp.caixa.gov.br";
    $prefixo_tabelas = "[DB7642_SIMON].[dbo].";
    }

     /*
     * ODBC connection
     */
    $connectionInfo = array("UID" => $gaSql['user'], "PWD" => $gaSql['password'], "Database"=>$gaSql['db'],"ReturnDatesAsStrings"=>true);
    $conn = sqlsrv_connect( $gaSql['server'], $connectionInfo);
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );  


?>