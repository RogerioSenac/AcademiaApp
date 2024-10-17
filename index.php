<?php
include("../AcademiaApp/includes/header.php")
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <link rel="stylesheet" href="assets/css/estiloheader.css">
    <link rel="shortcut icon" href="assets/imagem/logo_acqua_vida.jpg" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
</head>

<body>
    <!-- <nav class="container-navegacao">
        <a href="index.php">Início</a>
        <a href="quem_somos.php">Quem Somos</a>
        <a href="https://www.facebook.com/AcademiaAcquaVida/photos_by?locale=pt_BR" target="_blank">Fotos</a>
        <a href="https://www.facebook.com/AcademiaAcquaVida/videos?locale=pt_BR" target="_blank">Videos</a>
        <a href="./senha/DashAcesso.php">Login</a>
    </nav> -->

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
            <div class="card bg-transparent">
                <div class="card-mapa">
                    <button id="tracarRota" class="btn btn-dark">Traçar Rota</button>
                </div>
            </div>
        </div> <!-- Fechamento da div content -->
    </section>

    <?php
        include("../AcademiaApp/includes/footer.php")
    ?>


    <footer>
        <div class="interface" id="contato">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                        <img src="./assets/imagem/logoDev.png">
                    </div>
                    <!--Fim logo-footer-->
                    <div class="btn-social">
                        <a href="#"><button><i class="fa-brands fa-facebook"></i></button></a>

                        <a href="https://www.instagram.com/developers.rgt?igsh=MXF1bml6OHAyeXcwNA=="
                            target="_blank"><button><i class="fa-brands fa-instagram"></i></button></a>

                        <a href="https://www.linkedin.com/in/developers-rgt-862402309" target="_blank"><button><i
                                    class="fa-brands fa-linkedin"></i></button></a>

                        <a href="https://www.youtube.com/@developers_rgt?si=oQlWOmaRf2SRPzlD&fbclid=PAZXh0bgNhZW0CMTEAAaYqnLMgVcRIadkyQ5bQ6MNxTCTzn54hLfiPhnE_JIKYDPlky-PEubYzu0g_aem_AZ5WecxAIc8cxdrGFj8cjiGjndHYazGJ6A-xIEf5Gyn1Et8ZO3SSA65_nPesYYSksfh2gltMmyF2FESUFtbq0KQ2
                        " target="_blank"><button><i class="fa-brands fa-youtube"></i></button></a>

                        <a href="https://github.com/DevelopersRGT" target="_blank"><button><i
                                    class="fa-brands fa-github"></i></button></a>
                    </div>
                    <!--Fim btn-social-->
                </div>
                <!--Fim Flex-->
                <div class="line-footer borda">
                    <p>
                        <i class="fa-solid fa-envelope" id="faleicon"></i> <a id="falecom"
                            href="mailto:falecomdevelopersrgt@gmail.com">falecomdevelopersrgt@gmail.com</a>
                    </p>

                    <p class="designby">
                        Design By <span>Dev</span>elopers <span>RGT</span>
                    </p>
                </div>
                <!--Fim Line-Footer Borda-->
            </div>
            <!--Fim Line-footer-->
        </div>
        <!--Fim Interface-->
    </footer>
    <!--Fim Footer-->

    Academia Acqua Vida &copy; 2030 | &reg; Todos os direitos reservados.


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
</body>

</html>