<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>爱豆网|个人博客网|个人作品网</title>
    <meta name="keywords" content="爱豆网,个人博客">
    <meta name="description" content="爱豆网,个人博客">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/SlickNav/1.0.10/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="static/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/animation.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/welcome.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/style.css"/>
</head>

<body onselectstart="return false;">
<div class="asg-container">
    <!--
    作者：917661718@qq.com
    时间：2019-05-28
    描述：欢迎页
    -->
    <div class="page-home" id="home">
        <div class="home-text-wrapper">
            <div class="home-logo">
                <a href="#about" class="asg-tx">
                    <img src="static/images/rich.png"/>
                </a>
            </div>
            <a href="#about" class="a-down asg-tx animate-bounce-down">
                <i class="iconfont">&#xe62a;</i>
            </a>
        </div>
    </div>
    <!--
    作者：917661718@qq.com
    时间：2019-05-28
    描述：菜单
    -->
    <div class="main-menu-wrapper">
        <nav class="page-nav nav-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img src="static/images/logo.png">
                    </div>
                    <div class="col-md-10">
                        <ul id="main-menu">
                            <li><a href="#home">首页</a></li>
                            <li><a href="#about">关于</a></li>
                            <li><a href="#resume">简历</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#work">工作</a></li>
                            <li><a href="#blog">博客</a></li>
                            <li><a href="#contact">联系</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--
    作者：917661718@qq.com
    时间：2019-05-28
    描述：介绍
    -->
    <div id="about" class="page-about">
        <div class="about-title">
            <h1>我们都是玖零后</h1>
        </div>
        <section class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="static/images/team5.jpg" alt="profile picture">
                    </div>
                    <div class="col-md-6">
                        <div class="section-title inner">
                            <h2>About Me</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                                quaerat sequi, debitis!
                            </p>
                        </div>
                        <ul>
                            <li>
                                <strong>Full Name :</strong> zsi
                            </li>
                            <li>
                                <strong>Age :</strong> 18
                            </li>
                            <li>
                                <strong>Address :</strong> Hunan, ChangSha
                            </li>
                            <li>
                                <strong>Email :</strong> 917661718@qq.com
                            </li>
                            <li>
                                <strong>Phone :</strong> +185 xxxx 3183
                            </li>
                            <li>
                                <strong>Job :</strong> Freelancer
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--about section end-->
    <!--skill section start-->
    <section class="skill-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title main">
                        <h2>My Skill</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                            quaerat sequi, debitis!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div id="circle-1"></div>
                    <h4 class="text-uppercase">PHYTHON</h4>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div id="circle-2"></div>
                    <h4 class="text-uppercase">PHP</h4>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div id="circle-3"></div>
                    <h4 class="text-uppercase">HTML</h4>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div id="circle-4"></div>
                    <h4 class="text-uppercase">JAVA</h4>
                </div>
            </div>
        </div>
    </section>
    <!--skill section end-->
    <!-- resome section start -->
    <section class="resome-area" id="resume">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title main">
                        <h2>Education &amp; Experience</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                            quaerat sequi, debitis!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="education-details">
                        <div class="icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="single-education-list">
                            <h4>MERIN LAND COLLEGE</h4>
                            <span class="duration">2012 - 2014</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, consectetur.
                            </p>
                        </div>
                        <div class="single-education-list">
                            <h4>MERIN LAND COLLEGE</h4>
                            <span class="duration">2012 - 2014</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, consectetur.
                            </p>
                        </div>
                        <div class="single-education-list">
                            <h4>MERIN LAND COLLEGE</h4>
                            <span class="duration">2012 - 2014</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, consectetur.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="working-details">
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="single-education-list">
                            <h4>MERIN LAND COLLEGE</h4>
                            <span class="duration">2012 - 2014</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, consectetur.
                            </p>
                        </div>
                        <div class="single-education-list">
                            <h4>MERIN LAND COLLEGE</h4>
                            <span class="duration">2012 - 2014</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, consectetur.
                            </p>
                        </div>
                        <div class="single-education-list">
                            <h4>MERIN LAND COLLEGE</h4>
                            <span class="duration">2012 - 2014</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, consectetur.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a href="#" class="boxed-btn">
                        Download Resome
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- resome section end -->
    <!--service section start-->
    <section class="service-section" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title main">
                        <h2>My Daily Service</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                            quaerat sequi, debitis!
                        </p>
                    </div>
                </div>
            </div>
            <div class="service-inner">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-box">
                            <div class="icon">
                                <img src="static/images/service-1.png" alt="service icon">
                            </div>
                            <h4>Design</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, nisi?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-box">
                            <div class="icon">
                                <img src="static/images/service-2.png" alt="service icon">
                            </div>
                            <h4>DEVELOPMENT</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, nisi?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-box">
                            <div class="icon">
                                <img src="static/images/service-3.png" alt="service icon">
                            </div>
                            <h4>BRANDING</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, nisi?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-box">
                            <div class="icon">
                                <img src="static/images/service-4.png" alt="service icon">
                            </div>
                            <h4>MARKETING</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, nisi?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-box">
                            <div class="icon">
                                <img src="static/images/service-5.png" alt="service icon">
                            </div>
                            <h4>SUPPORT</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, nisi?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-box">
                            <div class="icon">
                                <img src="static/images/service-6.png" alt="service icon">
                            </div>
                            <h4>CONSULTING</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, nisi?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--service section end-->
    <!--my team section start-->
    <section class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title main">
                        <h2>My Team Members</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                            quaerat sequi, debitis!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-box">
                        <div class="team-member-thumb">
                            <img src="static/images/team-1.png" alt=" team member picture">
                        </div>
                        <div class="content">
                            <h4>Jhon Doue</h4>
                            <span class="prosition">Web Designer</span>
                            <ul class="social-links">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-box">
                        <div class="team-member-thumb">
                            <img src="static/images/team-2.png" alt=" team member picture">
                        </div>
                        <div class="content">
                            <h4>Jhon Doue</h4>
                            <span class="prosition">Web Designer</span>
                            <ul class="social-links">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-box">
                        <div class="team-member-thumb">
                            <img src="static/images/team-4.png" alt=" team member picture">
                        </div>
                        <div class="content">
                            <h4>Jhon Doue</h4>
                            <span class="prosition">Web Designer</span>
                            <ul class="social-links">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-box">
                        <div class="team-member-thumb">
                            <img src="static/images/team-3.png" alt=" team member picture">
                        </div>
                        <div class="content">
                            <h4>Jhon Doue</h4>
                            <span class="prosition">Web Designer</span>
                            <ul class="social-links">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--my team section end-->
    <div class="counter-section">
        <!-- counter section start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-uppercase">
                    <ul>
                        <li>
                            <div class="single-counter-item">
                                <div class="icon">
                                    <img src="static/images/project.png" alt="project done image">
                                </div>
                                <span class="counter-number"> 2350 </span>
                                <h4>Project Done</h4>
                            </div>
                        </li>
                        <li>
                            <div class="single-counter-item">
                                <div class="icon">
                                    <img src="static/images/like.png" alt="like image">
                                </div>
                                <span class="counter-number"> 2350 </span>
                                <h4>Happy Clients</h4>
                            </div>
                        </li>
                        <li>
                            <div class="single-counter-item">
                                <div class="icon">
                                    <img src="static/images/coffe-cup.png" alt=" coffe cup">
                                </div>
                                <span class="counter-number"> 2350 </span>
                                <h4>Cups Of Coffee</h4>
                            </div>
                        </li>
                        <li>
                            <div class="single-counter-item">
                                <div class="icon">
                                    <img src="static/images/photo-taken.png" alt="">
                                </div>
                                <span class="counter-number"> 2350 </span>
                                <h4>Photos Taken</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tlinks">
        Collect from
        <a href="http://www.cssmoban.com/">
            建站模板
        </a>
    </div><!-- counter section end -->
    <!--portfolio section start-->
    <section class="portfolio-area" id="work">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title main">
                        <h2>Some Of My Work</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                            quaerat sequi, debitis!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="porfolio-menu">
                        <li data-filter="*" class="active">
                            All
                        </li>
                        <li data-filter=".design">
                            Web Design
                        </li>
                        <li data-filter=".development">
                            Web Development
                        </li>
                        <li data-filter=".photography">
                            Photography
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 text-center">
                    <div class="portolio-masonary">
                        <div class="single-porfolio-item grid-size design">
                            <div class="img-thumb">
                                <img src="static/images/portfolio-1.jpg" alt=" portfolio image ">
                                <div class="hover">
                                    <div class="icon">
                                        <a href="static/images/portfolio-1.jpg" class="image-popup"
                                           title="Portfolio image">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-porfolio-item grid-size design">
                            <div class="img-thumb">
                                <img src="static/images/portfolio-2.jpg" alt=" portfolio image ">
                                <div class="hover">
                                    <div class="icon">
                                        <a href="static/images/portfolio-2.jpg" class="image-popup"
                                           title="Portfolio image">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-porfolio-item grid-size development">
                            <div class="img-thumb">
                                <img src="static/images/portfolio-3.jpg" alt=" portfolio image ">
                                <div class="hover">
                                    <div class="icon">
                                        <a href="static/images/portfolio-3.jpg" class="image-popup"
                                           title="Portfolio image">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-porfolio-item grid-size development ">
                            <div class="img-thumb">
                                <img src="static/images/portfolio-4.jpg" alt=" portfolio image ">
                                <div class="hover">
                                    <div class="icon">
                                        <a href="static/images/portfolio-4.jpg" class="image-popup"
                                           title="Portfolio image">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-porfolio-item grid-size photography">
                            <div class="img-thumb">
                                <img src="static/images/portfolio-5.jpg" alt=" portfolio image ">
                                <div class="hover">
                                    <div class="icon">
                                        <a href="static/images/portfolio-5.jpg" class="image-popup"
                                           title="Portfolio image">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-porfolio-item grid-size photography">
                            <div class="img-thumb">
                                <img src="static/images/portfolio-6.jpg" alt=" portfolio image ">
                                <div class="hover">
                                    <div class="icon">
                                        <a href="static/images/portfolio-5.jpg" class="image-popup"
                                           title="Portfolio image">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio section end-->
    <!-- testimonial section start-->

    <!-- testimonial section end-->
    <!-- blog section start-->
    <section class="blog-area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title main">
                        <h2>My Blog</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                            quaerat sequi, debitis!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="post-thumb">
                            <img src="static/images/blog-1.jpg" alt=" blog image">
                        </div>
                        <h4>STANdard POST WITH IMAGE</h4>
                        <ul class="post-meta">
                            <li>
                                <i class="fa fa-clock-o"></i> 05 Jan 2018
                            </li>
                            <li>
                                <i class="fa fa-user"></i> By
                                <a href="#">
                                    Admin
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-comments"></i> 27
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, excepturi modi eius a
                            vel accusamus!
                        </p>
                        <a href="#" class="boxed-btn">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="post-thumb">
                            <img src="static/images/blog-2.jpg" alt=" blog image">
                        </div>
                        <h4>STANdard POST WITH IMAGE</h4>
                        <ul class="post-meta">
                            <li>
                                <i class="fa fa-clock-o"></i> 05 Jan 2018
                            </li>
                            <li>
                                <i class="fa fa-user"></i> By
                                <a href="#">
                                    Admin
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-comments"></i> 27
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, excepturi modi eius a
                            vel accusamus!
                        </p>
                        <a href="#" class="boxed-btn">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="post-thumb">
                            <img src="static/images/blog-3.jpg" alt=" blog image">
                        </div>
                        <h4>STANdard POST WITH IMAGE</h4>
                        <ul class="post-meta">
                            <li>
                                <i class="fa fa-clock-o"></i> 05 Jan 2018
                            </li>
                            <li>
                                <i class="fa fa-user"></i> By
                                <a href="#">
                                    Admin
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-comments"></i> 27
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, excepturi modi eius a
                            vel accusamus!
                        </p>
                        <a href="#" class="boxed-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end-->
    <!--contact section start-->
    <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title main">
                        <h2>Contact Me</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quas error modi
                            quaerat sequi, debitis!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="single-contact-box">
                        <div class="icon">
                            <img src="static/images/contact-icon-2.png" alt="contact icon">
                        </div>
                        <h4>Email</h4>
                        <p>
                            contact@mark.com
                        </p>
                    </div>
                    <div class="single-contact-box">
                        <div class="icon">
                            <img src="static/images/contact-icon-1.png" alt="contact icon">
                        </div>
                        <h4>Location</h4>
                        <p>
                            3481 Melrose Place, Los Angeles
                        </p>
                    </div>
                    <div class="single-contact-box">
                        <div class="icon">
                            <img src="static/images/contact-icon-3.png" alt="contact icon">
                        </div>
                        <h4>Phone</h4>
                        <p>
                            + 000-111-222
                        </p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="contact-form-wrapper">
                        <form action="index.html">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" placeholder="Enter Name">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="email" placeholder="Enter Email">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Enter Sujbect">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                                  placeholder="Meassage"></textarea>
                                    <input type="submit" value="Send Message" class="boxed-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact section end-->
    <!--footer area start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="social-area">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="copyright-text">
                        <p>
                            Copyright &copy; 2018.Company name All rights reserved.More Templates
                            <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">
                                模板之家
                            </a>
                            - Collect from
                            <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">
                                网页模板
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="preloader">
    <div class="preloader-inner">
        <div class="cssload-box-loading"></div>
    </div>
</div>
<span class="go-top"><i class="fa fa-angle-double-up"></i></span>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
<script src="https://cdn.bootcss.com/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.bootcss.com/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdn.bootcss.com/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdn.bootcss.com/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdn.bootcss.com/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.bootcss.com/SlickNav/1.0.10/jquery.slicknav.min.js"></script>
<script src="static/js/jquery.counterup.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>
<script src="static/js/scrollspy.js" type="text/javascript" charset="utf-8"></script>
<script src="static/js/welcome.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>