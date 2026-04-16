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
    <header id="header" class="header">
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="assets/img/logo.svg" alt="Ellos Design Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a id="about-header" href="#about">Sobre</a></li>
                    <li><a id="services-header" href="#services">Serviços</a></li>
                    <li><a id="questions-header" href="#questions">Perguntas Frequentes</a></li>
                </ul>
            </nav>
            <div class="phone">
                <span class="phone-number">
                    (11) 96129-9980
                </span>
            </div>
        </div>
    </header>
    <main>
        <section id="hero" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Transforme sua marca em uma experiência memorável</h1>
                    <p>Na Ellos Design, criamos soluções visuais que não apenas impressionam, mas conectam sua marca com os clientes de forma profunda e autêntica. Desde identidade visual até experiências digitais, levamos seu negócio para o próximo nível.</p>
                </div>

                <form class="contact-form" id="contactForm">
                    <span>Comece agora mesmo</span>
                    <input type="text" id="name" name="name" placeholder="Seu nome" required>
                    <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
                    <input type="text" id="telephone" name="telephone" placeholder="Seu telefone" required>
                    <textarea class="contact-message" name="message" id="message" placeholder="Conte-nos sobre seu projeto" wrap="soft" required></textarea>
                    <button type="submit">Solicitar Orçamento</button>
                    <div class="form-message success-message" id="successMessage">
                        <p>✓ Obrigado pela sua solicitação! Recebemos com sucesso sua mensagem. Nossa equipe entrará em contato em breve.</p>
                    </div>
                    <div class="form-message error-message" id="errorMessage">
                        <p>✗ Por favor, preencha todos os campos corretamente.</p>
                    </div>
                </form>
            </div>
        </section>
        <section class="about" id="about">
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
        <section class="services" id="services">
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
            <button id="services-button" class="services-button">Conhecer todos os serviços</button>
        </section>
    </main>
    <section class="questions" id="questions">
    <div class="container">
        <h2>Perguntas Frequentes</h2>
        <div class="question-item">
            <div class="question-header">
                <p>Quanto tempo leva para completar um projeto de design?</p>
                <span class="icon">+</span>
            </div>
            <div class="answer-wrapper">
                <div class="answer-content">
                    O tempo varia conforme a complexidade. Um logo/identidade visual leva 2 a 3 semanas, um website entre 4 a 6 semanas, e branding completo de 8 a 12 semanas. Esses prazos dependem da agilidade nos feedbacks.
                </div>
            </div>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p>Qual é o valor de um projeto de design?</p>
                <span class="icon">+</span>
            </div>
            <div class="answer-wrapper">
                <div class="answer-content">
                    Os valores são personalizados conforme o escopo. Realizamos uma consultoria inicial gratuita para entender sua necessidade e disponibilizamos um orçamento detalhado. Oferecemos pacotes desde pequenos projetos até soluções corporativas.
                </div>
            </div>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p>Vocês fazem redesign de marcas existentes?</p>
                <span class="icon">+</span>
            </div>
            <div class="answer-wrapper">
                <div class="answer-content">
                    Sim! Especializamos em renovação de identidades visuais. Analisamos sua marca atual, mercado e objetivos para criar um redesign que mantenha sua essência mas a modernize e reposicione no mercado.
                </div>
            </div>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p>Quais são as formas de pagamento e prazo?</p>
                <span class="icon">+</span>
            </div>
            <div class="answer-wrapper">
                <div class="answer-content">
                    Aceitamos transferência bancária, cartão de crédito e PIX. Geralmente solicitamos 50% de adiantamento no início do projeto e 50% na entrega. Projetos maiores podem parcelar em até 3x.
                </div>
            </div>
        </div>
        <div class="question-item">
            <div class="question-header">
                <p>Posso solicitar alterações após a entrega?</p>
                <span class="icon">+</span>
            </div>
            <div class="answer-wrapper">
                <div class="answer-content">
                    Sim! Incluímos 2 rodadas de revisões no pacote. Alterações adicionais têm um custo à parte. Oferecemos também planos de suporte contínuo para empresas que precisam de ajustes frequentes em seus materiais.
                </div>
            </div>
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
                <button id="schedule-consultation">Agendar Consulta</button>
                <p class="contact-confirmation">Responderemos em até 24 horas com uma proposta personalizada.</p>
            </div>
    </section>
    <footer class="footer">
            <span>Ellos Design © 2026 - Todos os direitos reservados</span>
            <span>CNPJ: 12.345.678/0001-99 | Termos de Uso | Política de Privacidade</span>
    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>