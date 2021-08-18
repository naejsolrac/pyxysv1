<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/pyxys-logo.png' ?>" class="logo" width="119" height="24" alt="logotipo da pyxys">
                <p>Somos um núcleo de soluções digitais inovadoras que identifica oportunidades de mercado, desenvolve plano de negócios, aterrissa a estratégia, gerencia e monitora os resultados junto com a sua empresa</p>
            </div>

            <div class="col-lg-2">
                <h4>Nossas soluções</h4>
                <ul>
                    <li><a href="#">Para grupos de mídia</a></li>
                    <li><a href="#">Para startups</a></li>
                    <li><a href="#">Para empresas</a></li>
                </ul>
            </div>

            <div class="col-lg-2">
                <h4>Nossos resultados</h4>
                <ul>
                    <li><a href="#">Estadão Imóveis</a></li>
                    <li><a href="#">Estadão Mobilidade</a></li>
                    <li><a href="#">Jornal do Carro</a></li>
                    <li><a href="#">Autoline</a></li>
                </ul>
            </div>

            <div class="col-lg-2">
                <h4>Nossos pilares</h4>
                <ul>
                    <li><a href="#">Negócios e estratégia digital</a></li>
                    <li><a href="#">Conteúdo e social</a></li>
                    <li><a href="#">Business e Inteligence</a></li>
                    <li><a href="#">Dados e tecnologia</a></li>
                </ul>
            </div>

            <div class="col-lg-2">
                <h4>Fale conosco</h4>
                <ul>
                    <li><a href="<?php echo \App\ThemeConfig::option('whatsapp'); ?>">Contato via Whatsapp</a></li>
                    <li class="clear-dash">
                        <a href="<?php echo \App\ThemeConfig::option('linkedin'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/in-ico.png' ?>" alt="icone linkedin"></a>
                        <a href="<?php echo \App\ThemeConfig::option('facebook'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/fb-ico.png' ?>" alt="icone facebook"></a>
                    </li>
                </ul>
            </div>
        
        </div>
    </div>
</footer>

<div class="signiture">
    <div class="container">
        <div class="row">
            <div style="display:flex;justify-content:space-between;width:100%;">
                <p>
                    © 2020, PYXYS - Content Marketing e Performance - 
                    <a href="#">Home</a> | 
                    <a href="#">A PYXYS</a> | 
                    <a href="#">Soluções</a> | 
                    <a href="#">Cases</a> | 
                    <a href="#">Blog</a> | 
                    <a href="#">Fale conosco</a>
                </p>

                <p>Todos os direitos reservados</p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>