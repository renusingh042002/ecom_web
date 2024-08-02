<?php
session_start();
?>

<div class="announcement-bar bg-4 py-1 py-lg-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="announcement-call-wrapper">
                            <div class="announcement-call">
                                <a class="announcement-text text-white" href="tel:+1-078-2376">Call: +91 8800724460</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="announcement-text-wrapper d-flex align-items-center justify-content-center">
                            <p class="announcement-text text-white">New year sale - 30% off</p>
                        </div>
                    </div>
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="announcement-meta-wrapper d-flex align-items-center justify-content-end">
                            <div class="announcement-meta d-flex align-items-center">
                                <a class="announcement-login announcement-text text-white" href="login.php">
                                    <svg class="icon icon-user" width="10" height="11" viewBox="0 0 10 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 0C3.07227 0 1.5 1.57227 1.5 3.5C1.5 4.70508 2.11523 5.77539 3.04688 6.40625C1.26367 7.17188 0 8.94141 0 11H1C1 8.78516 2.78516 7 5 7C7.21484 7 9 8.78516 9 11H10C10 8.94141 8.73633 7.17188 6.95312 6.40625C7.88477 5.77539 8.5 4.70508 8.5 3.5C8.5 1.57227 6.92773 0 5 0ZM5 1C6.38672 1 7.5 2.11328 7.5 3.5C7.5 4.88672 6.38672 6 5 6C3.61328 6 2.5 4.88672 2.5 3.5C2.5 2.11328 3.61328 1 5 1Z"
                                            fill="#fff" />
                                    </svg>
                                    <span>Login</span>
                                </a>
                                <span class="separator-login d-flex px-3">
                                    <svg width="2" height="9" viewBox="0 0 2 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M1 0.5V8.5" stroke="#FEFEFE" stroke-linecap="round" />
                                    </svg>
                                </span>
                                <div class="currency-wrapper">
                                <a class="header-action-item header-wishlist ms-4 d-none d-lg-block"
                                    href="logout.php">
                                    <button type="button" class="btn btn-primary">LogOut</button>
                           </a> 
                                    <!-- <button type="button" class="currency-btn btn-reset text-white"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="flag" src="assets/img/flag/usd.jpg" alt="img">
                                        <span>USD</span>
                                        <span>
                                            <svg class="icon icon-dropdown" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </button> -->

                                    <!-- <ul class="currency-list dropdown-menu dropdown-menu-end px-2">
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
                                    </ul> -->
                                </div>

                            </div>
                            
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <header class="sticky-header border-btm-black header-1">
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="header-logo">
                                <a href="index.php" class="logo-main">
                                    <img src="assets/img/logo.png" loading="lazy" alt="bisum">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-block d-none">
                            <nav class="site-navigation">
                                <ul class="main-menu list-unstyled justify-content-center">
                                    <li class="menu-list-item nav-item has-dropdown active">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="index.php">
                                                Home
                                            </a>
                                        
                                        </div>
                                        
                                    </li>
                                    <li class="menu-list-item nav-item has-megamenu">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="gallery.php">
                                                Gallery
                                            </a>
                                        
                                        </div>
                                        
                                    </li>
                                    <li class="menu-list-item nav-item has-dropdown">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="about.php">About</a>
                                        
                                        </div>
                                        
                                    </li>
                                    <!-- <li class="menu-list-item nav-item has-dropdown">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="about-us.html">
                                                Pages
                                            </a>
                                        
                                        </div>
                               
                                    </li> -->
                                    <li class="menu-list-item nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 col-md-8 col-8">
                            <div class="header-action d-flex align-items-center justify-content-end">
                                <a class="header-action-item header-search" href="javascript:void(0)">
                                    <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a class="header-action-item header-wishlist ms-4 d-none d-lg-block"
                                    href="show_wishlist_product.php">
                                    <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                            fill="black" />
                                    </svg>
                                </a>

                                <a class="header-action-item header-wishlist ms-4 d-none d-lg-block"
                                    href="#">
                                    <p style="text-align:center;"> <?php if(isset($_SESSION['name']) && $_SESSION['email'] ){
                                      echo $_SESSION['name'];
                                      echo "<br>", $_SESSION['email'];
                                  }
                                  else {
                                    // header('location:http://localhost/php_fill_stack_project/login.php');
                                  }
                                 ?></p>
                                </a>

                                   
                                
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-wrapper">
                    <div class="container">
                        <form action="search.php" method ="post" class="search-form d-flex align-items-center">
                            <button type="submit" class="search-submit bg-transparent pl-0 text-start" name="go">
                                <!-- ye hamara search icon he jo search bar pr click karte he open hota he -->
                                <!-- ish pr click karne pr data find hoga -->
                                <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                        fill="black" />
                                </svg>
                            </button>
                              
                                <div class="search-input">
                                  <input type="search" placeholder="Search your products..." autocomplete="off" name="sachin">
                                </div>
                              
                            <div class="search-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-close">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        

