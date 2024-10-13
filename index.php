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


        <a href="login.php">Login</a>
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


    <!--Ver serviços ou contatos-->
    <section class="container-servico-contatos">
        <h1>Obtenha mais informações na área de serviços e contacte-nos.</h1>
        <div class="botoes-servicos-contatos">
            <a href="servicos.html">Ver Serviços</a>
            <a href="contatos.html">Contatos</a>
        </div>

    </section>

    <footer>
        Inteligência Artificial &copy; 2030 | &reg; Todos os direitos reservados.
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

<!-- Leaflet.js (Mapas) -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script>
    // Inicializar o mapa
    var map = L.map('map').setView([-24.703336097821495, -48.0061888911996], 13);

    // Adicionar a camada de mapa
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Adicionar marcador
    L.marker([-24.703336097821495, -48.0061888911996]).addTo(map)
        .bindPopup(
            'Academia Acqua Vida<br>Rua Januário Lisboa, 82 - Vila Elias, Jacupiranga - SP')
        .openPopup();

    // Função para traçar a rota no Google Maps
    document.getElementById('tracarRota').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat = position.coords.latitude;
                var lon = position.coords.longitude;
                var destination = "-24.703336097821495, -48.0061888911996"; // Coordenadas da Academia
                var url =
                    `https://www.google.com/maps/dir/?api=1&origin=${lat},${lon}&destination=${destination}&travelmode=driving`;
                window.open(url, '_blank');
            }, function() {
                alert(
                    "Não foi possível acessar a localização. Verifique suas permissões de geolocalização.");
            });
        } else {
            alert("Geolocalização não é suportada pelo seu navegador.");
        }
    });
</script>



</html>