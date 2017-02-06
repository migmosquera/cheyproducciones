<!DOCTYPE html>
<?php
include 'controller/searchAllUser.php';
include_once 'controller/showAllSong.php';
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <title>CheyPoducciones</title>
        <!--<link href="static/css/bootstrap.min.css" rel="stylesheet">
        <link href="static/css/font-awesome.min.css" rel="stylesheet">
        <link href="static/css/animate.min.css" rel="stylesheet">
        <link href="static/css/owl.transitions.css" rel="stylesheet">
        <link href="static/css/prettyPhoto.css" rel="stylesheet">-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!--<link href="static/css/responsive.css" rel="stylesheet">-->
        <link href="static/css/main.css" rel="stylesheet">

    </head>
    <body>
        <header id="header" class="alt">
            <!--<img src="../cheyproducciones/static/images/header/logochey.png" style="width: 5%; margin-left: 30px">-->
            <h2 id="language" class="language">es | en</h2>
            <h1><a href="index.php"><img src="../cheyproducciones/static/images/header/LOGOCHEY174POR39.png" style=" padding: 10px"></a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle" style="text-decoration: none"><span>Menu</span></a>
                        <div id="menu" class="menu">
                            <ul>
                                <li><a href="">conoceme</a></li>
                                <li><a href="">portafolio</a></li>
                                <li><a href="">contactame</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>      
            <!--<div class="buttonMusic">
                    <div id="pauseAudio" >Pause</div>
                    <div id="playAudio" >Play</div>
                    <video id="videoTap" src="<?php echo $song[0]["url_song"]; ?>" autoplay controls style="display:none" ></video>
                </div>
            </div>-->
        </header>

        <section id="banner" class="imgHome">
            <div>
                <h2 class="titleStyle">Chei producciones</h2> 
            </div>
            
        </section>
        
        <section style="background-color:#ffffff; display: block; text-align: center">
            <h3 style="background-color: #d6d6d6;color: #000000; text-align: center">Servicios y Productos</h3>
            <div style="display: inline-block; width: 32%;">
                <p style="color: #000000" >Creacion de Jingles</p>

            </div>
            <div style="display: inline-block; width: 32%;">
                <p style="color: #000000" >Creacion de Musica</p>

            </div>
            <div style="display: inline-block; width: 32%;">
                <p style="color: #000000" >Pista Musicales</p>

            </div>
        </section>
        <section id="banner" style="width: 100%; height: 800px; background-color: #fbfbfb">

        </section>

<!--<section id="features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Awesome Features</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <img class="img-responsive" src="static/images/main-feature.png" alt="">
            </div>
            <div class="col-sm-6">
                <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">UX design</h4>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    </div>
                </div>

                <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">UI design</h4>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    </div>
                </div>

                <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">SEO Services</h4>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    </div>
                </div>

                <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">SEO Services</h4>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" >
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UX design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">iOS App</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-language"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Android App</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                    <div class="media service-box">
                        <div class="pull-left">
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Win App</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div><
            </div>
        </div>    
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Our Works</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="text-center">
            <ul class="portfolio-filter">
                <li><a class="active" href="#" data-filter="*">All Works</a></li>
                <li><a href="#" data-filter=".creative">Creative</a></li>
                <li><a href="#" data-filter=".corporate">Corporate</a></li>
                <li><a href="#" data-filter=".portfolio">Portfolio</a></li>
            </ul>
        </div>

        <div class="portfolio-items">
            <div class="portfolio-item creative">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/01.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 1</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item corporate portfolio">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/02.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 2</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item creative">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/03.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 3</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item corporate">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/04.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 4</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item creative portfolio">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/05.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 5</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item corporate">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/06.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 5</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item creative portfolio">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/07.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 7</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item corporate">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="static/images/portfolio/08.jpg" alt="">
                    <div class="portfolio-info">
                        <h3>Portfolio Item 8</h3>
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="static/images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">About Us</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <h3 class="column-title">Video Intro</h3>
                
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-sm-6 wow fadeInRight">
                <h3 class="column-title">Multi Capability</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="nostyle">
                            <li><i class="fa fa-check-square"></i> Ipsum is simply dummy</li>
                            <li><i class="fa fa-check-square"></i> When an unknown</li>
                        </ul>
                    </div>

                    <div class="col-sm-6">
                        <ul class="nostyle">
                            <li><i class="fa fa-check-square"></i> The printing and typesetting</li>
                            <li><i class="fa fa-check-square"></i> Lorem Ipsum has been</li>
                        </ul>
                    </div>
                </div>

                <a class="btn btn-primary" href="#">Learn More</a>

            </div>
        </div>
    </div>
</section>

