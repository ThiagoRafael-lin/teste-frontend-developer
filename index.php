<?php
require_once 'inc/configuracao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Landing Page - Ellos Design</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <p>LogoTipo</p>
                <!-- <img src="" alt=""> -->
            </div>
            <div class="phone">
                <span class="phone-number">
                    (48) 99999-9999
                </span>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Aqui vai a sua headline. Foque na transformação que seu produto gera.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt!</p>
                </div>

                <form class="contact-form" action="">
                    <span>Chamada para ação</span>
                    <input type="text" id="name" name="name" placeholder="Nome:">
                    <input type="email" id="email" name="email" placeholder="E-mail:">
                    <input type="text" id="telephone" name="telephone" placeholder="Telefone:">
                    <textarea class="contact-message" name="message" id="message" placeholder="Como podemos te ajudar?" wrap="soft"></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div>
                    <img src="assets/img/pessoas.jpg" alt="Pessoas">
                </div>
                <div class="about-content">
                    <h2>Quem Somos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt, Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendiLorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi.</p>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <h2>Com este serviço você:</h2>
                <div class="services-content">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/iconeServico.png" alt="Serviço 2">
                        </div>
                        <div class="service-text">
                            <h3>Benefico do serviço</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt!</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/iconeServico.png" alt="Serviço 2">
                        </div>
                        <div class="service-text">
                            <h3>Benefico do serviço</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt!</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/iconeServico.png" alt="Serviço 2">
                        </div>
                        <div class="service-text">
                            <h3>Benefico do serviço</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt!</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/iconeServico.png" alt="Serviço 2">
                        </div>
                        <div class="service-text">
                            <h3>Benefico do serviço</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt!</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/iconeServico.png" alt="Serviço 2">
                        </div>
                        <div class="service-text">
                            <h3>Benefico do serviço</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt!</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/iconeServico.png" alt="Serviço 2">
                        </div>
                        <div class="service-text">
                            <h3>Benefico do serviço</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus amet impedit. Cumque eligendi, dolorem suscipit fugiat minima laudantium iste quae tempora repellendus sit consectetur qui in doloribus temporibus incidunt!</p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="services-button">Chamada para ação</button>
        </section>
    </main>
    <section class="questions">
        <div class="container">
            <h2>Perguntas Frequentes</h2>
            <div class="question-item">
                <p>Quando vou começar a ver os resultados da minha campanha?</p>
            </div>
            <div class="question-item">
                <p>Quando vou começar a ver os resultados da minha campanha?</p>
            </div>
            <div class="question-item">
                <p>Quando vou começar a ver os resultados da minha campanha?</p>
            </div>
            <div class="question-item">
                <p>Quando vou começar a ver os resultados da minha campanha?</p>
            </div>
            <div class="question-item">
                <p>Quando vou começar a ver os resultados da minha campanha?</p>
            </div>
        </div>
    </section>
    <section class="contact">
           <div class="contact-content">
                    <h2>Faça uma <br> chamada final</h2>
                    <p>Isso é uma chamada para ação final. Chegou até <br> aqui e ainda não cadastrou? Aproveite...</p>
            </div>
            <div class="contact-callToAction">
                <p class="contact-description">Descrição chamando para uma ultima ação. Converse com nossa equipe sem compromisso. não perca a chance de...</p>
                <button>Chamada para ação</button>
                <p class="contact-confirmation">Nossos especialistas vão entrar em contato com você ainda hoje.</p>
            </div>
    </section>
    <footer class="footer">
            <span>Nome da emrpesa © Todos os direitos reservados - 2026</span>
            <span>CNPJ 99.999.999 - 0009-99º TERMOS DE USO</span>
    </footer>
</body>
</html>