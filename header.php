<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-menu-info bg-inverse">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col">
                    <i class="fa fa-fw fa-lg fa-clock-o" aria-hidden="true"></i>
                    Пн - Пт: 10:00 - 19:00
                </div>
                <div class="col">
                    <i class="fa fa-volume-control-phone fa-fw fa-lg" aria-hidden="true"></i>
                    <span>+8(800)250-66-49</span>
                </div>
                <div class="col">
                    <i class="fa fa-envelope-o fa-fw fa-lg" aria-hidden="true"></i>
                    <span>sales@ooogksm.com</span>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-toggleable-md navbar-light">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?=get_template_directory_uri().'/assets/images/logo.png'?>"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Наши услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>