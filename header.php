<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--    cutom css-->
    <?php wp_head(); ?>

    <!--end    cutom css-->
    <title><?php the_title(); ?></title>


</head>

<body>

<header>
    <nav class="navbar navbar-default">

        <?php $header=get_field('header')  ?>
        <div class="container-fluid">
            <div class="navbar-header">
                <strong>
                    <?php echo $header['phone_number']?>
                </strong>
                <strong>
                    :تلفن
                </strong>
                <strong style="padding-left: 10px">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/image/telephone.png" width="20px" alt="">
                </strong>
            </div>
            <div class="nav-menu-top">
                <a href="<?php echo $header['login']['url']; ?>">
                    ورود عضویت
                </a>

                <strong style="padding-left: 10px">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/image/man.png" width="20px" alt="">
                </strong>
            </div>
        </div>
        <div class="topnav">
            <div class="row" style="padding-top: 20px">
                <div class="col-sm-2 " style="float: left; top: 50%">

                    <span style="padding-left: 10px"> سبد خرید</span>
                    <span style="padding-left: 10px">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/image/shopping-cart.png" alt=""/>
                    </span>
                </div>

                <div class="col-sm-2 ">
                </div>

                <div class="search-container col-sm-5  ">
                    <div class="dropdown" id="cat">
                        <button class="btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            دسته بندی
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div id="input-search">
                        <input type="text" placeholder="جستجو..." name="search" >
                    </div>
                    <button type="submit" class="btn-srch" id="button-srch">
                        جستجو
                            <i class="fa fa-search"></i>


                    </button>


                </div>
                <div class="col-sm-1">
                </div>


                <div class="site-logo col-sm-2">
                    <img src="<?php bloginfo('template_directory') ?>/assets/image/logo.jpg" width="100%" height="100%"
                         alt=""/>
                </div>
            </div>

        </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
         <?php
               wp_nav_menu(
                   array(
                       'theme_location'=>'top-menu',
                       'menu_class'=>'nav navbar-nav',
                   )
               );
            ?>
        </div>
    </nav>

</header>
