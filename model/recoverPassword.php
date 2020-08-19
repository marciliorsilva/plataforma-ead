<?php
require 'init.php';

$PDO = db_connect();

$result = "SELECT * FROM usuarios WHERE email = '" . $_POST['email'] . "'";
$stmt = $PDO->prepare($result);
$condicao = $stmt->execute();
$quant = $stmt->rowCount();

$dados = $stmt->fetch();

if ($quant) {

    $senha = "g" . rand(1, 9) . "n" . rand(55, 99) . rand(10, 60) . "a" . rand(1, 20);
    $newSenha = sha1($senha);
    $sqlUp = "UPDATE usuarios SET senha = '" . $newSenha . "' WHERE email = '" . $_POST['email'] . "'";
    $stmtUp = $PDO->prepare($sqlUp);
    $condicaoUp = $stmtUp->execute();



    $mensagem .= "Você solicitou uma nova senha por e-mail. Segue abaixo os dados para acesso ao sistema";
    $mensagem .= "<br /><br />";
    $mensagem .= "<b>E-mail:</b> " . $dados['email'];
    $mensagem .= "<br />";
    $mensagem .= "<b>Nove senha:</b> " . $senha;
    $mensagem .= "<br /><br />";
    $mensagem .= "<img src='https://www.berlimdigital.com.br/images/logo-berlimDigital-home.png' width='150' />";


   
    header('Content-Type: text/html; charset=utf-8');
    require '../phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = "tls";

    $mail->Username = "alexricardodesenvolvedorweb@gmail.com";

    $mail->Password = "Csa48957312";

    $mail->Port = 587;

    $mail->setFrom('Alex.Ricardo1999@hotmail.com', 'BERLIM DIGITAL - Nova senha');

    $mail->addAddress('Alex.Ricardo1999@hotmail.com', 'BERLIM DIGITAL - Nova senha');

    $mail->isHTML(true);

    $mail->Subject = utf8_decode('BERLIM DIGITAL - Nova senha');

    $mail->Body = utf8_decode($mensagem);
    $mail->AltBody = nl2br(strip_tags($mensagem));

    $mail->send();
        
    return true;
}
