<?php
include("./includes/header.php")

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Acqua Vida</title>
    <!--Estilos da pagina-->
    <link rel="stylesheet" href="assets/css/estiloheader.css">

    <!--favicon-->
    <link rel="shortcut icon" href="assets/imagem/logo_acqua_vida.jpg" type="image/png">
</head>

<body>
    <!--quem somos-->
    <section class="container-quem-somos">
        <article class="servico">
            <img class="icones" src="assets/imagem/icon_ironman.png" class="icone" alt="icone" alt="quemsomos">
            <p class="servico-texto">
                Seja bem-vindo à <span class="servico-texto-realce"> Academia Acqua Vida </span>, onde a paixão pela saúde e bem-estar se transforma em aprendizado e prática. Somos uma <span class="servico-texto-realce">escola de natação</span> e uma <span class="servico-texto-realce">academia</span> comprometida em promover um estilo de vida saudável para todos.<br>

                Nossa equipe dedicada trabalha em conjunto para oferecer um ambiente acolhedor e motivador, onde você pode desenvolver suas habilidades, melhorar sua condição física e, acima de tudo, se divertir. Venha fazer parte da nossa comunidade e descobrir como é possível unir esporte, saúde e amizade!<br>

                Junte-se a nós na jornada em busca de um corpo saudável e uma mente equilibrada. Aqui, promovemos saúde e bem-estar para todos!
            </p>
        </article>

        <article class="servico">
            <img src="assets/imagem/icon-halter.png" class="icones" alt="icone" alt="Aparelhos Modernos">
            <p class="servico-texto">
                Oferecemos uma infraestrutura de ponta, com equipamentos que garantem a melhor experiência para os nossos alunos. Nossas instalações foram cuidadosamente planejadas para atender a todas as suas necessidades, proporcionando um ambiente confortável e funcional.<br>

                Estamos comprometidos em oferecer a você não apenas um espaço para treinar, mas um verdadeiro centro de saúde e bem-estar. Venha descobrir como podemos ajudar você a alcançar seus objetivos de forma eficiente e agradável!
            </p>
        </article>

        <article class="servico">
            <img src="assets/imagem/icon_personal-removebg-preview.png" class="icones" alt="icone" alt="Programadores experientes">
            <p class="servico-texto">
                Contamos com uma equipe de profissionais altamente qualificados, dedicados a ajudar você a alcançar e superar seus limites. Nossos colaboradores são especialistas em suas áreas e estão sempre prontos para oferecer orientação, motivação e suporte personalizado.<br>

                Nosso compromisso é garantir que cada aluno tenha uma experiência única e transformadora, promovendo não apenas o desenvolvimento físico, mas também o fortalecimento da mente. Venha nos conhecer e descubra como podemos trabalhar juntos para que você atinja seus objetivos!
            </p>
        </article>
    </section>

    
    <?php include("./includes/footer.php")?>
    

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


</html>