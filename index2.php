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
            <div class="botoes-servicos-contatos">
                <a href="#">Musculação</a>
                <a href="#">Natação Baby</a>
                <a href="#">Hidroterapia</a>
                <a href="#">Natação Geral</a>
                <a href="#">Hidroginástica</a>
                <a href="#">Avaliação Física</a>
            </div>
            <p class="servico-texto">
                Venha nos visitar e fazer uma aula experimental!
            </p>
        </article>
    </section>



    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>