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
        <a href="index.php">Quem Somos</a>
        <a href="servicos.html">Nossos Serviços</a>
        <a href="contatos.html">Contatos</a>
        <a href="login.php">Login</a>
    </nav>

    <!--quem somos-->
    <section class="container-quem-somos">
        <article class="servico">
            <img class="icones" src="assets/imagem/icon_ironman.png" class="icone" alt="icone" alt="IRONMAN">
            <p class="servico-texto">
                Seja bem-vindo à <span class="servico-texto-realce"> Academia AcquaVida </span>, onde a paixão pela saúde e bem-estar se transforma em aprendizado e prática. Somos uma <span class="servico-texto-realce">escola de natação</span> e uma <span class="servico-texto-realce">academia</span> comprometida em promover um estilo de vida saudável para todos.<br>

                Nossa equipe dedicada trabalha em conjunto para oferecer um ambiente acolhedor e motivador, onde você pode desenvolver suas habilidades, melhorar sua condição física e, acima de tudo, se divertir. Venha fazer parte da nossa comunidade e descobrir como é possível unir esporte, saúde e amizade!<br>

                Junte-se a nós na jornada em busca de um corpo saudável e uma mente equilibrada. Aqui, promovemos saúde e bem-estar para todos!
            </p>
        </article>

        <article class="servico">
            <img src="assets/imagem/icon-halter.png" class="icones" alt="icone" alt="Aparelhos Modernos">
            <p class="servico-texto">
                Na <span class="servico-texto-realce"> Academia AcquaVida </span>, oferecemos uma infraestrutura de ponta, com equipamentos que garantem a melhor experiência para os nossos alunos. Nossas instalações foram cuidadosamente planejadas para atender a todas as suas necessidades, proporcionando um ambiente confortável e funcional.<br>

                Estamos comprometidos em oferecer a você não apenas um espaço para treinar, mas um verdadeiro centro de saúde e bem-estar. Venha descobrir como podemos ajudar você a alcançar seus objetivos de forma eficiente e agradável!
            </p>
        </article>

        <article class="servico">
            <img src="assets/imagem/icon_personal-removebg-preview.png" class="icones" alt="icone" alt="Programadores experientes">
            <p class="servico-texto">
                Na <span class="servico-texto-realce"> Academia AcquaVida </span>, contamos com uma equipe de profissionais altamente qualificados, dedicados a ajudar você a alcançar e superar seus limites. Nossos colaboradores são especialistas em suas áreas e estão sempre prontos para oferecer orientação, motivação e suporte personalizado.<br>

                Nosso compromisso é garantir que cada aluno tenha uma experiência única e transformadora, promovendo não apenas o desenvolvimento físico, mas também o fortalecimento da mente. Venha nos conhecer e descubra como podemos trabalhar juntos para que você atinja seus objetivos!
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