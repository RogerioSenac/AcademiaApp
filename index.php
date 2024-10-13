<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <!--Estilos da pagina-->
    <link rel="stylesheet" href="assets/css/estilos.css">

    <!--favicon-->
    <link rel="shortcut icon" href="assets/imagem/logo_acqua_vida.jpg" type="image/png">
</head>

<body>


    <!--Cabeçalho-->

    <header class="container-cabecalho">

        <a>
            <img class="img" src="assets/imagem/logo_acqua_vida.jpg" alt="Logo da Empresa" title="Academia Acqua Vida">
        </a>
    </header>


    <!--Navegação-->
    <nav class="container-navegacao">
        <a href="index.php">Início</a>
        <a href="quem_somos.php">Quem Somos</a>
        <a href="https://www.facebook.com/AcademiaAcquaVida/photos_by?locale=pt_BR" target="_blank">Fotos</a>
        <a href="https://www.facebook.com/AcademiaAcquaVida/videos?locale=pt_BR" target="_blank">Videos</a>
        <a href="./senha/DashAcesso.php">Login</a>
    </nav>

    <!--quem somos-->
    <section class="container-video-apresenta">
        <article class="apresenta">

            <h1>Prazer somos a Acqua Vida!</h1>

            <video id="meuVideo" width="640" height="360" controls>
                <source src="./Assets/videos/video_apresentacao.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </article>

    </section>

    <!--Ver serviços ou contatos-->
    <section class="container-servico-contatos">
        <article class="servico">
            <h1>Nossos Serviços.</h1>
            <p class="servico-texto">
                Temos atividades para toda a família:<br>
                Saiba Mais
            </p>
            <div class="botoes-servicos-contatos">
                <a href="#">Musculação</a>
                <a href="#">Natação Baby</a>
                <a href="#">Hidroterapia</a>
                <a href="#">Natação Geral</a>
                <a href="#">Hidroginástica</a>
                <a href="#">Avaliação Física</a>
            </div>
            <p>
                Entre em contato e venha fazer uma aula experimental!
            </p>

        </article>
    </section>


    <section id="mapa" class="d-flex flex-column align-items-center">
        <div class="content text-center">
            <!-- Card com Mapa de Geolocalização -->
            <h4>Encontre-nos no Mapa</h4>
            <div id="map" style="height: 350px; width: 100%;"></div>
            <div class="card bg-transparent border-light">
                <div class="card-mapa">
                    <button id="tracarRota" class="btn btn-dark">Traçar Rota</button>
                </div>
            </div>
    </section>


    <footer>
        Academia Acque Vida &copy; 2030 | &reg; Todos os direitos reservados.
    </footer>

</body>

<script>
    // Adiciona um evento que detecta quando o vídeo termina
    document.getElementById('meuVideo').addEventListener('ended', function() {
        // Redireciona para index.php
        window.location.href = 'index.php';
    });
</script>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para rolagem suave -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>




</html>