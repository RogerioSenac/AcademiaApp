<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="shortcut icon" href="assets/imagem/logo_acqua_vida.jpg" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
</head>

<body>
    <header class="container-cabecalho">
        <a>
            <img class="img" src="assets/imagem/logo_acqua_vida.jpg" alt="Logo da Empresa" title="Academia Acqua Vida">
        </a>
    </header>

    <nav class="container-navegacao">
        <a href="index.php">Início</a>
        <a href="quem_somos.php">Quem Somos</a>
        <a href="https://www.facebook.com/AcademiaAcquaVida/photos_by?locale=pt_BR" target="_blank">Fotos</a>
        <a href="https://www.facebook.com/AcademiaAcquaVida/videos?locale=pt_BR" target="_blank">Videos</a>
        <a href="./senha/DashAcesso.php">Login</a>
    </nav>

    <section class="container-video-apresenta">
        <article class="apresenta">
            <h1>Prazer somos a Acqua Vida!</h1>
            <video id="meuVideo" width="640" height="360" controls>
                <source src="./Assets/videos/video_apresentacao.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </article>
    </section>

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
                Venha nos visitar e fazer uma aula experimental!
            </p>
        </article>
    </section>

    <section id="mapa" class="d-flex flex-column align-items-center">
        <div class="content text-center">
            <h4>Encontre-nos no Mapa</h4>
            <div id="map" style="height: 350px; width: 100%;"></div>
            <div class="card bg-transparent border-light">
                <div class="card-mapa">
                    <button id="tracarRota" class="btn btn-dark">Traçar Rota</button>
                </div>
            </div>
        </div> <!-- Fechamento da div content -->
    </section>

    <footer>
        Academia Acqua Vida &copy; 2030 | &reg; Todos os direitos reservados.
    </footer>

    <script>
        document.getElementById('meuVideo').addEventListener('ended', function() {
            window.location.href = 'index.php';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
        var map = L.map('map').setView([-24.700397865367883, -48.003950472843286], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-24.700397865367883, -48.003950472843286]).addTo(map)
            .bindPopup('Igreja Presbiteriana do Brasil - Jacupiranga<br>Av. 23 de Junho, 262 - Vila Elias, Jacupiranga - SP')
            .openPopup();

        document.getElementById('tracarRota').addEventListener('click', function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    var destination = "-24.700397865367883, -48.003950472843286";
                    var url = `https://www.google.com/maps/dir/?api=1&origin=${lat},${lon}&destination=${destination}&travelmode=driving`;
                    window.open(url, '_blank');
                }, function() {
                    alert("Não foi possível acessar a localização. Verifique suas permissões de geolocalização.");
                });
            } else {
                alert("Geolocalização não é suportada pelo seu navegador.");
            }
        });
    </script>
</body>

</html>
