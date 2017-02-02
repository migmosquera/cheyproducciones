<!DOCTYPE html>
<?php
	include 'controller/searchUser.php';
	include_once 'controller/updateUser.php';
	include_once 'controller/uploadVideoYoutube.php';
	include_once 'controller/uploadSong.php';
	include_once 'controller/showAllSong.php';
	include_once 'controller/deleteSong.php';
	include_once 'controller/showAllVideo.php';
	include_once 'controller/videoUpload.php';
	include_once 'controller/deleteVideo.php';
	include_once 'controller/uploadCd.php';
	include_once 'controller/showAllCd.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CheyPoducion</title>
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/font-awesome.min.css" rel="stylesheet">
    <link href="static/css/main.css" rel="stylesheet">
  	<link href="static/css/admin.css" rel="stylesheet">
  	
    <link rel="shortcut icon" href="static/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="static/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="static/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="static/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="static/images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body id="home" class="homepage">

    <header id="header" style="display: none">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="controller/logout.php"><img src="static/images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="controller/logout.php">Home</a></li>
                        <li class="scroll active"><a href="admin.php">Administrador</a></li>                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="cta" class="wow fadeIn">
        <h1 style="color: #777474; font-size: 25px; text-align: center;" >Configuracion de Datos Personales de la Pagina</h1>
        <div class="container_admin">
            <div class="container_form">
                <form id="updateUserData" method="post" action="" style="width: 300px; display: inline-block" accept-charset="utf-8">
                    <h4 class="title_admin">Datos Personales</h4>
                    <div class="" style="width: 100%">
                        <div class="contact-form" style="text-align: center">
                            <input type="hidden" name="id" value="<?php echo $user->getId() ?>" id="id"/>
                            <input type="hidden" name="username" value="<?php echo $user->getUsername() ?>" id="username"/>
                            <input type="hidden" name="password" value="<?php echo $user->getPassword() ?>" id="password"/>
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control"  value="<?php echo $user->getName() ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control"  value="<?php echo $user->getEmail() ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $user->getPhone() ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="url_instagram" name="url_instagram" placeholder="Instagram" class="form-control" value="<?php echo $user->getUrlInstagram() ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="url_facebook" name="url_facebook" placeholder="Facebook" class="form-control" value="<?php echo $user->getUrlFacebook() ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="url_youtube" name="url_youtube" class="form-control" placeholder="Youtube" value="<?php echo $user->getUrlYoutube() ?>" required>
                            </div>
                            <p><?php echo $msjUpdate ?></p>
                            <button type="submit" class="btn btn-primary" id="updateUser" name="updateUser" style="margin-top: 15px">
                                Guardar
                            </button>
                        </div>
                    </div>	
                </form>
            </div>
            <div class="container_form" style="float:right">
                <form enctype="multipart/form-data" id="updateUserModalData" method="post" action="" style="width: 100%; display: inline-block" accept-charset="utf-8">
                    <h4 class="title_admin">Configuracion de la publicidad</h4>
                    <div class="" style="width: 100%">
                        <div class="contact-form" style="text-align: center">
                            <input type="hidden" name="id" value="<?php echo $user->getId() ?>" id="id"/>
                            <input type="hidden" name="username" value="<?php echo $user->getUsername() ?>" id="username"/>
                            <input type="hidden" name="password" value="<?php echo $user->getPassword() ?>" id="password"/>
                            <div style="width: 44%; margin: 0 auto; margin-bottom: 12px" >
                                 <p style="display: inline-block; width: 93%;margin-bottom: 5px;float: left;">Activar casilla para mostrar Publicidad</p>
                                <input type="checkbox" name="visible_modal" value="" <?php if ($user->getActivateModal() == 1) { ?>checked='true'<?php } ?> id="visible_modal" style="display: inline-block; width: 4%;"  />
                            </div>
                            <div class="form-group" style="width: 300px; margin: 0 auto; margin-bottom: 15px;">
                                <input type="text" placeholder="Titulo de la Publicidad" id="titleModal" name="titleModal" class="form-control"  value="<?php echo $user->getTitleModal() ?>" required>
                            </div>
                            <div class="form-group" style="width: 49%; margin: 0 auto; margin-bottom: 15px; display: inline-block;float: left;">
                                <textarea placeholder="texto de la Publiciada" id="textModal" name="textModal" class="form-control" value="<?php echo $user->getTextModal() ?>" required style="height: 147px;"></textarea>
                            </div>
                            <div class="form-group" style="width: 49%; margin: 0 auto; margin-bottom: 15px; display: inline-block;float: left;">
                                <p id="imgContainer" style="height: 150px; border: 1px solid #c4c4c4;  width: 215px; margin: 0 auto; border-radius: 5px"  ></p>
                                <input type="file" id="fileToUploadImg" name="fileToUploadImg" style="margin: 0 auto" >
                            </div>
                           
                            <p><?php echo $msjUpdateModal ?></p>
                            <button type="submit" class="btn btn-primary" id="updateUserModal" name="updateUserModal" style="margin-top: 15px">
                                Guardar
                            </button>
                        </div>
                    </div>	
                </form>
            </div>

        </div>
    </section>
    <section id="cta" class="wow fadeIn">
        <h1 style="color: #777474; font-size: 25px; text-align: center;" >Configuracion de Canciones de la Pagina</h1>
        <div class="container_admin">
            <div class="container_form" style="vertical-align: top;" >
                <form id="uploadSongUser" method="post" enctype="multipart/form-data" action="" style="width: 100%; display: inline-block" >
                    <h4 style="text-align: center; color: cornflowerblue;">Subir Cancion</h4>
                    <div class="" style="width: 100%">
                        <div class="contact-form" style="text-align: center">
                            <input type="hidden" id="id_user" name="id_user" value="<?php echo $user->getId() ?>" />
                            <input type="hidden" name="MAX_FILE_SIZE" value="8200000" />
                            <div>
                                <p style="width: 20%; display: inline-block;">Tipo de Musica:</p>
                                <select id="tipo_song" name="tipo_song">
                                    <option value="cancion">Cancion</option>
                                    <option value="jingle">Jingle</option>
                                </select>
                            </div>
                            <div>
                                <p style="width: 20%; display: inline-block;">Nombre del Cd:</p>
                                <select id="name_cd" name="name_cd">
                                    <?php foreach ($cd as $item): ?>
                                        <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <input type="text" class="form-control" id="artista" name="artista" style="width: 250px; margin: 0 auto; margin-bottom: 15px" placeholder="Nombre del Artista" />
                            <input type="file" name="fileToUpload" style="margin: 0 auto" >
                            <p><?php echo $msjSondUpload ?></p>	
                            <button type="submit" class="btn btn-primary" id="uploadSong" name="uploadSong" style="margin-top: 15px">
                                Subir
                            </button>
                        </div>
                    </div>	
                </form>
                <form id="searchSongUser" method="post" enctype="multipart/form-data" action="" style="width: 100%; display: inline-block; margin-top: 25px" >
                    <h4 style="text-align: center; color: cornflowerblue;">Buscar Cancion</h4>
                    <div class="" style="width: 100%">
                        <input class="form-control" type="text" name="nameSong" value="" id="nameSong" style="width: 250px; margin: 0 auto;" />
                        <button type="submit" class="btn btn-primary" id="searchSong" name="searchSong" style="margin-top: 15px">
                            Buscar
                        </button>
                    </div>	
                </form>
            </div>
            <div class="container_form">
                <h4 class="title_admin">Lista de Canciones Subidas</h4>
                <div id="container_song">
                    <?php foreach ($song as $item): ?>	
                        <div id="container_<?php echo $item['id'] ?>">
                            <p style="width: 40%; display: inline-block;text-align: right" ><?php echo $item['artista'] ?></p>
                            <p style="width: 40%; display: inline-block;" ><?php echo $item['name'] ?></p>	
                            <img id="play_<?php echo $item['id'] ?>" src="static/images/play-button.png" style="cursor: pointer; margin-right: 15px;" />
                            <img id="cancel_<?php echo $item['id'] ?>" src="static/images/cancel.png" style="cursor: pointer" />
                            <div id="container_multimedia_<?php echo $item['id'] ?>" name="<?php echo $item['id'] ?>" class="labelHide">
                                <audio id="<?php echo $item['id'] ?>" src="<?php echo $item['url_song'] ?>" controls></audio>
                            </div>
                        </div>		    
                    <?php endforeach; ?>  	
                </div>
                <div id="status"></div>
                <?php
                if ($pagina != 1)
                    echo '<a style="border-bottom: 0" href="?pag=' . ($pagina - 1) . '"> < </a>';
                for ($i = 0; $i < $pagination; $i++) {
                    $pagina_texto = $i + 1;
                    $clase = "";

                    if ($pagina == $pagina_texto)
                        $clase = 'active';
                    echo '<a class="pagination ' . $clase . ' " href="?pag=' . $pagina_texto . '">' . $pagina_texto . '</a>';
                }
                if ($pagina != $pagination)
                    echo '<a style="border-bottom: 0" href="?pag=' . ($pagina + 1) . '"> > </a>';
                ?>	

            </div>
        </div>
    </section>
    <section id="cta" class="wow fadeIn">
        <h1 style="color: #777474; font-size: 25px; text-align: center;" >Configuracion de Videos de la Pagina</h1>
        <div class="container_admin">
            <div class="container_form" style="vertical-align: top;" >
                <form id="uploadVideoUser" method="post" enctype="multipart/form-data" action="" style="width: 100%; display: inline-block" >
                    <h4 style="text-align: center; color: cornflowerblue;">Subir Video</h4>
                    <div class="" style="width: 100%">
                        <div class="contact-form" style="text-align: center">
                            <input type="hidden" id="id_user" name="id_user" value="<?php echo $user->getId() ?>" />
                            <input type="hidden" name="MAX_FILE_SIZE" value="82000000" />
                            <input type="text" class="form-control" id="nameVideo" name="nameVideo" style="width: 250px; margin: 0 auto; margin-bottom: 15px" placeholder="Nombre del Video" />
                            <p id="videoContainer" style="height: 150px; border: 1px solid #c4c4c4;  width: 215px; margin: 0 auto; border-radius: 5px"  ></p>
                            <input type="file" id="fileToUploadVideo" name="fileToUploadVideo" style="margin: 0 auto" >
                            <p><?php echo $msjVideoUploads ?></p>	
                            <button type="submit" class="btn btn-primary" id="uploadVideo" name="uploadVideo" style="margin-top: 15px">
                                Subir
                            </button>
                        </div>
                    </div>	
                </form>
                <form id="searchVideoUser" method="post" enctype="multipart/form-data" action="" style="width: 100%; display: inline-block; margin-top: 25px" >
                    <h4 style="text-align: center; color: cornflowerblue;">Buscar Video</h4>
                    <div class="" style="width: 100%">
                        <input class="form-control" type="text" name="nameVideo" value="" id="nameVideo" style="width: 250px; margin: 0 auto;" />
                        <button type="submit" class="btn btn-primary" id="searchVideo" name="searchVideo" style="margin-top: 15px">
                            Buscar
                        </button>
                    </div>	
                </form>
            </div>
            <div class="container_form">
                <h4 class="title_admin">Lista de Videos Subidas</h4>
                <div id="container_video" style="width: 100%; display: block">
                    <?php foreach ($video_upload as $item): ?>	
                        <?php if ($item['upload_video'] == 1) { ?>
                            <div id="container_<?php echo $item['id'] ?>" style="width: 200px; display: inline-block; height: 165px;  vertical-align: top;" >
                                <p><?php echo $item['name'] ?></p>
                                <div id="showDeleteContainer_<?php echo $item['id'] ?>" style="z-index: 2 ;width: 28px;border: 1px solid #FF0000;border-radius: 50px;background-color: rgb(241, 241, 241);color: #FF0000;position: absolute;margin-left: 171px; cursor: pointer" >x</div>
                                <video src="<?php echo $item['url_video'] ?>" controls style="width: 190px; display: inline-block; height: 125px; z-index: 1" class="" ></video>
                                <div id="containerMsjBorrar_<?php echo $item['id'] ?>" style="height:125px; width: 190px;border: 1px solid #74AD83; border-radius: 5px; margin-top: 11px;" class="labelHide" >
                                    <p style=" max-width: 200px; margin: 0">Deseas Elminiar el Video</p>
                                    <button style="background: none; border: none; width: 13%; display: inline-block;margin-top: 15px;" type="button"  name="<?php echo $item['id'] ?>" id="deletePhoto" ><span>Si</span></button>
                                    <p style="width: 28%; display: inline-block;cursor: pointer;" name="notDeletePhoto" id="notDeletePhoto" >No</button>
                                        <input class="inputHidden" type="hidden" lang="<?php echo $item['id'] ?>" name="idPhoto_<?php echo $item['id'] ?>"  id="idPhoto_<?php echo $item['id'] ?>" value=""  />
                                </div>
                            </div>		
                        <?php } ?>    
                    <?php endforeach; ?>  	
                </div>
                <div id="statusVideo"></div>
                <?php
                if ($numero_pagina != 1)
                    echo '<a style="border-bottom: 0" href="?pag=' . ($numero_pagina - 1) . '"> < </a>';
                for ($i = 0; $i < $pagination_video; $i++) {
                    $pagina_video = $i + 1;
                    $clase_video = "";

                    if ($numero_pagina == $pagina_video)
                        $clase_video = 'active';
                    echo '<a class="pagination ' . $clase_video . ' " href="?pag_video=' . $pagina_video . '">' . $pagina_video . '</a>';
                }
                if ($numero_pagina != $pagination)
                    echo '<a style="border-bottom: 0" href="?pag_video=' . ($numero_pagina + 1) . '"> > </a>';
                ?>	

            </div>
            <div style="width: 100%;text-align: center">
                <form id="uploadVideoUser" method="post" action="" style="width: 500px; display: inline-block" accept-charset="utf-8">
                    <h4 class="title_admin">Subir Video de Youtube</h4>
                    <input type="hidden" name="id" value="<?php echo $user->getId() ?>" id="id"/>
                    <input type="hidden" name="id_video" value="<?php echo $video->getId() ?>" id="id_video"/>
                    <div class="" style="width: 100%">
                        <div class="contact-form" style="text-align: center">
                            <div style="width: 100%;" >
                                <p class="sub_title">Activar casilla para mostrar video</p>
                                <input type="checkbox" name="visible_video" value="" <?php if ($user->getVisibleVideo() == 1) { ?>checked='true'<?php } ?> id="visible_video" style="display: inline-block; width: 4%;"  />
                            </div>
                            <div id="visibleContainer" class="labelHide">
                                <p style="display: inline-block; width: 6%; display: inline-block; margin-bottom: 6px;">Url</p>
                                <input type="text" name="url" id="url" class="form-control" style="width: 75%; display: inline-block" placeholder="http://" value="<?php echo $video->getUrlVideo() ?>" />		      			
                                <button type="button" id="validateUrl"name="validateUrl" style="background-color: #BBE076; border-color: #BBE076;">Validar</button>
                                <div id="video_url" style="margin-top: 7px;"></div>
                            </div>
                            <p><?php echo $msjUploadVideo ?></p>
                            <button type="submit" class="btn btn-primary" id="uploadVideoYoutube" name="uploadVideoYoutube" style="margin-top: 15px">
                                Subir
                            </button>
                        </div>
                    </div>	
                </form>
            </div>
        </div>
    </section>
    <section id="cta" class="wow fadeIn">
        <h1 style="color: #777474; font-size: 25px; text-align: center;" >Creacion de cd</h1>
        <div class="container_admin">
            <div class="container_form" style="vertical-align: top;" >
                <form id="uploadCDUser" method="post" enctype="multipart/form-data" action="" style="width: 100%; display: inline-block" >
                    <h4 style="text-align: center; color: cornflowerblue;">Crear Cd</h4>
                    <div class="" style="width: 100%">
                        <div class="contact-form" style="text-align: center">
                            <input type="hidden" id="id_user" name="id_user" value="<?php echo $user->getId() ?>" />
                            <input type="hidden" name="MAX_FILE_SIZE" value="820000" />
                            <input type="text" class="form-control" id="autor" name="autor" style="width: 250px; margin: 0 auto; margin-bottom: 15px" placeholder="Nombre del Autor" />
                            <input type="text" class="form-control" id="nameCd" name="nameCD" style="width: 250px; margin: 0 auto; margin-bottom: 15px" placeholder="Nombre del Cd" />
                            <p id="cdContainer" style="height: 150px; border: 1px solid #c4c4c4;  width: 215px; margin: 0 auto; border-radius: 5px"  ></p>
                            <input type="file" id="fileToUploadCd" name="fileToUploadCd" style="margin: 0 auto" >
                            <p><?php echo $msjCdUploads ?></p>	
                            <button type="submit" class="btn btn-primary" id="uploadCd" name="uploadCd" style="margin-top: 15px">
                                Subir
                            </button>
                        </div>
                    </div>	
                </form>

            </div>
            <div class="container_form">
                <h4 class="title_admin">Lista de Cd</h4>
                <div id="container_cd" style="width: 100%; display: block">
                    <?php foreach ($cd as $item): ?>	
                        <?php if ($item['create'] == 1) { ?>
                            <div id="container_<?php echo $item['id'] ?>" style="width: 200px; display: inline-block; height: 165px;  vertical-align: top;" >
                                <p><?php echo $item['name'] ?></p>
                                <img src="<?php echo $item['caratula'] ?>" controls style="width: 190px; display: inline-block; height: 125px; z-index: 1" class="" ></video>

                            </div>		
                        <?php } ?>    
                    <?php endforeach; ?>  	
                </div>
                <div id="statusVideo"></div>

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
                        <li><a target="_blank" href="<?php echo $user->getUrlFacebook() ?>" ><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="<?php echo $user->getUrlInstagram() ?>"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="<?php echo $user->getUrlYoutube() ?>"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="static/js/jquery.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
  	<script src="static/js/admin.js"></script>
</body>
</html>