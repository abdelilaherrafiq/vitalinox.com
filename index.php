<?php
   
   require_once 'connection.php';
   
   $sql = "SELECT * FROM `products` ";
   $select = $conn->query($sql);



?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الشركة المغربية لصناعة الزجاج و الالومينيوم و الاينوكس</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>


   
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
            </ul>
            
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>العربية</div>
                
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
        <ul>
                            <li class="active"><a href="./index.php">الرئيسية</a></li>
                            <li><a href="./shop-grid.html">من نحن</a></li>
                            <li><a href="./contact.html">اتصل بنا</a></li>
                        </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
            <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
            <a href="#"><i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;
            <a href="#"><i class="fa fa-pinterest-p"></i></a>&nbsp;&nbsp;
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; test@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;الشركة المغربية لصناعة الزجاج و الالومينيوم و الاينوكس&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> test@gmail.com</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <li>الشركة المغربية لصناعة الزجاج و الالومينيوم و الاينوكس</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="header__top__right__language">
                                <img src="img/language.jpg" width="26 px" height="15 px" alt="">
                                <div>العربية</div>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> تسجيل الدخول</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul >
                            <li class="active"><a href="./index.php">الرئيسية</a></li>
                            <li><a href="./shop-grid.html">من نحن</a></li>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li><a href="./contact.html">اتصل بنا</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>جميع الأقسام</span>
                        </div>
                        <ul>
                            <li><a href="#">الزجاج</a></li>
                            <li><a href="#">الالومينيوم</a></li>
                            <li><a href="#"> الاينوكس</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    جميع الفئات
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="مذا تحتاج؟">
                                <button type="submit" class="site-btn">بحث</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0660857679</h5>
                                <span>متاح &nbsp;&nbsp;&nbsp;&nbsp; 24/7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                            </div>
                        </div>
                    </div>
                    <div class="team">
                        <ul class="auto-grid" role="list">
                          <li>
                            <a href="" target=_blank" class="profile">
                              <h2 class="profile__name"></h2>
                              <p></p>
                              <img alt="" src="img/featured/feature-1.jpg" />
                            </a>
                          </li>
                          <li>
                            <a href="" target=_blank" class="profile">
                              <h2 class="profile__name"></h2>
                              <p></p>
                              <img alt="" src="img/featured/feature-10.jpg" />
                            </a>
                        </li>
                        <li>
                          <a href="" target=_blank" class="profile">
                            <h2 class="profile__name"></h2>
                            <p></p>
                            <img alt="" src="img/featured/feature-14.jpg" />
                          </a>
                        </li>
                        <li>
                          <a href="" target=_blank" class="profile">
                            <h2 class="profile__name"></h2>
                            <p></p>
                            <img alt="" src="img/featured/feature-19.jpg" />
                          </a>
                        </li>
                        <li>
                          <a href="" target=_blank" class="profile">
                            <h2 class="profile__name"></h2>
          <p></p>
          <img alt="" src="img/featured/feature-17.jpg" />
        </a>
      </li>
      <li>
        <a href="" target=_blank" class="profile">
          <h2 class="profile__name"></h2>
          <p></p>
          <img alt="" src="img/featured/feature-21.jpg" />
        </a>
      </li>
    </ul>
  </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->

    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">الكل</li>
                            <li data-filter=".Glass">الزجاج</li>
                            <li data-filter=".Aluminium">الالومينيوم &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li data-filter=".Nox">الاينوكس</li>
                        </ul>
                    </div>
                </div>
            </div>

            

            <div class="row featured__filter"><?php while ($row = mysqli_fetch_assoc($select)) {  ?> 
                <div class="col-lg-3 col-md-4 col-sm-6 mix Glass">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="admin/uploaded_img/<?php echo $row['image']; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?php echo $row['name'];?></a></h6> 
                        </div>
                    </div>
                </div><?php  } ?>
            </div>


             
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->

    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">

            <div class="footer__about">
                <ul>
                    <li>Address: 3 LOT MESSARAE BERDELLAk</li>
                    <li>Phone: 0660857679</li>
                    <li>Email: test@gmail.com</li>
                </ul>
            </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                     <div class="footer__about__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>     
            </div>
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Created by <a href="" target="_blank">.....</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>