<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <script src="https://kit.fontawesome.com/6b129fd467.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>
        :root {
            --primary-color: #F76B6A;
            --secondary-color: #F76B6A;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #F76B6A;
            --btn-primary-border-color: #F76B6A;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #F76B6A;
            --btn-primary-border-hover-color: #F76B6A;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #00234D;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #00234D;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #F76B6A;
            --btn-secondary-border-hover-color: #F76B6A;
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
        .alert{
            margin:-9px 0 12px 0;
            padding:10px;
            border-radius:5px;
            color:#721c24;
            background:#f8d7da;
            border:1px solid #f5c6ch;
        }
        </style>
<body>
    
<?php
        include ("include/navbar.php");
        ?>

<div class="featured-collection mt-100 overflow-hidden">
<h1 style="color:red; font-weight:bold; text-align:center;">YOUR WISHLIST PRODUCT</h1>
                <div class="collection-tab-inner">
                <!-- <div class="section-header text-center">
                            <h2 class="section-heading">Popular Products</h2>
                        </div> -->
                        
                    <div class="container">
                        
                        <div class="row">
                        <?php
                                  $showall="select * from wishlist";
                                  $qry=$conn->prepare($showall);
                                  $qry->execute();
                                  $table=$qry->get_result();
                                  $qry->close();
                                  while($row=$table->fetch_assoc())
                                 {
                                  $i= $row['image_name'];
                        ?>
                        
                            <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <!-- hm id ke base pr data ko dynamic show kara rhe he ishke liye id hm database se la rhe he -->
                                        <a class="hover-switch" href="product.php?pid=<?php echo $row['id'] ?>">
                                            <!-- <img class="secondary-img" src="assets/img/products/shoe/9.jpg"
                                                alt="product-img"> -->
                                            <img class="primary-img" src="ADMIN/images/<?php echo $i ?>"
                                                alt="product-img">
                                        </a>

                                        <div class="product-badge">
                                            <span class="badge-label badge-new rounded">Featured</span>
                                            <span class="badge-label badge-percentage rounded">-44%</span>
                                        </div>

                                        <div class="product-card-action product-card-action-2 justify-content-center">
                                            

                                            <!-- <a href="wishlistprocess.php?myid=<?php echo $row['id']?>&pn=<?php echo $row['product_name']?>&size=<?php echo $row['size']?>&vender=<?php echo $row['vender'] ?>&price=<?php echo $row['price']?>&imgename=<?php echo $row['image_name']?>" class="action-card action-wishlist">
                                                <svg class="icon icon-wishlist" width="26" height="22"
                                                    viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a> -->

                                            <a href="product.php?pid=<?php echo $row['id'] ?>" class="action-card action-addtocart">
                                                <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                        fill="#00234D" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-card-details">
                                        <ul class="color-lists list-unstyled d-flex align-items-center">
                                            <li><a href="javascript:void(0)"
                                                    class="color-swatch swatch-black active"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-cyan"></a></li>
                                            <li><a href="javascript:void(0)" class="color-swatch swatch-purple"></a>
                                            </li>
                                        </ul>
                                        <h3 class="product-card-title">
                                            <!-- product name database se lekr aa rhe he -->
                                            <?php echo $row['product_name']?>
                                        </h3>
                                        <div class="product-card-price">
                                            <span class="card-price-regular"><i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $row['price']?></span>
                                            <span class="card-price-compare text-decoration-line-through"><i class="fa-solid fa-indian-rupee-sign"></i>1759</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                         }
                        ?>
                        </div>
                        
                        <!-- <div class="view-all text-center" data-aos="fade-up" data-aos-duration="700">
                            <a class="btn-primary" href="gallery.php">VIEW ALL</a>
                        </div> -->
                    </div>
                </div>
            </div>


    <?php
        include ("include/footer.php");
    ?>

            <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
</body>
</html>