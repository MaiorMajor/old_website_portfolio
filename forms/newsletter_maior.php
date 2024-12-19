<!DOCTYPE html>
<html>

<head>
    <title>Newsletter do Maior Major</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/favicons/maior.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@200;400;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lexend Zetta';
        }

        button {
            font-family: 'Lexend Zetta', sans-serif;
            font-size: 18px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0062cc;
        }
    </style>
</head>

<body>
    <div style="text-align: center;">
        <?php
        // Connect to database
        $db = new SQLite3('db_subscriber_musica.sqlite', SQLITE3_OPEN_READWRITE);

        // Check if connection was successful
        if (!$db) {
            die("<h1>Erro na conexão :(</h1>" . $db->lastErrorMsg());
        }

        // Get form data
        $name = $_POST['nome'];
        $email = $_POST['email'];

        // Check if the email is already in the database
        $query = "SELECT COUNT(*) as count FROM subscriber_maior WHERE email = '$email'";
        $result = $db->query($query);
        $row = $result->fetchArray();
        $count = $row['count'];

        // Use the PHPMailer library.
        use \PHPMailer\PHPMailer\PHPMailer;
        use \PHPMailer\PHPMailer\Exception;

        require './PHPMailer-master/src/Exception.php';
        require './PHPMailer-master/src/PHPMailer.php';
        require './PHPMailer-master/src/SMTP.php';

        // Create a new PHPMailer object.
        $mail = new PHPMailer();

        if ($count > 0) {
            echo "<h1>Já estavas registadx na base de dados!</h1>";
        } else {
            // Insert data into database
            $query = "INSERT INTO subscriber_maior (name, email) VALUES ('$name', '$email')";
            $db->exec($query);

            // Display success message
            echo "<h1>Registadx com sucesso na base de dados!</h1>";

            // Configure the SMTP service.
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;

            // Replace with your Gmail username
            $mail->Username = '';

            // Replace with your Gmail "app password"
            $mail->Password = '';

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->setFrom('', 'Maior Major');
            $mail->addAddress($email, $name);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Bem-vindx à Newsletter do Maior';
            $mail->Body = 'Mekie ' . $name . '! A partir de hoje estás atualizadinhx quanto a novos sons do Maior. Agradecido. Começa por me seguir nas redes sociais: https://linktr.ee/maior.major';
            $mail->Body .= "\r\n\r\nSe queres cancelar a subscrição, clica neste link: https://web.fe.up.pt/~up201705355/Jorge+Marques/forms/unsubscribe_maior.php";


            // Send the email.
            if (!$mail->send()) {
                echo '<h2>O e-mail não foi enviado.</h2>';
                echo '<h2>Erro: ' . $mail->ErrorInfo . '</h2>';
            } else {
                echo '<h2>O e-mail foi enviado.</h2><p>Verifica a caixa de spam ou lixo e adiciona um gajo à whitelist ;)</p>';
            }
        }

        // Close database connection
        $db->close();
        ?>


        <button onclick="window.location.href = '../musica/home.php';">Voltar ao
            site</button>

    </div>
</body>

</html>