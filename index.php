<?php 
    // var_dump(get_field('full_banner'));
    // die();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
    
</head>
<body>

    <section class="fullBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Transformamos audências em negócios</h1>
                    <p>Ajudamos grupos de mídia a potencializarem seus ativos (marca, credibilidade e conteúdo) no meio digital.</p>
                    <div style="display:flex;">
                        <a href="#" class="fullBanner-cta btn btn-primary">Ver nossas soluções</a>
                        <a href="#" class="fullBanner-play" onclick="alert('abrir video');">
                            <svg width="9" height="12" style="margin-left:2px;" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 6L-4.89399e-07 11.1962L-3.51373e-08 0.803847L9 6Z" fill="#3583F0"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fullBanner-bg" style="background-image: url('<?php echo get_field('full_banner'); ?>');"></div>
    </section>

    <section class="featuredCompanies">
        <div style="filter: drop-shadow(50px 50px 50px rgba(0,0,0,15%));background-color: white;">
            <?php 
            $logos = get_field('featured_companies');
            if( $logos ): ?>
                <?php foreach( $logos as $logo ): ?>
                    <img src="<?php echo $logo; ?>" alt="">
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    
    <section class="ourSolutions">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <hgroup style="display: flex; flex-direction: column-reverse;">
                        <h2>Nossas soluções</h2>
                        <h3 class="subtitle">Construímos com você</h3>
                    </hgroup>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet, ante a tempor vehicula, est arcu blandit quam, eget elementum magna felis sed </p>
                    <ul>
                        <li><svg width="35" height="26" viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="35" height="26" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="translate(0 -0.000894454) scale(0.00581395 0.00782648)"/>
                            </pattern>
                            <image id="image0" width="172" height="128" xlink:href="data:image/png;base64,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"/>
                            </defs>
                            </svg>Grupos de mídia
                        </li>
                        <li><svg width="35" height="26" viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="35" height="26" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="translate(0 -0.000894454) scale(0.00581395 0.00782648)"/>
                            </pattern>
                            <image id="image0" width="172" height="128" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKwAAACACAYAAACWX4KVAAAHQklEQVR4nO2d3XHyPBOGKSElUEJKoISUwHrGmh2OXAIdpARKoARKoARKoIT3O4j8fMpG8g/4R7ava8YnCQGZ3F6tVrur3Q4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGAGqqr6cM59OefOInITkUdZlv+lLhF5isitLMtLURTV6XT6nPseYOVUVfWhqkfn3LVJnF0vEXk6566qeqyq6mPu+4OV4K3pWUSeQwi14bqo6mHu+4UF0yZU7wpcnHNn59yXqh5il//9t3cfGoUvIjeEC704nU6fKb9URO5FUVSqun/n/YuiqETk3iLclz8DNkJRFFVqyh5jsaSqe2/J/zwgIvIsiqIa+jNhJZRleZlzilbVY0K4NxZm8IuYWOeybjHfWUQehMNgt9v9FauIPPuIQ1UPQ1tAVd1bH7fvuGCFqOqxryi83/kdCso5dx1jfO8+TLAiTqfTZx8xqOo+5jrUi7Kxxhl5qO74tBvETrlNiyu/ILJ+5b2OwY4tIBu9GMuiQ6ZYq+WcO6dea62qc+46x7QcGcfX1GOAmQjDRyLySL0uFInf//8lkmAna3TxVFX1Ec4KIvLANdgA1rqmXAHn3Dnm36byC6awuqp6yCH0BhNirOst9ppQGKFYVfUQywcQkcdUW6nG6idnB1gBNjKgqsfY60JR1xbYOfcVEelx6j3/yD0cpvx8mBA7zbe9JlyMpX4+ByYG/D3nWGBETCgrGjutrauIPMNFTVVVH0VRVDmszs2Dd7e/V9W999UvPq3xJiI359z13WwzmJC2sFA47c9tRZuwi6/g502bG+TeLgn7T46FhMJ/ds4ho6qqPmyEIrS6fS7n3DXne90sYTgr5b/WLkNsms0Nu+sWsaBP59zVx4nPddFkwtqy3Zsbxu+LhrOWtJBpsZrnlADrODKizZyegj1PPLzeJCxl57zZWCkQOQoZ0SUstWTBvrJV67d7f4mWhVgmrEmwfVMje75XdPaBiTGCjfqotbXJfWq0+RDv5hRYn5Y4bQZ08WGdc9/+H3aceHi9MBGPt/MJfPyWpJqc6CLYJVGHqYbKEgtDXrnPMJsgtTsEP6ztgV48kSyn/dxjyomwDCe1sQITE+ay5u6nTo0RLHm2OWDaZY5W6bpEcAkyhGkvjckz4GHOARu+wS34ge8lY0zlKVPf7o+rlHVq5eboWjW7FWLtmuoKhfKnMzht7ecmjBZs2crawsqW60IocCYie+eHucc0B6mE7tRFk+URCY4nqs8X+FWM925q3howoaxH+f8zGxorFIgiDEhdiNf35JclVBmMgaoemvIRUhUKiHYA/GEXLx9RlEMJd64kKhQ2+ZAPQhk/o+DhnPv2HVoOqnrwmwdRCywiTxYWaWxDOh7yF7FirdsItf1d7CCMrS7AuuItbRhl2aT//zI2jliW5aXvF1gnblM52o1Ig+Xz3GNaBH6KegZfHInHE9G1xy4E2OZuWMfpiHQxx5dtw1jX89zj2RK2XRIRgxa69MqaAx+3vG7hMLhwY2HLW9ydyDXhuDQdsnN5kMagXqzW19zjyZpQGLlMR6meVXOPayzs/c49nqwxZcnnucdjuyN2aZ68dBBsD3ISrK3IPZ1On3ZXaI1ZTgi2B0aws7kE/iDjaDWu3RXqE/pR1WOYOZW65nwQ8GF7kMOiy1rRmKVPHaHUhN1Jarvm2k6m3KgHNnA9x2rc5DAk/VTj37Zu//Zt/z6HYG3hYi4L32yZu9LTnuTSJkIT7mq0RuF7p14TWu45BGse1klOglw8XU41HAM7zXdNSex6vlbugqWn7ItEsoZG38+2iywRefiym8bPLn9ycDvlkuYs2FhOLCmZHbHZWlMkYKf8y6ZOMnYbuc0y5SrYRAI3GXJ9sFZ27JxWH6oKixoffcQlIvf6b1N+d46C9fd9n/K7Xi2RKtj7VIuAMcSVk2Abjkl6+VyFzRObqvx0lTyvaijWKlhV3fsS+Vjt253atzfx+ZmXmCUof+rtR1mQrUmwqnrw/Qj+PPxhdAM3YEB8YWGy1LvuGVVva9bVtLHLN+I4N1mTnAXrT/X+c1/+VPJ/zTKaBBp+b7gAI1H7XbYi9tWrKQKQq2BtBOXV+y7L8oJQJyRoV/SWeBveP0vBpkJpHUT6GNOFgh5UVfVhpsSrCVHFFhi3qXelhnrPhtO7H0GfsX+uEb7pBshZsAB/QLCwKBAsLAoEC4tioBX9PhXF6PKe4UUiNTQydggq9Z42JzWMAAx0a7BGBgxBhfVRdx92a4yF+tKbSyhYztiCRoYSbKQTY2vgvksRJMAvhlwghdN8l/S9smMRJMA/hq5wNRW2yd5c5txcEqmhG317CHRJJCl/V9j+6c31ahEkwG63+5dg09qlpU/WU+p0bdtNhhgsZEGsN9cW+nXBgomUlK++IyIsnNgGAYssyBrbexaxQvbUhzxTrgIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACZ8T91uQrltvpv6wAAAABJRU5ErkJggg=="/>
                            </defs>
                            </svg>Empresas
                        </li>
                        <li><svg width="35" height="26" viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="35" height="26" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="translate(0 -0.000894454) scale(0.00581395 0.00782648)"/>
                            </pattern>
                            <image id="image0" width="172" height="128" xlink:href="data:image/png;base64,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"/>
                            </defs>
                            </svg>Startups
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-7">
                    <div class="cardsGrid">

                        <div class="card">
                            <a href="">Ver mais <svg width="37" height="8" viewBox="0 0 37 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.3536 4.35356C36.5488 4.15829 36.5488 3.84171 36.3536 3.64645L33.1716 0.464469C32.9763 0.269207 32.6597 0.269207 32.4645 0.464469C32.2692 0.659731 32.2692 0.976314 32.4645 1.17158L35.2929 4L32.4645 6.82843C32.2692 7.02369 32.2692 7.34027 32.4645 7.53554C32.6597 7.7308 32.9763 7.7308 33.1716 7.53554L36.3536 4.35356ZM-4.37114e-08 4.5L36 4.5L36 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3583F0"/></svg></a>
                            <img src="<?php echo get_template_directory_uri() . '/assets/icons/cloud-ico.png' ?>" width="77" height="77" alt="">
                            <h4>Negócios e Estratégia Digital</h4>
                            <p>Em conjunto com você, idealizamos e aterrisamos o planejamento, gerimos e monitoramos resultados</p>
                        </div>
                        <div class="card">
                            <a href="">Ver mais <svg width="37" height="8" viewBox="0 0 37 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.3536 4.35356C36.5488 4.15829 36.5488 3.84171 36.3536 3.64645L33.1716 0.464469C32.9763 0.269207 32.6597 0.269207 32.4645 0.464469C32.2692 0.659731 32.2692 0.976314 32.4645 1.17158L35.2929 4L32.4645 6.82843C32.2692 7.02369 32.2692 7.34027 32.4645 7.53554C32.6597 7.7308 32.9763 7.7308 33.1716 7.53554L36.3536 4.35356ZM-4.37114e-08 4.5L36 4.5L36 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3583F0"/></svg></a>
                            <img src="<?php echo get_template_directory_uri() . '/assets/icons/cloud-ico.png' ?>" width="77" height="77" alt="">
                            <h4>Dados e tecnologia</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget est tristique, sagittis elit at, suscipit leo.</p>
                        </div>
                        <div class="card">
                            <a href="">Ver mais <svg width="37" height="8" viewBox="0 0 37 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.3536 4.35356C36.5488 4.15829 36.5488 3.84171 36.3536 3.64645L33.1716 0.464469C32.9763 0.269207 32.6597 0.269207 32.4645 0.464469C32.2692 0.659731 32.2692 0.976314 32.4645 1.17158L35.2929 4L32.4645 6.82843C32.2692 7.02369 32.2692 7.34027 32.4645 7.53554C32.6597 7.7308 32.9763 7.7308 33.1716 7.53554L36.3536 4.35356ZM-4.37114e-08 4.5L36 4.5L36 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3583F0"/></svg></a>
                            <img src="<?php echo get_template_directory_uri() . '/assets/icons/cloud-ico.png' ?>" width="77" height="77" alt="">
                            <h4>Conteúdo e social</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget est tristique, sagittis elit at, suscipit leo.</p>
                        </div>
                        <div class="card">
                            <a href="">Ver mais <svg width="37" height="8" viewBox="0 0 37 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.3536 4.35356C36.5488 4.15829 36.5488 3.84171 36.3536 3.64645L33.1716 0.464469C32.9763 0.269207 32.6597 0.269207 32.4645 0.464469C32.2692 0.659731 32.2692 0.976314 32.4645 1.17158L35.2929 4L32.4645 6.82843C32.2692 7.02369 32.2692 7.34027 32.4645 7.53554C32.6597 7.7308 32.9763 7.7308 33.1716 7.53554L36.3536 4.35356ZM-4.37114e-08 4.5L36 4.5L36 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="#3583F0"/></svg></a>
                            <img src="<?php echo get_template_directory_uri() . '/assets/icons/cloud-ico.png' ?>" width="77" height="77" alt="">
                            <h4>Business Inteligence e Performance</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget est tristique, sagittis elit at, suscipit leo.</p>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="featuredProjects">
        <div class="project">
            <div class="thumbnail" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/project1.jpg' ?>');"></div>
            <div class="details">
                <h2>Portal Estadão Mobilidade</h2>
                <p>Portal Mobilidade Estadão já nasceu com uma audiência de <strong class="highlight">20 milhões</strong> de pessoas</p>
                <a href="#"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.3536 4.35355C21.5488 4.15829 21.5488 3.84171 21.3536 3.64644L18.1716 0.464465C17.9763 0.269202 17.6597 0.269202 17.4645 0.464465C17.2692 0.659727 17.2692 0.976309 17.4645 1.17157L20.2929 4L17.4645 6.82843C17.2692 7.02369 17.2692 7.34027 17.4645 7.53553C17.6597 7.73079 17.9763 7.73079 18.1716 7.53553L21.3536 4.35355ZM4.37114e-08 4.5L21 4.5L21 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#3583F0"/>
                </svg> Ver projeto completo
                </a>
            </div>
        </div>
        <div class="project inverted-order">
            <div class="thumbnail" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/project2.jpg' ?>');"></div>
            <div class="details" style="display:flex;flex-direction:column;">
                <h2>Portal Estadão Imóveis</h2>
                <p>Como o Estadão Imóveis <strong class="highlight">cresceu 810%</strong> o número de usuários mensais em plena pandemia</p>
                <a href="#" style="align-self: end;"><svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.3536 4.35355C21.5488 4.15829 21.5488 3.84171 21.3536 3.64644L18.1716 0.464465C17.9763 0.269202 17.6597 0.269202 17.4645 0.464465C17.2692 0.659727 17.2692 0.976309 17.4645 1.17157L20.2929 4L17.4645 6.82843C17.2692 7.02369 17.2692 7.34027 17.4645 7.53553C17.6597 7.73079 17.9763 7.73079 18.1716 7.53553L21.3536 4.35355ZM4.37114e-08 4.5L21 4.5L21 3.5L-4.37114e-08 3.5L4.37114e-08 4.5Z" fill="#3583F0"/>
                </svg> Ver projeto completo
                </a>
            </div>
        </div>
    </section>
    
    <section class="blogPosts" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/blogPostsBg.jpg' ?>');">
        <div class="container">
            <hgroup style="display: flex; flex-direction: column-reverse;">
                <h2>Últimas do nosso blog</h2>
                <h3 style="text-transform:uppercase;font-size:13px;">Conteúdos e insights</h3>
            </hgroup>
            <div class="postsGrid">
                
                <div class="post" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/post1.jpg' ?>');">
                    <div class="details">
                        <a href="" class="category">Categoria</a>
                        <h4>Título completo de chamada para os posts</h4>
                        <p><a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis aute irure dolor
                            in reprehenderit </a>
                        </p>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/pyxys-logo.png' ?>" class="logo" width="119" height="24" alt="">
                    <p>Somos um núcleo de soluções digitais inovadoras que identifica oportunidades de mercado, desenvolve plano de negócios, aterrissa a estratégia, gerencia e monitora os resultados junto com a sua empresa</p>
                </div>
            
            </div>
        </div>
    </footer>

    <div class="signiture">
        <div class="container">
            <div class="row">
                <p>© 2020, PYXYS - Content Marketing e Performance</p>
            </div>
        </div>
    </div>
    
</body>
</html>