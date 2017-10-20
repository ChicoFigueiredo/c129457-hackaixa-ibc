<?php
// include_once("conexao.php");
// include_once("ldap.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// $matricula_usuario = $_SERVER["LOGON_USER"];
// $matricula_usuario = explode("\\", $matricula_usuario);
$matricula_usuario = "C129457";



function anti_sql_injection($str){
   if(get_magic_quotes_gpc()){
        $str= stripslashes($str);
    }
    return str_replace("'", "''", $str);
  }


function tempoExecucao($start = null) {
    // Calcula o microtime atual
    $mtime = microtime(); // Pega o microtime
    $mtime = explode(' ',$mtime); // Quebra o microtime
    $mtime = $mtime[1] + $mtime[0]; // Soma as partes montando um valor inteiro

    if ($start == null) {
        // Se o parametro não for especificado, retorna o mtime atual
        return $mtime;
    } else {
        // Se o parametro for especificado, retorna o tempo de execução
        return round($mtime - $start, 2);
    }
}





function calcular_dig_unidade($num, $base=9, $r=0){                                   
    $soma = 0;
    $fator = 2;
    /* Separacao dos numeros */
    for ($i = strlen($num); $i > 0; $i--) {
        // pega cada numero isoladamente
        $numeros[$i] = substr($num,$i-1,1);
        // Efetua multiplicacao do numero pelo falor
        $parcial[$i] = $numeros[$i] * $fator;
        // Soma dos digitos
        $soma += $parcial[$i];
        if ($fator == $base) {
            // restaura fator de multiplicacao para 2 
            $fator = 1;
        }
        $fator++;
    }
    /* Calculo do modulo 11 */
    if ($r == 0) {
        $soma *= 10;
        $digito = $soma % 11;
        if ($digito == 10) {
            $digito = 0;
        }
        return $digito;
    } elseif ($r == 1){
        $resto = $soma % 11;
        return $resto;
    }


}





function registrar_log($acao, $id_processo, $usuario, $cgc){
global $conn;
$qr = sqlsrv_query($conn, "INSERT INTO logs (acao, id_processo,usuario, data_hora, lotacao) VALUES ('$acao', '$id_processo', '$usuario', getdate(), '$cgc')");
	
}

	
	
function mascaras($val, $mask)
{
//Ex:	
//echo mask($cnpj,'##.###.###/####-##');
//echo mask($cpf,'###.###.###-##');
//echo mask($cep,'#####-###');
//echo mask($data,'##/##/####');

 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++)
 {
   if($mask[$i] == '#')
   {
      if(isset($val[$k]))
       $maskared .= $val[$k++];
   }
   else
 {
     if(isset($mask[$i]))
     $maskared .= $mask[$i];
     }
 }
 return $maskared;
}





function enviar_email($remetente, $nome_remetente, $destinatario, $cc, $assunto, $mensagem){
include_once("php/phpmailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host       = "sistemas.correiolivre.caixa"; // SMTP server example
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Port = 25;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';
// $mail->setFrom($remetente, "Tarifas.CAIXA");
// $mail->addAddress('pedro.fraga@caixa.gov.br', 'Pedro');     // Add a recipient

$mail->setFrom($remetente, $nome_remetente);
$mail->addAddress($destinatario);     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $assunto;
$mail->Body    = $mensagem;
$mail->AltBody = $mensagem;

if(!$mail->send()) {
    // echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    // echo 'Message has been sent';
}
}



?>