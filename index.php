<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor..
-->
<?php
require_once "./config/config.php";
require_once VIEW_HEADER;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Style Redo</title>
    </head>
    <body>

    </body>
    <style type="text/css">

        /* parallex ------------------------------ */
        *{
            margin: 0px;
            padding: 0px;
        }
        #image
        {
            position: relative;
            z-index: -1;
        }
        #content 
        {
            height: 700px;
            width: 100%;
            margin-top: -10px;
            background-color: #fff;
            position: relative;
            z-index: 1;
        }
        .pad
        {
            padding-top: 0px;
        }
        /* parllex end --------------*/

        /*carasoul --------------------- */
        .carousel-control.left, .carousel-control.right {
            background-image: none
        }

        /* pop / modal / ---------------------------- */
        .modal  {
            /*   display: block;*/
            padding: 0px !important;
            background-color: rgba(2, 2, 1, 0); 
            text-align: center;

        }
        .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -4px;
        }

        .modal-content {
            border-radius: 0px;
            border: none;

        }
        .modal-body {
            background-color: #fff;
            color: white;
            height: 480px;
            padding: 0px !important;   

        }
        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }

        /* button and text box */
        .btnn
        {
            background-color: #000;
            border-radius: 0px;
            border: 4px solid #000;
            width: 200px;
            color: #fff;
            -webkit-transition-duration: 0.6s; /* Safari */
            transition-duration: 0.6s;
        }
        .btnn:hover
        {
            background-color: #fff;
            border: 4px solid #000;
            color: #000;
            -webkit-transition-duration: 0.6s; /* Safari */
            transition-duration: 0.6s;
        }
        .text
        {
            width: 400px;
            height: 40px;
            border: 2px solid #000;
            border-radius: 0px;
        }
        .text:hover
        {
            border: 2px solid #50c2c2;
        }

        /* parallex second */
        .parallax-window {
            min-height: 400px;
            background: transparent;
        }



    </style>
    <script type="text/javascript">

        // parallex ---------------- 
        var ypos, image;
        function parallex()
        {
            ypos = window.pageYOffset;
            image = document.getElementById('image');
            image.style.top = ypos * .5 + 'px';
        }
        window.addEventListener('scroll', parallex)
        // pop up / modal ////// -------------------     
        $(window).load(function () {
            $('#bs-example-modal-lg').modal('show');
        });
    </script>


