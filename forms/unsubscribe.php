<!DOCTYPE html>
<html class="unsubscribe">

<head>
  <meta charset="UTF-8">
  <title>Cancelar subscrição</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/favicons/jmicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
  <style>
    body {
      font-family: 'Kulim Park', sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      background-color: #f1f1f1;
    }
    button {
      background: none;
      border: none;
      text-decoration: none;
      font-weight: bold;
      color: #333;
      font-size: 14px;
    }
    .success {
      color: green;
    }
    .error {
      color: red;
    }
    form {
      margin-top: 20px;
      text-align: center;
    }
    h2 {
      font-weight: bold;
      font-size: 24px;
      margin-bottom: 10px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="email"] {
      width: 300px;
      height: 30px;
      padding: 5px;
      font-size: 14px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      font-size: 14px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <header>
    <button><a href="https://web.fe.up.pt/~up201705355/Jorge+Marques/artes/home.php">Voltar ao site<a></button>
    <aside class="pages_selector">
      <ul>
        <li><a href="../index.php"><img src="../images/ICONS/HALL.png" title="Studio Hall"></a></li>
        <li><a href="../artes/home.php"><img src="../images/ICONS/JM.png" title="Jorge Marques"></a></li>
        <li><a href="../musica/home.php"><img src="../images/ICONS/MAIOR.png" title="Maior Major"></a></li>
      </ul>
    </aside>
  </header>

  <?php
  // Verifica se o formulário foi submetido
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o email digitado pelo utilizador
    $email = $_POST["email"];

    // Conexão com a base de dados SQLite
    $db = new SQLite3('db_subscriber_artes.sqlite');

    // Verifica se o email existe na tabela
    $query = $db->prepare("SELECT * FROM subscriber WHERE email = :email");
    $query->bindValue(':email', $email, SQLITE3_TEXT);
    $result = $query->execute();

    if ($row = $result->fetchArray()) {
      // Remove o utilizador da tabela
      $query = $db->prepare("DELETE FROM subscriber WHERE email = :email");
      $query->bindValue(':email', $email, SQLITE3_TEXT);
      $query->execute();

      echo "<div class='success'>A tua subscrição foi cancelada com sucesso.<div>";
    } else {
      echo "<div class='error'>O email fornecido não existe na base de dados.</div>";
    }

    // Fecha a conexão com a base de dados
    $db->close();
  }
  ?>

  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <h2>Cancelar subscrição</h2>
    <p>Newsletter - Jorge Marques Studio
      <label for="email">Email:</label>
      <input type="email" name="email" required><br><br>
      <input type="submit" value="Cancelar subscrição">
  </form>

</body>

</html>