<section id="work-process">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Our Process</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row text-center">
            <div class="col-md-2 col-md-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <div class="icon-circle">
                        <span>1</span>
                        <i class="fa fa-coffee fa-2x"></i>
                    </div>
                    <h3>MEET</h3>
                </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="icon-circle">
                        <span>2</span>
                        <i class="fa fa-bullhorn fa-2x"></i>
                    </div>
                    <h3>PLAN</h3>
                </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                    <div class="icon-circle">
                        <span>3</span>
                        <i class="fa fa-image fa-2x"></i>
                    </div>
                    <h3>DESIGN</h3>
                </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                    <div class="icon-circle">
                        <span>4</span>
                        <i class="fa fa-heart fa-2x"></i>
                    </div>
                    <h3>DEVELOP</h3>
                </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                    <div class="icon-circle">
                        <span>5</span>
                        <i class="fa fa-shopping-cart fa-2x"></i>
                    </div>
                    <h3>TESTING</h3>
                </div>
            </div>
            <div class="col-md-2 col-md-4 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                    <div class="icon-circle">
                        <span>6</span>
                        <i class="fa fa-space-shuttle fa-2x"></i>
                    </div>
                    <h3>LAUNCH</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="meet-team">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <div class="team-img">
                        <img class="img-responsive" src="static/images/team/01.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Bin Burhan</h3>
                        <span>Co-Founder</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="team-img">
                        <img class="img-responsive" src="static/images/team/02.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Jane Man</h3>
                        <span>Project Manager</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                    <div class="team-img">
                        <img class="img-responsive" src="static/images/team/03.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Pahlwan</h3>
                        <span>Designer</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                    <div class="team-img">
                        <img class="img-responsive" src="static/images/team/04.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Nasir uddin</h3>
                        <span>UI/UX</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <div class="row">
            <div class="col-sm-4">
                <h3 class="column-title">Our Skills</h3>
                <strong>GRAPHIC DESIGN</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                </div>
                <strong>WEB DESIGN</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                </div>
                <strong>WORDPRESS DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                </div>
                <strong>JOOMLA DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="65">65%</div>
                </div>
            </div>

            <div class="col-sm-4">
                <h3 class="column-title">Our History</h3>
                <div role="tabpanel">
                    <ul class="nav main-tab nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">2010</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">2011</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">2013</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">2014</a>
                        </li>
                    </ul>
                    <div id="tab-content" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <h3 class="column-title">Faqs</h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Enim eiusmod high life accusamus
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Nihil anim keffiyeh helvetica
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Vegan excepteur butcher vice lomo
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="animated-number">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Fun Facts</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row text-center">
            <div class="col-sm-3 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <div class="animated-number" data-digit="2305" data-duration="1000"></div>
                    <strong>CUPS OF COFFEE CONSUMED</strong>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="animated-number" data-digit="1231" data-duration="1000"></div>
                    <strong>CLIENT WORKED WITH</strong>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                    <div class="animated-number" data-digit="3025" data-duration="1000"></div>
                    <strong>PROJECT COMPLETED</strong>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                    <div class="animated-number" data-digit="1199" data-duration="1000"></div>
                    <strong>QUESTIONS ANSWERED</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Pricing Table</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                    <ul class="pricing">
                        <li class="plan-header">
                            <div class="price-duration">
                                <span class="price">
                                    $39
                                </span>
                                <span class="duration">
                                    per month
                                </span>
                            </div>

                            <div class="plan-name">
                                Starter
                            </div>
                        </li>
                        <li><strong>1</strong> DOMAIN</li>
                        <li><strong>100GB</strong> DISK SPACE</li>
                        <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                        <li>SHARED SSL CERTIFICATE</li>
                        <li><strong>10</strong> EMAIL ADDRESS</li>
                        <li><strong>24/7</strong> SUPPORT</li>
                        <li class="plan-purchase"><a class="btn btn-primary" href="#">ORDER NOW</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                    <ul class="pricing featured">
                        <li class="plan-header">
                            <div class="price-duration">
                                <span class="price">
                                    $69
                                </span>
                                <span class="duration">
                                    per month
                                </span>
                            </div>

                            <div class="plan-name">
                                Business
                            </div>
                        </li>
                        <li><strong>3</strong> DOMAIN</li>
                        <li><strong>300GB</strong> DISK SPACE</li>
                        <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                        <li>SHARED SSL CERTIFICATE</li>
                        <li><strong>30</strong> EMAIL ADDRESS</li>
                        <li><strong>24/7</strong> SUPPORT</li>
                        <li class="plan-purchase"><a class="btn btn-default" href="#">ORDER NOW</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                    <ul class="pricing">
                        <li class="plan-header">
                            <div class="price-duration">
                                <span class="price">
                                    $99
                                </span>
                                <span class="duration">
                                    per month
                                </span>
                            </div>

                            <div class="plan-name">
                                Pro
                            </div>
                        </li>
                        <li><strong>5</strong> DOMAIN</li>
                        <li><strong>500GB</strong> DISK SPACE</li>
                        <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                        <li>SHARED SSL CERTIFICATE</li>
                        <li><strong>50</strong> EMAIL ADDRESS</li>
                        <li><strong>24/7</strong> SUPPORT</li>
                        <li class="plan-purchase"><a class="btn btn-primary" href="#">ORDER NOW</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                    <ul class="pricing">
                        <li class="plan-header">
                            <div class="price-duration">
                                <span class="price">
                                    $199
                                </span>
                                <span class="duration">
                                    per month
                                </span>
                            </div>

                            <div class="plan-name">
                                Ultra
                            </div>
                        </li>
                        <li><strong>10</strong> DOMAIN</li>
                        <li><strong>1000GB</strong> DISK SPACE</li>
                        <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                        <li>SHARED SSL CERTIFICATE</li>
                        <li><strong>100</strong> EMAIL ADDRESS</li>
                        <li><strong>24/7</strong> SUPPORT</li>
                        <li class="plan-purchase"><a class="btn btn-primary" href="#">ORDER NOW</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                    
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <p><img class="img-circle img-thumbnail" src="static/images/testimonial/01.jpg" alt=""></p>
                            <h4>Louise S. Morgan</h4>
                            <small>Treatment, storage, and disposal (TSD) worker</small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="item">
                            <p><img class="img-circle img-thumbnail" src="static/images/testimonial/01.jpg" alt=""></p>
                            <h4>Louise S. Morgan</h4>
                            <small>Treatment, storage, and disposal (TSD) worker</small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>

                    <div class="btns">
                        <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Latest Blogs</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                    <article>
                        <header class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-responsive" src="static/images/blog/01.jpg" alt="">
                                <span class="post-format post-format-video"><i class="fa fa-film"></i></span>
                            </div>
                            <div class="entry-date">25 November 2014</div>
                            <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                        </header>

                        <div class="entry-content">
                            <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                            <a class="btn btn-primary" href="#">Read More</a>
                        </div>

                        <footer class="entry-meta">
                            <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                            <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                            <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                        </footer>
                    </article>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                    <article class="media clearfix">
                        <div class="entry-thumbnail pull-left">
                            <img class="img-responsive" src="static/images/blog/02.jpg" alt="">
                            <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span>
                        </div>
                        <div class="media-body">
                            <header class="entry-header">
                                <div class="entry-date">01 December 2014</div>
                                <h2 class="entry-title"><a href="#">BeReviews was a awesome envent in dhaka</a></h2>
                            </header>

                            <div class="entry-content">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                <a class="btn btn-primary" href="#">Read More</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Campbell</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </div>
                    </article>
                </div>
                <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                    <article class="media clearfix">
                        <div class="entry-thumbnail pull-left">
                            <img class="img-responsive" src="static/images/blog/03.jpg" alt="">
                            <span class="post-format post-format-audio"><i class="fa fa-music"></i></span>
                        </div>
                        <div class="media-body">
                            <header class="entry-header">
                                <div class="entry-date">03 November 2014</div>
                                <h2 class="entry-title"><a href="#">Play list of old bangle  music and gajal</a></h2>
                            </header>

                            <div class="entry-content">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                <a class="btn btn-primary" href="#">Read More</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Ruth</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="get-in-touch">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
    </div>