<!-- <img id="image" class="img-responsive pad" src="assets/images/background.jpg"/>
      

  <div id="content" >
 </div> -->

    <!-- myCarousel start ------------------------myCarousel-------------------------------------------- -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide"  src="assets/images/banner1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="assets/images/banner2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="assets/images/banner3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- carousel controls ----------------------- -->    
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"  aria-hidden="true"></span>
            <span class="sr-only">Previous</span>

        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel end ---------carousel end------------carousel ------------->

    <!-- pop up / modal ------------------------------------------------------- -->
    <div class="container">
        <div class="row">
            <!-- Large modal -->

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="bs-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-body">
                            <table style="width: 100%; border-color: #fff;" rules="rows">
                                <tr style="background-color: #000;">
                                    <td rowspan="4"><img style="background-color: #000; height: 480px;" src="assets/images/popus.jpg"></td>
                                    <td style="background-color: #000000;height: 10px; width: 100%;font-size: 30px; height: 50px;" align="center">Sign up for the Newsletter</td>
                                    <td>
                                        <a href=""><span style="font-size: 20px; color: #fff;padding-right: 10px;" class="glyphicon glyphicon-remove" aria-hidden="true" data-dismiss="modal"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #000; padding: 30px;" align="center">

                                        <strong> Join YourStore's squad for 20% off </strong><br>
                                        and get all the latest news, trends and offs and offers 
                                        straight to your inbox. Or get 15% off using code SQUAD15

                                    </td>
                                </tr> <form>
                                    <tr>
                                        <td style="padding-left: 65px">

                                            <div class="form-group">
                                                <input type="text" class="form-control text " placeholder="Enter Email ID.....">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 155px;">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-lg btnn">
                                            </div>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- pop up / modal ending------------------------------------------------------- -->

    <div class="parallax-window" data-parallax="scroll"  data-image-src="assets/images/back.jpg">
    </div>

    <style>

        .ico{
            font-size: 60px;
            color: #009999;
        }
        .ico:hover
        {
            color: #999999;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
        }
        .txt
        {
            color: #666666;
            font-size: 20px;
            padding-top: 20px;
        }


    </style>
    <div class="parallax-window container-fluid"  data-parallax="scroll" >
        <div class="row " align="center" >
            <hr>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <i class="fa fa-diamond ico" aria-hidden="true"></i>

                <br><p class="txt">100% Quality Product</p>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">

                <i class="fa fa-clock-o ico" aria-hidden="true"></i>

                <br><p class="txt">100% On-time Delivery</p>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">

                <i class="fa fa-inr ico" aria-hidden="true"></i>
                <br><p class="txt">100% Money Protection</p>
            </div>
        </div>
        <d

            <!-- promotion part  start here ----------------------------------- -->


            <!-- categories  --------------------------------------------- -->
        <style>
                .cat
                {
                    /*background-color: #cccccc;*/
                    padding: 40px  0px 40px 0px;
                }
                .box
                {
                    height: 430px;
                    width: 400px;
                    background-color: #000;
                }
                .hovereffect {

                    overflow: hidden;
                    position: relative;
                    cursor: default;
                }
                .hovereffect .overlay {
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    overflow: hidden;
                    top: 20px;
                    left: 0;
                    -webkit-transition: all 0.4s ease-in-out;
                    transition: all 0.4s ease-in-out;
                }
                .hovereffect:hover .overlay {
                    background-color: rgba(170,170,170,0.4);
                }

                .hovereffect h2, .hovereffect img {
                    -webkit-transition: all 0.4s ease-in-out;
                    transition: all 0.4s ease-in-out;
                }
                .hovereffect img {
                    display: block;
                    position: relative;
                    -webkit-transform: scale(1.1);
                    -ms-transform: scale(1.1);
                    transform: scale(1.1);
                }

                .hovereffect:hover img {
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    transform: scale(1);
                }

                .hovereffect h2 {
                    text-transform: uppercase;
                    color: #fff;
                    text-align: center;
                    position: relative;
                    font-size: 17px;
                    padding: 10px;
                    background: rgba(0, 0, 0, 0.6);
                }

                .hovereffect a.info {
                    display: inline-block;
                    text-decoration: none;
                    padding: 7px 14px;
                    text-transform: uppercase;
                    color: #fff;
                    border: 1px solid #fff;
                    margin: 50px 0 0 0;
                    background-color: transparent;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    -webkit-transform: scale(1.5);
                    -ms-transform: scale(1.5);
                    transform: scale(1.5);
                    -webkit-transition: all 0.4s ease-in-out;
                    transition: all 0.4s ease-in-out;
                    font-weight: normal;
                    height: 85%;
                    width: 85%;
                    position: absolute;
                    top: -5%;
                    left: 8%;
                    padding: 70px;
                }

                .hovereffect:hover a.info {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    -webkit-transform: scale(1);
                    -ms-transform: scale(1);
                    transform: scale(1);
                    background-color: rgba(0,0,0,0.4);
                }
            </style>

            <div class="row" align="center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cat">
                    <div class="box hovereffect" >
                        <img style="height: 430px;" class="img-responsive" src="assets/images/products/index1.JPG">
                        <div class="overlay">
                            <h2>Designer shirts</h2>
                            <a class="info" href="#">link here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cat">
                   <div class="box hovereffect" >
                        <img style="height: 430px;" class="img-responsive" src="assets/images/products/index2.JPG">
                        <div class="overlay">
                            <h2>Casual / Formal Shirts</h2>
                            <a class="info" href="#">link here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cat">
                   <div class="box hovereffect" >
                        <img style="height: 430px;" class="img-responsive" src="assets/images/products/index3.JPG">
                        <div class="overlay">
                            <h2>Denim Shirts</h2>
                            <a class="info" href="#">link here</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    