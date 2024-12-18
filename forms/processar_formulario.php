<!DOCTYPE html>
<html class="processar_formulario">

<head>
  <meta charset="UTF-8">
  <title>Encomendar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/favicons/maior.ico">
  <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
</head>

<body>
<a href="../musica/merch.php" style="font-family: 'Kulim Park'">VOLTAR</a>   
<?php
// Connect to database
$db = new SQLite3('db_encomendas.sqlite', SQLITE3_OPEN_READWRITE);

// Check if connection was successful
if (!$db) {
    die("<div class='error'>Erro na conexão :( </div>" . $db->lastErrorMsg());
} else {
    echo "<div class='success'>Estás registadx na base de dados!</div>";
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$produto = $_POST['produto'];
$name_produto = '';
$data_quantia = '';
if ($produto == 'produto1') {
    $name_produto = 'Fita-cola MAIOR MAJOR';
    $data_quantia = '5€';
} elseif ($produto == 'produto2') {
    $name_produto = 'T-shirt MAIOR MAJOR';
    $data_quantia = '15€';
} elseif ($produto == 'produto3') {
    $name_produto = 'Caneca MAIOR MAJOR';
    $data_quantia = '10€';
}

$mensagem = $_POST['mensagem'];

// Insert data into database
$query = "INSERT INTO purchase (name, email, name_produto, data_quantia, mensagem) VALUES ('$name', '$email', '$name_produto', '$data_quantia', '$mensagem')";
$db->exec($query);

// Close database connection
$db->close();


// Use the PHPMailer library.
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

// Create a new PHPMailer object.
$mail = new PHPMailer();

// Configure the SMTP service.
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;

// Replace with you Gmail username
$mail->Username = 'maiormajor.music@gmail.com';

// Replace with you Gmail "app password"
$mail->Password = 'zkpecfdmuyfemizr';

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

$mail->setFrom('maiormajor.music@gmail.com', 'Encomendas - Maior Major');

// Replace with the email you want to send to
$mail->addAddress($email, $name);
$mail->CharSet = 'UTF-8';
$mail->Subject = 'Encomenda processada.';
$mail->Body = 'Olá '.$name.'! Vamos tratar do teu pedido ('.$name_produto.') muito em breve. Começa por fazer Transferência da quantia de '.$data_quantia.' para [info-pagamento], seguido de enviar comprovativo para este e-mail.';

// Send the email.
if (!$mail->send()) {
    echo "<div class='error'>E-mail não foi enviado.</div>";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<div class='success'>E-mail enviado. Verifica na caixa de spam ou e-mail de lixo.</div>";
}


?>
</body>
</html>