</section>

<section id="contact">
    <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
    <div class="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <div class="contact-form">
                        <h3>Contact Info</h3>

                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; Designed by <a target="_blank" href="http://webprogress.com.ve" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Web Progress</a>
            </div>
            <div class="col-sm-6">
                <ul class="social-icons">
                    <li><a target="_blank" href="<?php echo $user->getUrlFacebook() ?>"  ><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="<?php echo $user->getUrlInstagram() ?>"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="<?php echo $user->getUrlYoutube() ?>"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>-->

        <!--<div id="showModal" style="    position: fixed;top: 0;right: 0;bottom: 0;left: 0;width: 100%;height: 100%;overflow: auto;z-index: 1;padding: 20px;box-sizing: border-box;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.75);text-align: center;">
            <div rel="modal:open"  style="display: block; top: 22%;bottom: 20%;overflow: hidden;left: 32%;width: 500px !important;height: 450px;background-color: #ffffff;position: fixed;border-radius: 8px;">
                <p style="color: #000000;margin-top: 15px;"><?php echo $user->getTitleModal() ?></p>
                <img src="<?php echo $user->getImgModal() ?>" />
                <p style="color: #000000"><?php echo $user->getTextModal() ?></p>
            </div>
        </div>    
    
        <script>
            var showModal = "<?php echo $user->getActivateModal() ?>"
        </script>
        <!--<script src="static/js/jquery.js"></script>
        <script src="static/js/bootstrap.min.js"></script>-->
        <script src="static/js/jquery.min.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="static/js/jquery.modal.min.js"></script>
        <!--<script src="static/js/mousescroll.js"></script>
        <script src="static/js/smoothscroll.js"></script>
        <script src="static/js/jquery.prettyPhoto.js"></script>
        <script src="static/js/jquery.isotope.min.js"></script>
        <script src="static/js/jquery.inview.min.js"></script>
        <script src="static/js/wow.min.js"></script>-->
        <script src="static/js/jquery.scrollex.min.js"></script>
        <script src="static/js/jquery.scrolly.min.js"></script>
        <script src="static/js/skel.min.js"></script>
        <script src="static/js/util.js"></script>
        <script src="static/js/main.js"></script>
        <script src="static/js/index.js"></script>
    </body>
</html>