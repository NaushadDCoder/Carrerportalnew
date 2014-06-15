<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <!--bootstrap stylesheet -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--custom css-->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/custom.css" rel="stylesheet" type="text/css"/>
        <!---carousel css--->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/carousel.css" rel="stylesheet" type="text/css"/>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    
    <!--body-->
    
    <body>
        <!--Start page-->
        <div class="container" id="page">
            <!-- Starting header -->
            <div id="header">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Terms of use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Ending header -->

            <!-- Starting  navbar -->

            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img id="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="Tradeasia"></img>Career</a>
                </div>
                <div class="navbar-collapse collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li ><a href="?r=site/index">Home</a></li>
                        <li><a href="?r=site/page&view=about">About</a></li>
                        <li> <a href="index.php?r=site/contact">Contact us</a></li>
                 
                        <li><a href="?r=site/login">Login</a></li>
                    </ul>
                </div>
            </div>
            <!--Ending navbar-->
            <?php 
             $indexpage=Yii::app()->controller->action->id;
            // echo "$indexpage";
             if (strcmp($indexpage,"index")==0){
                     ?>
            <!-- Starting Carousel-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner_slider_1.jpg" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                                </div>
                            </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner_slider_2.jpg"  alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">


                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                                </div>
                            </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner_slider_3.jpg" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <!-- Ending carousel -->
            <?php } else { ?>
                <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p>
                        
                    </p>
                    <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
                </div>
            <?php } ?>
            
            <!--Starting breadcrumb-->

            
            <div >
                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?>
                <?php endif ?>
            </div> 

            <!--Ending breadcrumb-->

            <!--Starting main content-->
            <div>
                <?php echo $content; ?>
            </div>

            <!--Ending main content-->

            <div class="clear"></div>

            <!-- Starting footer -->

            <div id="footer">  
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Terms of use</a></li>

                        </ul>
                    </div>
                    <div class="col-md-6"> 
                        <p> © Copyright 2014 Tradeasia.All Rights Reserved</p>
                    </div>
                </div>           
            </div>

            <!--Ending Footer-->

        </div>

        <!-- End page -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/doc.min.js"></script>
    </body>
</html>
