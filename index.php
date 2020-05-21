<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>site</title>
        <link rel="stylesheet" href="style/style.css">
        <script src="https://kit.fontawesome.com/353c2a62b7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main class="website">
            <header>
                <div class="left_side">
                    <a href="#">
                        <img src="img/logodois.png" alt="">
                    </a>
                    <!-- <ul>
                        <li><a class="actived" href="#">HOME</a></li>
                    </ul> -->
                </div>
                <div class="right_side">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <form method="post">
                            <input type="text" name="ask" placeholder="Pesquise...">
                            <button><i class="fas fa-search"></i></button>
                    </form>
                    <!-- <a style="cursor: pointer;">COMEÇAR AGORA</a> -->
                </div>
            </header>
            <div class="fique">
                <p>#FIQUEEMCASA <i class="fas fa-home"></i></p>
            </div>
            <section class="help_banner">
                <h1>SAIBA O PORQUE EXISTIMOS</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, molestiae iure beatae, a facere nulla tenetur temporibus doloribus ipsum eligendi porro accusantium quos eum voluptates iste iusto ratione suscipit dolorum!</p>
                <!-- <form method="post">
                    <div class="search_box">
                        <input type="text" name="ask" placeholder="Search">
                        <i class="fas fa-search"></i>
                    </div>
                </form> -->
            </section>
            <article>
                <div class="card_link">
                    <a style="cursor: pointer;">
                        <span><i class="fas fa-map-marked-alt"></i></span>
                        <h2>LOCAIS DE ATENDIMENTO</h2>
                        <p>Com os videos tutoriais você pode obter toda a ajuda que você precisa para aprender e enteder como funciona os aplicativos de celular</p>
                    </a>
                    <a style="cursor: pointer;">
                        <span><i class="fas fa-people-carry"></i></span>
                        <h2>CAMPANHAS</h2>
                        <p>As duvidas frequentes estão presentes para ajudar você, por se tratar duvidas comuns talvez possa ser a sua caso tenha alguma.</p>
                    </a>
                    <a style="cursor: pointer;" id="start">
                        <span><i class="fas fa-gavel"></i></span>
                        <h2>OS SEUS DIREITOS</h2>
                        <p>Com o material passo a passo você pode acompanhar todo o conteudo do vide em uma mini apostila PDF.</p>
                    </a>
                </div>
            </article>
        </main>
        <main class="modal_website" id="modal">
            <div class="scroll">
                <div class="cabecalho">
                    <span>
                        <p><i class="fas fa-gavel"></i>DIREITOS</p>
                        <a style="cursor: pointer;" id="hidden"><i class="fas fa-long-arrow-alt-left"></i> VOLTAR</a>
                    </span> 
                    <h1>Saiba quais são seus direitos.</h1>
                </div> 
                <div class="text">
                    <img src="img/direitos.jpeg" alt="direitos">
                    <p>A saúde é um estado de bem-estar inerente a todo ser humano, é considerado essencial para a
                        execução e garantia dos demais direitos existentes, como a efetivação de uma vida digna. O
                        direito à saúde, presente na Constituição Federal de 1988, é fundamental para a estruturação
                        uma sociedade, além da promoção da qualidade e expectativa de vida, primordial para o
                        funcionamento e desenvolvimento de uma nação.</p>
                    <p>A partir do pressuposto da saúde como sendo um direito fundamental do homem, pois
                        garante o direito á vida e dignidade, nota-se que ao longo da Constituição é ressaltado diversas
                        vezes a sua garantia a todo e qualquer ser humano, ou seja, independentemente de suas
                        incapacidades e debilidades, por sua vez irrelevantes na definição de humanidade. Baseando-
                        se nessa ideologia é que ocorreu a construção SUS, seus princípios e os demais sistemas de
                        saúde, com a finalidade de promover assistência e tratamento de qualidade respeitando e
                        levando em consideração as particularidades e diferenças de cada um. Diante disso, surge ao
                        longo da história dos serviços de saúde a criação de leis para garantir pragmaticamente a
                        defesa do acesso da comunidade surda, hoje totalizando um número progressivamente
                        crescente.</p>
                </div>
            </div>
        </main>
        <script>
            function show_content(){
                let btn = document.getElementById("start");
                let btn_close = document.getElementById("hidden");

                btn.addEventListener('click', function(){
                    document.querySelector('#modal').classList.toggle("out");
                });

                btn_close.addEventListener('click', function(){
                    document.querySelector('#modal').classList.toggle("out");
                });
            }

            show_content();
        </script>
    </body>
</html>