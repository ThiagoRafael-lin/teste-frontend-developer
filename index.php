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
                <img src="assets/img/logo.svg" alt="Ellos Design Logo">
            </div>
            <div class="phone">
                <span class="phone-number">
                    (11) 96129-9980
                </span>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Transforme sua marca em uma experiência memorável</h1>
                    <p>Na Ellos Design, criamos soluções visuais que não apenas impressionam, mas conectam sua marca com os clientes de forma profunda e autêntica. Desde identidade visual até experiências digitais, levamos seu negócio para o próximo nível.</p>
                </div>

                <form class="contact-form" action="">
                    <span>Comece agora mesmo</span>
                    <input type="text" id="name" name="name" placeholder="Seu nome">
                    <input type="email" id="email" name="email" placeholder="Seu e-mail">
                    <input type="text" id="telephone" name="telephone" placeholder="Seu telefone">
                    <textarea class="contact-message" name="message" id="message" placeholder="Conte-nos sobre seu projeto" wrap="soft"></textarea>
                    <button type="submit">Solicitar Orçamento</button>
                </form>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div>
                    <img src="assets/img/about-team.svg" alt="Equipe Ellos Design">
                </div>
                <div class="about-content">
                    <h2>Quem Somos</h2>
                    <p>Somos uma equipe de designers, estrategistas e desenvolvedores apaixonados por criar experiências visuais que geram resultados reais. Há mais de 8 anos, ajudamos empresas de todos os tamanhos a se destacarem no mercado através de design inovador e estratégia criativa.</p>
                    <p>Nosso compromisso é simples: entregar soluções que não apenas parecem boas, mas que funcionam. Cada projeto é uma oportunidade de transformar visões em realidade e construir marcas memoráveis.</p>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <h2>Serviços que impulsionam seu negócio</h2>
                <div class="services-content">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/icone-paleta.svg" alt="Identidade Visual">
                        </div>
                        <div class="service-text">
                            <h3>Identidade Visual</h3>
                            <p>Criamos identidades visuais únicas que representam os valores da sua marca e a diferenciam da concorrência.</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/icone-website.svg" alt="Design de Sites">
                        </div>
                        <div class="service-text">
                            <h3>Design de Sites</h3>
                            <p>Websites modernos, responsivos e otimizados para conversão que transformam visitantes em clientes.</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/icone-marca.svg" alt="Branding">
                        </div>
                        <div class="service-text">
                            <h3>Branding Estratégico</h3>
                            <p>Desenvolvemos estratégias de marca que conectam emocionalmente com seu público-alvo.</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/icone-marketing.svg" alt="Marketing Digital">
                        </div>
                        <div class="service-text">
                            <h3>Marketing Digital</h3>
                            <p>Campanhas criativas em redes sociais e digital que geram resultados mensuráveis para seu negócio.</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/icone-ux.svg" alt="UX/UI Design">
                        </div>
                        <div class="service-text">
                            <h3>UX/UI Design</h3>
                            <p>Interfaces intuitivas e experiências de usuário que aumentam satisfação e fidelidade.</p>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/icone-consultoria.svg" alt="Consultoria Criativa">
                        </div>
                        <div class="service-text">
                            <h3>Consultoria Criativa</h3>
                            <p>Orientação especializada para potencializar sua comunicação visual e estratégia de marca.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="services-button">Conhecer todos os serviços</button>
        </section>
    </main>
    <section class="questions">
        <div class="container">
            <h2>Perguntas Frequentes</h2>
            <div class="question-item">
                <p>Quanto tempo leva para completar um projeto de design?</p>
            </div>
            <div class="question-item">
                <p>Quais são as etapas do processo de criação de uma identidade visual?</p>
            </div>
            <div class="question-item">
                <p>Vocês oferecem suporte e alterações após o projeto ser entregue?</p>
            </div>
            <div class="question-item">
                <p>Como funciona o processo de consultoria e quanto custa?</p>
            </div>
            <div class="question-item">
                <p>Posso ter acesso aos arquivos originais e fontes utilizadas?</p>
            </div>
        </div>
    </section>
    <section class="contact">
           <div class="contact-content">
                    <h2>Pronto para <br> elevar sua marca?</h2>
                    <p>Não espere mais. Entre em contato conosco hoje <br> e descubra como podemos transformar sua visão <br> em realidade.</p>
            </div>
            <div class="contact-callToAction">
                <p class="contact-description">Agende uma consulta gratuita com nossos especialistas e receba uma análise personalizada para sua marca.</p>
                <button>Agendar Consulta</button>
                <p class="contact-confirmation">Responderemos em até 24 horas com uma proposta personalizada.</p>
            </div>
    </section>
    <footer class="footer">
            <span>Ellos Design © 2026 - Todos os direitos reservados</span>
            <span>CNPJ: 12.345.678/0001-99 | Termos de Uso | Política de Privacidade</span>
    </footer>
</body>
</html>