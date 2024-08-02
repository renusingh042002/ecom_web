<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Bisum - eCommerce Bootstrap 5 Template</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- all css -->
    <style>
        :root {
            --primary-color: #00234D;
            --secondary-color: #F76B6A;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #00234D;
            --btn-primary-border-color: #00234D;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #00234D;
            --btn-primary-border-hover-color: #00234D;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #00234D;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #00234D;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #00234D;
            --btn-secondary-border-hover-color: #00234D;
            --btn-secondary-font-weight: 500;

            --heading-color: #000;
            --heading-font-family: 'Poppins', sans-serif;
            --heading-font-weight: 700;

            --title-color: #000;
            --title-font-family: 'Poppins', sans-serif;
            --title-font-weight: 400;

            --body-color: #000;
            --body-background-color: #fff;
            --body-font-family: 'Poppins', sans-serif;
            --body-font-size: 14px;
            --body-font-weight: 400;

            --section-heading-color: #000;
            --section-heading-font-family: 'Poppins', sans-serif;
            --section-heading-font-size: 48px;
            --section-heading-font-weight: 600;

            --section-subheading-color: #000;
            --section-subheading-font-family: 'Poppins', sans-serif;
            --section-subheading-font-size: 16px;
            --section-subheading-font-weight: 400;
        }
    </style>

    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="body-wrapper">
        <!-- announcement bar start -->
        <?php
        include ("include/navbar.php");
        ?>
        <!-- header end -->

        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path
                                    d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                    fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Contact US</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <main id="MainContent" class="content-for-layout">
            <div class="contact-page">

                <!-- contact box start -->
                <div class="contact-box mt-100">
                    <div class="contact-box-wrapper">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <svg width="50" height="45" viewBox="0 0 50 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.5 0.25V28.25H7.5V37.1641L10.3438 34.8672L18.6016 28.25H35.5V0.25H0.5ZM4 3.75H32V24.75H17.3984L16.9062 25.1328L11 29.8359V24.75H4V3.75ZM39 7.25V10.75H46V31.75H39V36.8359L32.6016 31.75H19.4766L15.1016 35.25H31.3984L42.5 44.1641V35.25H49.5V7.25H39Z" fill="#00234D"/>
                                            </svg>                                        
                                        </div>
                                        <div class="contact-details">
                                            <h2 class="contact-title">Mail Address</h2>
                                            <a class="contact-info" href="mailto:info@example.com">sachin24460@gmail.com</a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <svg width="36" height="42" viewBox="0 0 36 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 0.265625L16.4141 4.09375L2.41406 37.3438L0.828125 41.0625L4.60156 39.6406L18 34.6094L31.3984 39.6406L35.1719 41.0625L33.5859 37.3438L19.5859 4.09375L18 0.265625ZM18 9.17969L28.8281 34.9375L18.6016 31.1094L18 30.8906L17.3984 31.1094L7.17188 34.9375L18 9.17969Z" fill="#00234D"/>
                                            </svg>                                        
                                        </div>
                                        <div class="contact-details">
                                            <h2 class="contact-title">Office Location</h2>
                                            <p class="contact-info">21/77 KalyanPuri Delhi 110091</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <svg width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.149 0.75C9.23299 0.75 8.33065 1.07812 7.5787 1.67969L7.46932 1.73438L7.41463 1.78906L1.94588 7.42188L2.00057 7.47656C0.312094 9.03516 -0.207437 11.3662 0.524009 13.3828C0.530844 13.3965 0.517173 13.4238 0.524009 13.4375C2.00741 17.6826 5.80135 25.8789 13.2115 33.2891C20.649 40.7266 28.9547 44.3701 33.0631 45.9766H33.1178C35.2437 46.6875 37.5474 46.1816 39.1881 44.7734L44.7115 39.25C46.1607 37.8008 46.1607 35.2852 44.7115 33.8359L37.6021 26.7266L37.5474 26.6172C36.0982 25.168 33.5279 25.168 32.0787 26.6172L28.5787 30.1172C27.314 29.5088 24.2994 27.9502 21.4146 25.1953C18.5504 22.4609 17.0875 19.3164 16.5474 18.0859L20.0474 14.5859C21.5172 13.1162 21.5445 10.6689 19.9928 9.22656L20.0474 9.17188L19.8834 9.00781L12.8834 1.78906L12.8287 1.73438L12.7193 1.67969C11.9674 1.07812 11.065 0.75 10.149 0.75ZM10.149 4.25C10.2789 4.25 10.4088 4.31152 10.5318 4.41406L17.5318 11.5781L17.6959 11.7422C17.6822 11.7285 17.7984 11.9131 17.5865 12.125L13.2115 16.5L12.3912 17.2656L12.774 18.3594C12.774 18.3594 14.7838 23.7393 19.0084 27.7656L19.3912 28.0938C23.4586 31.8057 28.2506 33.8359 28.2506 33.8359L29.3443 34.3281L34.5396 29.1328C34.8404 28.832 34.7857 28.832 35.0865 29.1328L42.2506 36.2969C42.5514 36.5977 42.5514 36.4883 42.2506 36.7891L36.8912 42.1484C36.0846 42.8389 35.2301 42.9824 34.2115 42.6406C30.2467 41.082 22.5426 37.6982 15.6724 30.8281C8.74764 23.9033 5.13143 16.0488 3.80526 12.2344C3.53866 11.5234 3.73006 10.4707 4.35213 9.9375L4.46151 9.82812L9.7662 4.41406C9.88924 4.31152 10.0191 4.25 10.149 4.25Z" fill="#00234D"/>
                                            </svg>                                        
                                        </div>
                                        <div class="contact-details">
                                            <h2 class="contact-title">Phone Number</h2>
                                            <a class="contact-info" href="tel:(201) 555-0124">(+91) 8800724460 </a>
                                           
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact box end -->

                <!-- about banner start -->
                <div class="contact-form-section mt-100">
                    <div class="container">
                        <div class="contact-form-area">
                            <div class="section-header mb-4">
                                <h2 class="section-heading">Drop us a line</h2>
                                <p class="section-subheading">We would like to hear from you.</p>
                            </div>
                            <div class="contact-form--wrapper">
                                <form action="#" class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <fieldset>
                                                <input type="text" placeholder="Full name" />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <fieldset>
                                                <input type="email" placeholder="Email Address*" />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <fieldset>
                                                <input type="text" placeholder="Type a subject" />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <fieldset>
                                                <input type="text" placeholder="Phone Number" />
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <fieldset>
                                                <textarea cols="20" rows="6" placeholder="Write your message here*"></textarea>
                                            </fieldset>
                                            <button type="submit" class="position-relative review-submit-btn contact-submit-btn">SEND MESSAGE</button>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about banner end -->
            </div>            
        </main>
        
        <!-- footer start -->
        <?php
        include ("include/footer.php");
        ?>
        <!-- footer end -->
        
        <!-- scrollup start -->
        <button id="scrollup">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>  
        </button>
        <!-- scrollup end -->

        <!-- drawer menu start -->
        <!-- mobile menu bar -->
        <div class="offcanvas offcanvas-start d-flex d-lg-none" tabindex="-1" id="drawer-menu">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-header border-btm-black">
                    <h5 class="drawer-heading">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 d-flex flex-column justify-content-between">
                    <nav class="site-navigation">
                        <ul class="main-menu list-unstyled">
                            <li class="menu-list-item nav-item has-dropdown active">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="index.html">
                                        Home
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            >
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="offcanvas-header border-btm-black">
                                        <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                            <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" >
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                            <span class="menu-back-text">Home</span>
                                        </h5>
                                    </div>
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index.html">Home
                                                1</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index-shoe.html">Home
                                                2</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index-bag.html">Home
                                                3</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub"><a class="nav-link-sub nav-text-sub"
                                                href="index-tools.html">Home
                                                4</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item has-megamenu">
                                <div class="mega-menu-header">
                                    <a class="nav-link" href="collection-left-sidebar.html">
                                        Shop
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            >
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="container">
                                        <div class="offcanvas-header border-btm-black">
                                            <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                                <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                    width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" >
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                                <span class="menu-back-text">Shop</span>
                                            </h5>
                                        </div>
                                        <ul class="submenu megamenu-container list-unstyled">
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="collection-left-sidebar.html">
                                                        Category Pages
                                                    </a>
                                                    <span class="open-submenu">
                                                        <svg class="icon icon-dropdown"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            >
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="submenu-transform">
                                                    <div class="offcanvas-header border-btm-black">
                                                        <h5
                                                            class="drawer-heading btn-menu-back d-flex align-items-center">
                                                            <svg class="icon icon-menu-back"
                                                                xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="40" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                >
                                                                <polyline points="15 18 9 12 15 6"></polyline>
                                                            </svg>
                                                            <span class="menu-back-text">Category Pages</span>
                                                        </h5>
                                                    </div>
                                                    <ul class="megamenu list-unstyled megamenu-container">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-left-sidebar.html">With Left
                                                                Sidebar</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-right-sidebar.html">With Right
                                                                Sidebar</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-left-sidebar.html">3 Column
                                                                Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-without-sidebar.html">4 Column
                                                                Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="collection-without-sidebar.html">Without
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="index.html">
                                                        Product Pages
                                                    </a>
                                                    <span class="open-submenu">
                                                        <svg class="icon icon-dropdown"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            >
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="submenu-transform">
                                                    <div class="offcanvas-header border-btm-black">
                                                        <h5
                                                            class="drawer-heading btn-menu-back d-flex align-items-center">
                                                            <svg class="icon icon-menu-back"
                                                                xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="40" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                >
                                                                <polyline points="15 18 9 12 15 6"></polyline>
                                                            </svg>
                                                            <span class="menu-back-text">Product Pages</span>
                                                        </h5>
                                                    </div>
                                                    <ul class="megamenu list-unstyled">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Simple Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Variable Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Sale Product</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Featured & On Sale</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub" href="product-2.html">Tab
                                                                Inside</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="index.html">
                                                        Product Layouts
                                                    </a>
                                                    <span class="open-submenu">
                                                        <svg class="icon icon-dropdown"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            >
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="submenu-transform">
                                                    <div class="offcanvas-header border-btm-black">
                                                        <h5
                                                            class="drawer-heading btn-menu-back d-flex align-items-center">
                                                            <svg class="icon icon-menu-back"
                                                                xmlns="http://www.w3.org/2000/svg" width="40"
                                                                height="40" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                >
                                                                <polyline points="15 18 9 12 15 6"></polyline>
                                                            </svg>
                                                            <span class="menu-back-text">Product Layouts</span>
                                                        </h5>
                                                    </div>
                                                    <ul class="megamenu list-unstyled">
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product-2.html">Grid Images</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Vertical Thumb</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Gallery Type</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Product Width Layout</a>
                                                        </li>
                                                        <li class="menu-list-item nav-item-sub">
                                                            <a class="nav-link-sub nav-text-sub"
                                                                href="product.html">Sticky Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-list-item nav-item-sub">
                                                <div class="mega-menu-header">
                                                    <a class="nav-link-sub nav-text-sub megamenu-heading"
                                                        href="collection-left-sidebar.html">
                                                        Featured Collection
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="menu-list-item nav-item has-dropdown">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="about-us.html">
                                        Pages
                                    </a>
                                    <span class="open-submenu">
                                        <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            >
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="offcanvas-header border-btm-black">
                                        <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                            <svg class="icon icon-menu-back" xmlns="http://www.w3.org/2000/svg"
                                                width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" >
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg>
                                            <span class="menu-back-text">Pages</span>
                                        </h5>
                                    </div>
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="about-us.html">About Us</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="contact.html">Contact</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="faq.html">FAQ</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="404.html">404 page</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="login.html">Login</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="register.html">Register</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="cart.html">Cart</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="utility-menu list-unstyled">
                        <li class="utilty-menu-item">
                            <a class="announcement-text" href="tel:+1-078-2376">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                </span>
                                Call: +1 078 2376
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="announcement-login announcement-text" href="login.html">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-user" width="24" height="24" viewBox="0 0 10 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>Login</span>
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="header-action-item header-wishlist" href="wishlist.html">
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                        fill="#000" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                            fill="#000" />
                                    </svg>
                                </span>
                                <span>My wishlist</span>
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <button type="button" class="currency-btn btn-reset" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                <span>USD</span>
                                <span class="utilty-icon-wrapper">
                                    <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </button>

                            <ul class="currency-list dropdown-menu dropdown-menu-end px-2">
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="USD">
                                        <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                        <span>USD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="CAD">
                                        <img class="flag" src="assets/img/flag/cad.jpg" alt="img">
                                        <span>CAD</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="EUR">
                                        <img class="flag" src="assets/img/flag/eur.jpg" alt="img">
                                        <span>EUR</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="JPY">
                                        <img class="flag" src="assets/img/flag/jpy.jpg" alt="img">
                                        <span>JPY</span>
                                    </a>
                                </li>
                                <li class="currency-list-item ">
                                    <a class="currency-list-option" href="#" data-value="GBP">
                                        <img class="flag" src="assets/img/flag/gbp.jpg" alt="img">
                                        <span>GBP</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- drawer menu end -->

        <!-- drawer cart start -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="drawer-cart">
            <div class="offcanvas-header border-btm-black">
                <h5 class="cart-drawer-heading text_16">Your Cart (04)</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="cart-content-area d-flex justify-content-between flex-column">
                    <div class="minicart-loop custom-scrollbar">
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/furniture/1.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                                <p class="product-vendor">XS / Dove Gray</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1" min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/furniture/2.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Vita Lounge Chair</a></h2>
                                <p class="product-vendor">XS / Pink</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1" min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/furniture/3.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Sarno Dining Chair</a></h2>
                                <p class="product-vendor">XS / Dove Gray</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1" min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- minicart item -->
                        <div class="minicart-item d-flex">
                            <div class="mini-img-wrapper">
                                <img class="mini-img" src="assets/img/products/furniture/4.jpg" alt="img">
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="#">Vita Lounge Chair</a></h2>
                                <p class="product-vendor">XS / Dove Gray</p>
                                <div class="misc d-flex align-items-end justify-content-between">
                                    <div class="quantity d-flex align-items-center justify-content-between">
                                        <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg"
                                                alt="minus"></button>
                                        <input class="qty-input" type="number" name="qty" value="1" min="0">
                                        <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg"
                                                alt="plus"></button>
                                    </div>
                                    <div class="product-remove-area d-flex flex-column align-items-end">
                                        <div class="product-price">$580.00</div>
                                        <a href="#" class="product-remove">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="minicart-footer">
                        <div class="minicart-calc-area">
                            <div class="minicart-calc d-flex align-items-center justify-content-between">
                                <span class="cart-subtotal mb-0">Subtotal</span>
                                <span class="cart-subprice">$1548.00</span>
                            </div>
                            <p class="cart-taxes text-center my-4">Taxes and shipping will be calculated at checkout.
                            </p>
                        </div>
                        <div class="minicart-btn-area d-flex align-items-center justify-content-between">
                            <a href="cart.html" class="minicart-btn btn-secondary">View Cart</a>
                            <a href="checkout.html" class="minicart-btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="cart-empty-area text-center py-5 d-none">
                    <div class="cart-empty-icon pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                            >
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M16 16s-1.5-2-4-2-4 2-4 2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <p class="cart-empty">You have no items in your cart</p>
                </div>
            </div>
        </div>
        <!-- drawer cart end -->
        
        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>

</html>