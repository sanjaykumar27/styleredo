<html>

    <meta charset="utf-8">
    <title>Style Redo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
    require_once './includes/assetincludes.php';
    ?>
    <body>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
        <style>
            p{
                font-size: 15px;
                color: #fff;
            }
            .login
            {
                padding: 40px;
                box-sizing: content-box;
            }
            .form-group
            {
                width: 200px;
            }
            .pad{
                padding-bottom: 10px;
            }
        </style>
        <div class="pageheader" style="background-color: #50c2c2; padding-top: 14px; ">
            <div class="container">

                <div class="col-lg-4 col-md-4 col-xs-4 pad" >
                    <ul >
                        <a href=""><img style="height: 35px;" src="./assets/images/facebook1.png"></a>&nbsp;&nbsp;
                        <a href=""><img   style="height: 35px;" src="./assets/images/Instagram1.png"></a>&nbsp;&nbsp;
                        <a href=""><img  style="height: 35px;" src="./assets/images/twitter1.png"></a>&nbsp;&nbsp;
                        <a href=""><img   style="height: 35px;" src="./assets/images/googleplus1.png"></a>
                    </ul>    
                </div> 
                 <div class="col-lg-4 col-md-4 col-xs-4">
                    <p align="center"><img style="height: 100px;" class="img-responsive" src ="./assets/images/main1.png"></p>
                </div>
                <div class="attr-nav col-lg-4 col-md-4 col-xs-4" align="right">

                    <ul>
                        <li class="dropdown">
                            <p>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;LOGIN&nbsp;&nbsp;&nbsp;</p>
                            <ul class="dropdown-menu">
                                <div class="arw_mini_form_login arw-toggle-content text-capitalize"><div class="block block-login">
                                        <div class="block-title">
                                            <strong><span>Login</span></strong>
                                        </div>
                                        <form action="" method="post" id="arw-mini-login-form">
                                            <input name="form_key" type="hidden" value="Nlf6B8knInaw7T01" />
                                            <div class="block-content">
                                                <div class="input-box"><label for="mini-login">Email address</label><input type="text" name="login[username]" id="mini-login" class="input-text required-entry validate-email" /></div>
                                                <div class="input-box"><label for="mini-password">Password</label><input type="password" name="login[password]" id="mini-password" class="input-text required-entry validate-password" /></div>
                                                <div class="actions">
                                                    <button type="submit" class="button f-left"><span><span>Login</span></span></button>
                                                    <a href="" class="forget-password">Lost your password?</a>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="myaccount-create">
                                            <p class="left text-in-left">Not registered? No problem</p>
                                            <button type="button" title="Create an Account" class="button btn3 f-right" onclick="window.location = 'http://delphinus.demo.arw.tf/customer/account/create/'"><span><span>Create Account</span></span></button>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        var dataForm = new VarienForm('arw-mini-login-form', true);
                                        //]]>
                                    </script></div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <p>|&nbsp;&nbsp;<a style="color: #fff" href ="">MY ACCOUNT</a>&nbsp;&nbsp;&nbsp;</p>

                        </li>
                        <li class="dropdown">
                            <p >|&nbsp;&nbsp; <span  class="glyphicon glyphicon-shopping-cart"></span>&nbsp; MY CART &nbsp;&nbsp;|&nbsp;</p> 
                            <ul class="dropdown-menu cart-list">
                                <li ><a href="">Your Cart is Empty..</a></li>
                                <li><a href="">Your Cart is Empty..</a></li>
                                <li><a href="">Your Cart is Empty..</a></li>
                            </ul>
                        </li>
            
                        <!-- for side link <li class="side-menu"><a href="#">-<i class="fa fa-bars"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Home -->

        <div class="clearfix"></div>

        <!-- Start Navigation -->
        <nav class="navbar navbar-sticky bootsnav">


            <div class="container" >            
                <!-- Start Atribute Navigation -->
                <div class="attr-nav" >
                    <ul>
                        <li class="search"><a href="#"><span style="font-size: 18px; color: #50c2c2;" class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
                        <!-- for side link <li class="side-menu"><a href="#">-<i class="fa fa-bars"></i></a></li> -->
                    </ul>
                </div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#brand"><img class="img-responsive" style="height: 65px; width: 160px;" src="./assets/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right " data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="#" >Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mens <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Title Menu One</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->

                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Title Menu Four</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Womens <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Custom Menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>   
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                        <input style="color: #000;" type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h6 class="title">Custom Pages</h6>
                    <ul class="link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h6 class="title">Additional Links</h6>
                    <ul class="link">
                        <li><a href="#">Retina Homepage</a></li>
                        <li><a href="#">New Page Examples</a></li>
                        <li><a href="#">Parallax Sections</a></li>
                        <li><a href="#">Shortcode Central</a></li>
                        <li><a href="#">Ultimate Font Collection</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->

        <div class="clearfix"></div>

    </body>
</html>