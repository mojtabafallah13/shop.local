<?php get_header(); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <?php $sidebar1=get_field('side_bar_1') ?>
				
				
                  <img src="<?php echo $sidebar1['image1']['url'] ?>" width="100%" alt="">
				<br>
				<br>
				<br>
				
				
                  <img src="<?php echo $sidebar1['image2']['url'] ?>" width="100%" alt="">
				


            </div>
            <div class="col-md-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                 
                    <div class="carousel-inner">
                    <?php
                        while (have_rows('slider')) : the_row();
                            $image = get_sub_field('image');?>
                            <div class="item ">
                                <img src="<?php echo  $image['url'] ?>" alt="" style="width:100%;"/>
                            </div>
                        <?php
                        endwhile;
                    ?>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">قبلی</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">بعدی</span>
                    </a>
                </div>
				
		      <div class="bottom-slider">
			  <div class"row">
			  
                <div class="head-down">
                    <span>ارسال سریع</span>
                    <img src="<?php bloginfo('template_directory') ?>/assets/image/icon/1.png" width="50px" alt="">
                </div>
				
                <div class="head-down" style="marging-top:20px">
                    <span> روز ضمانت با</span>
                    <img src="<?php bloginfo('template_directory') ?>/assets/image/icon/2.png" width="50px" alt="">


                </div>
                <div class="head-down">

                    <span>پرداخت در محل</span>
                    <img src="<?php bloginfo('template_directory') ?>/assets/image/icon/3.png" width="50px" alt="">
                </div>
                <div class="head-down">

                    <span>ضمانت اصالت کالا</span>
                    <img src="<?php bloginfo('template_directory') ?>/assets/image/icon/4.png" width="50px" alt="">
                </div>
				</div>
			  </div>
			  
            </div>
            <div class="col-md-3">
                <ul class="list-group">
                    <?php
                    while (have_rows('side_bar_2')) : the_row();
                        $link = get_sub_field('link');
                        $text = get_sub_field('text_link');
                        ?>
                        <div class="item ">
                            <a href="<?php echo $link['url']?>">
                            <li class="list-group-item "><?php echo $text?></li>
                            </a>

                        </div>
                    <?php
                    endwhile;
                    ?>
                </ul>

            </div>

        </div>
    </div>
	
	 <div class="menu-item">
	   <ul>
		  <li>شگفت انگیز</li>
	   </ul>
	</div>
	
	<div class="container">
	  <?php  the_field('product');?>
	</div>

   <?php $banner=get_field('banner')?>
    <div class="container">
        <div class="row">
            <div class="banner">
                <img src="<?php echo $banner['url']?>" width="100%" alt="">
            </div>
        </div>
    </div>
		 <div class="container">
	       <?php  the_field('product2');?>
	     </div>
		 
		     <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
               wp_nav_menu(
                   array(
                       'theme_location'=>'top-m',
                       'menu_class'=>'nav navbar-nav'
                   )	
               );
            ?>
    <div class="collapse navbar-collapse" style="float: right; width: 100%; direction: rtl" id="navbarSupportedContent">
        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> محصولات</button>
            <button class="btn" onclick="filterSelection('news')"> جدیدترین</button>
            <button class="btn" onclick="filterSelection('view')"> پربازدیدترین</button>
            <button class="btn" onclick="filterSelection('sell')"> پرفروش ترین</button>
            <button class="btn" onclick="filterSelection('fav')"> محبوب ترین</button>
            <button class="btn" onclick="filterSelection('cheap')"> ارزان ترین</button>
            <button class="btn" onclick="filterSelection('expen')"> گران ترین</button>
        </div>
    </div>
	
    
   
<?php get_footer(); ?>