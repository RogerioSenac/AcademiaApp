<?php
include("../AcademiaApp/includes/header.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <!-- Ícone Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="./Assets/css/estiloheader.css">
</head>

<body>

    <section class="container-video-apresenta">
        <article class="apresenta">
            <h1>Prazer somos a Acqua Vida!</h1>
            <video id="meuVideo" width="540" height="360" controls>
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
            <div class="row botoes-servicos-contatos">
                <div class="col-4">
                    <a href="#">Musculação</a>
                </div>
                <div class="col-4">
                    <a href="#">Hidroterapia</a>
                </div>
                <div class="col-4">
                    <a href="#">Hidroginástica</a>
                </div>
                <div class="col-4">
                    <a href="#">Natação Baby</a>
                </div>
                <div class="col-4">
                    <a href="#">Natação Geral</a>
                </div>
                <div class="col-4">
                    <a href="#">Avaliação Física</a>
                </div>
            </div>
            <p class="servico-texto">
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
        var map = L.map('map').setView([-24.703404269966082, -48.00611380606861], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-24.703404269966082, -48.00611380606861]).addTo(map)
            .bindPopup('Academia Acqua Vida - Jacupiranga<br>Rua Januario Lisboa, 82 - Vila Elias, Jacupiranga - SP')
            .openPopup();

        document.getElementById('tracarRota').addEventListener('click', function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    var destination = "-24.703404269966082, -48.00611380606861";
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
