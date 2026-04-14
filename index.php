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
            <div class="contact">
                <span class="contact-number">
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
    </main>
    <footer></footer>
</body>
</html>