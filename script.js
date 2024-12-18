// Slider
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(n) {
  slides[currentSlide].classList.remove('active');
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].classList.add('active');

  // Update the selected square element in the subsubnav bar
  document.querySelectorAll('.square.selected')
    .forEach(selectedSquare => selectedSquare.classList.remove('selected'));
  const square = document.querySelector(`.square[data-index="${currentSlide}"]`);
  square.classList.add('selected');

  // Add the article ID to the URL
  const articleId = `article_${currentSlide}`;
  window.location.hash = articleId;
}

// Get all article li elements
const articleList = document.querySelectorAll('.article_selector li');

// Loop through each article li element
articleList.forEach((article, index) => {
  // Add a click event listener to the article li element
  article.addEventListener('click', () => {
    // If the article li element doesn't have the selected class
    if (!article.classList.contains('selected')) {
      // Remove the selected class from any previously selected li elements
      document.querySelectorAll('.article_selector li.selected')
        .forEach(selectedArticle => selectedArticle.classList.remove('selected'));

      // Add the selected class to the clicked article li element
      article.classList.add('selected');

      // Show the corresponding slide
      showSlide(index);
    }
  });
});

// Get all square links
const squareLinks = document.querySelectorAll('.square a');

// Loop through each square link
squareLinks.forEach(link => {
  // Get the index of the corresponding article
  const index = parseInt(link.getAttribute('data-index'));

  // Add a click event listener to the square link
  link.addEventListener('click', (event) => {
    // Prevent the default link behavior
    event.preventDefault();

    // Remove the selected class from any previously selected articles
    document.querySelectorAll('.article.selected')
      .forEach(selectedArticle => selectedArticle.classList.remove('selected'));

    // Add the selected class to the corresponding article
    const article = document.querySelector(`.article[data-index="${index}"]`);
    article.classList.add('selected');

    // Show the corresponding slide
    showSlide(index);
  });
});

// Check if the URL has an anchor link to a specific article
if (window.location.hash.startsWith('#article_')) {
  // Get the article index from the anchor link
  const index = parseInt(window.location.hash.replace('#article_', ''));

  // Show the corresponding slide and article
  showSlide(index);
  const article = document.querySelector(`.article[data-index="${index}"]`);
  article.classList.add('selected');
}

// Show initial slide
showSlide(currentSlide);

document.querySelector('.next').addEventListener('click', () => showSlide(currentSlide + 1));
document.querySelector('.prev').addEventListener('click', () => showSlide(currentSlide - 1));

/*Tentativa de implementar fullscreen
//API FULLSCREEN
const image = document.getElementById("image");
const fullscreenButton = document.getElementById("fullscreenButton");

// toggle fullscreen
fullscreenButton.addEventListener("click", function () {
  image.requestFullscreen();
});

// listens for fullscreen toggle
document.addEventListener("fullscreenchange", function () {
  if (document.fullscreenElement) {
    console.log("Entered full-screen mode");
  } else {
    console.log("Exited full-screen mode");
  }
}); */

//ENCOMENDAS
const form = document.querySelector('#encomendaForm');
		form.addEventListener('submit', (event) => {
			event.preventDefault(); // previne o envio padrão do formulário

			// obtém os valores dos campos do formulário
			const nome = form.name.value;
			const email = form.email.value;
			const produto = form.produto.value;
			const mensagem = form.mensagem.value;

			// cria um objeto FormData e adiciona os valores dos campos
			const formData = new FormData();
			formData.append('name', nome);
			formData.append('email', email);
			formData.append('produto', produto);
			formData.append('mensagem', mensagem);

			// faz uma requisição POST para o arquivo PHP processar_formulario.php
			fetch('../forms/processar_formulario.php', {
				method: 'POST',
				body: formData
			})
				.then(response => {
					console.log('Resposta do servidor:', response);
					// faça algo com a resposta do servidor aqui, se necessário
					// Ocultar o formulário
					form.style.display = 'none';
					document.getElementById('display').classList.remove('hide');
				})
				.catch(error => {
					console.error('Erro ao enviar dados do formulário:', error);
				});
		});