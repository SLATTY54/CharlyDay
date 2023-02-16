<?php

namespace Application\action;

class DefaultAction {

    public function header(): string
    {
        $html = <<< HEAD
                <!DOCTYPE html>
                <html lang="en">
                <!-- Basic -->
                
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                
                    <!-- Mobile Metas -->
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                
                    <!-- Site Metas -->
                    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
                    <meta name="keywords" content="">
                    <meta name="description" content="">
                    <meta name="author" content="">
                
                    <!-- Site Icons -->
                    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
                    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
                
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="css/bootstrap.min.css">
                    <!-- Site CSS -->
                    <link rel="stylesheet" href="css/style.css">
                    <!-- Responsive CSS -->
                    <link rel="stylesheet" href="css/responsive.css">
                    <!-- Custom CSS -->
                    <link rel="stylesheet" href="css/custom.css">
                
                    <!--[if lt IE 9]>
                      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                    <![endif]-->
                
                </head>
                
                <body>
                    <!-- Start Main Top -->
                    <header class="main-header">
                        <!-- Start Navigation -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
                            <div class="container">
                                <!-- Start Header Navigation -->
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars"></i>
                                </button>
                                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                                </div>
                                <!-- End Header Navigation -->
                
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-menu">
                                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                                        <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                                        <li class="nav-item"><a class="nav-link" href="about.html">A propos</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shop.html">Boutique</a></li>
                                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                
                                <!-- Start Atribute Navigation -->
                                <div class="attr-nav">
                                    <ul>
                                        <li class="side-menu"><a href="#">
                                        <i class="fa fa-shopping-bag"></i>
                                            <span class="badge">3</span>
                                            <p>Mon Panier</p>
                                    </a></li>
                                    </ul>
                                </div>
                                <!-- End Atribute Navigation -->
                            </div>
                            <!-- Start Side Menu -->
                            <div class="side">
                                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                                <li class="cart-box">
                                    <ul class="cart-list">
                                        <li>
                                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                                            <h6><a href="#">Delica omtantur </a></h6>
                                            <p>1x - <span class="price">$80.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                                            <h6><a href="#">Omnes ocurreret</a></h6>
                                            <p>1x - <span class="price">$60.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                                            <h6><a href="#">Agam facilisis</a></h6>
                                            <p>1x - <span class="price">$40.00</span></p>
                                        </li>
                                        <li class="total">
                                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                            <!-- End Side Menu -->
                        </nav>
                        <!-- End Navigation -->
                    </header>
                    <!-- End Main Top -->
                
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->
                
                    <!-- Start All Title Box -->
                    <div class="all-title-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>A Propos</h2>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                                        <li class="breadcrumb-item active">A Propos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End All Title Box -->
                        
                HEAD;
                return $html;

            }

            public function footer(): string
            {
                $html = <<< HEAD
                <!-- Start Instagram Feed  -->
            <div class="instagram-box">
                <div class="main-instagram owl-carousel owl-theme">
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/slider-1.jpg" alt="" />
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/slider-2.jpg" alt="" />
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/slider-3.jpg" alt="" />
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/slider-4.jpg" alt="" />
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ins-inner-box">
                            <img src="images/slider-5.jpg" alt="" />
                            <div class="hov-in">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Instagram Feed  -->
        
        
            <!-- Start Footer  -->
            <footer>
                <div class="footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-top-box">
                                    <h3>Horaire d'ouverture</h3>
                                    <ul class="list-time">
                                        <li>Mardi - Samedi: 10h00 à 22h00</li> <li>Dimanche-Lundi: Fermé</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-top-box">
                                    <h3>Réseaux sociaux</h3>
                                    <p>Rejoignez nos réseaux sociaux.</p>
                                    <ul>
                                        <li><a href="https://www.facebook.com/courtcircuitVoltaire"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/court_circuit_nancy/?hl=fr"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-widget">
                                    <h4>A propos de CourCircuit</h4>
                                    <p>Court-circuit est un lieu de vie associant épicerie et café/bar, permettant de trouver en un seul et même lieu et au juste prix des produits locaux, bio et vendus en vrac (c’est-à-dire sans emballages).</p> 
                                    <p>Notre objectif est de promouvoir – par l’échange et la sensibilisation – l’agriculture et l’économie locale, de faciliter un mode de consommation responsable, de proposer un service accessible à tous·tes et de soutenir les producteurs et productrices qui se tournent vers l’agriculture biologique.</p> 
                                    <p>Mais court-circuit est aussi votre lieu de vie : rencontre avec les producteur·trice·s locaux, les associations, ateliers zéro déchets, expositions … La communauté court-circuit permet l’échange, la formation, l’information, la découverte et le dialogue avec tous·tes les acteurs et actrices impliqué·e·s dans la transition écologique, l’économie sociale et solidaire.</p>				
                                    <p>Nous sommes associés avec le Florain, la monnaie locale complémentaire à l’Euro dans le sud de la Meurthe-et-Moselle : nous acceptons la monnaie et sommes comptoir de change !</p>			
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-link">
                                    <h4>Information</h4>
                                    <ul>
                                        <li><a href="index.html">Accueil</a></li>
                                        <li><a href="about.html">A Propos</a></li>
                                        <li><a href="shop.html">Boutique</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="footer-link-contact">
                                    <h4>Contact</h4>
                                    <ul>
                                        <li>
                                            <p><i class="fas fa-map-marker-alt"></i>Addresse : 47 Rue Voltaire, 54520 Laxou </p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-phone-square"></i>Telephone: <a href="tel:+1-888705770">03 83 19 71 03</a></p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">local@courtcircuitnancy.fr</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer  -->
        
            <!-- Start copyright  -->
            <div class="footer-copyright">
                <p class="footer-company">Tous droits réservés. &copy; 2023 <a href="#">ArobaseStudentCorporation</a>
            </div>
            <!-- End copyright  -->
        
            <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
        
            <!-- ALL JS FILES -->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- ALL PLUGINS -->
            <script src="js/jquery.superslides.min.js"></script>
            <script src="js/bootstrap-select.js"></script>
            <script src="js/inewsticker.js"></script>
            <script src="js/bootsnav.js."></script>
            <script src="js/images-loded.min.js"></script>
            <script src="js/isotope.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/baguetteBox.min.js"></script>
            <script src="js/jquery-ui.js"></script>
            <script src="js/jquery.nicescroll.min.js"></script>
            <script src="js/form-validator.min.js"></script>
            <script src="js/contact-form-script.js"></script>
            <script src="js/custom.js"></script>
        </body>
        
        </html>
        HEAD;
        return $html;
    }
}