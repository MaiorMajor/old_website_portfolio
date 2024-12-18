<?php include('../templates/HEAD-musica.php'); ?>

<body id="encomendas" class="encomendas">
	<a href="merch.php">VOLTAR</a>
	<h1 class="encomendas-h1">ENCOMENDAR PRODUTO</h1>
	<form id="encomendaForm" class="encomendas-form" action="../forms/processar_formulario.php" method="post">
		<label for="name">Nome:</label>
		<input type="text" id="name" name="name" required><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="produto">Produto:</label>
		<select id="produto" name="produto" required>
			<option value="">Selecione um produto</option>
			<option value="produto1" data-quantia="5€" label="Fita-cola MAIOR MAJOR">Fita-cola MAIOR MAJOR-5€-</option>
			<option value="produto2" data-quantia="15€" label="T-shirt MAIOR MAJOR">T-shirt MAIOR MAJOR-15€-</option>
			<option value="produto3" data-quantia="10€" label="Caneca MAIOR MAJOR">Caneca MAIOR MAJOR-10€-</option>
		</select><br>

		<label for="mensagem">Mensagem:</label>
		<textarea id="mensagem" name="mensagem" rows="4" cols="50"
			placeholder="Insere detalhes sobre a tua encomenda aqui" spellcheck="active"></textarea><br>

		<input type="submit" value="Enviar Encomenda">
	</form>
	<script src="../script.js"></script>

</body>

</html>