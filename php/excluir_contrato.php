<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Excluir Processo</title>
</head>

<body>
<?php
include_once("funcoes.php");
$id = anti_sql_injection($_GET['id']);

sqlsrv_query($conn, "DELETE FROM CONTRATOS WHERE id = '$id'");


echo "<script>alert('Contrato excluído com sucesso!');window.location.href='../consultar.php';</script>";
?>

</body>
</html>