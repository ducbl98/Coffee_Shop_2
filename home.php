<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Home Coffee Shop</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="public/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="public/carousel/carousel.css" rel="stylesheet">
</head>
<body>

<header>
    <!--  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">-->
    <!--    <a class="navbar-brand" href="#">Carousel</a>-->
    <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--      <span class="navbar-toggler-icon"></span>-->
    <!--    </button>-->
    <!--    <div class="collapse navbar-collapse" id="navbarCollapse">-->
    <!--      <ul class="navbar-nav mr-auto">-->
    <!--        <li class="nav-item active">-->
    <!--          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
    <!--        </li>-->
    <!--        <li class="nav-item">-->
    <!--          <a class="nav-link" href="#">Link</a>-->
    <!--        </li>-->
    <!--        <li class="nav-item">-->
    <!--          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--      <form class="form-inline mt-2 mt-md-0">-->
    <!--        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
    <!--        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    <!--      </form>-->
    <!--    </div>-->
    <!--  </nav>-->
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="public/uploads/pexels-kevin-menajang-982612.jpg"
                     class="img-fluid" alt="Responsive image" width="2700" height="2500">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Register now!</h1>
                        <p>Đăng ký thành viên để nhận nhiều ưu đãi.</p>
                        <p><a class="btn btn-lg btn-primary" href="resources/pages/register.php">Register today</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="public/uploads/pexels-nastyasensei-2575833.jpg" class="img-fluid" alt="Responsive image">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>About us</h1>
                        <p>CodeGym Việt Nam</p>
                        <p><a class="btn btn-lg btn-primary" href="https://codegym.vn/">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" src="public/uploads/musicfox-fx-dlUOxkgrofg-unsplash.jpg" alt="wallpaper">

                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Hackathon 2021</h1>
                        <p>Something</p>
                        <p><a class="btn btn-lg btn-primary" href="resources/pages/login.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                     src="public/uploads/iconfinder_1059392_coffee_beverage_cup_drink_grain_icon_512px.png" alt="icon">
                <h2>Management Beverage</h2>
                <p></p>
                <p><a class="btn btn-secondary" href="./index.php?page=beverages">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle"
                     width="140" height="140" src="public/uploads/iconfinder_7811660_confirm_order_purchase_buy_shipping_icon_256px.png" alt="icon">
                <h2>Management Order</h2>
                <p></p>
                <p><a class="btn btn-secondary" href="index.php?page=order&action=createOrder">View details &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                     src="public/uploads/iconfinder_3319634_bill_paper_receipt_sheet_icon_256px.png" alt="icon">
                <h2>Management Bill</h2>
                <p></p>
                <p><a class="btn btn-secondary" href="index.php?page=bill&pg=1">View details &raquo;</a></p>
            </div>
        </div>

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Management Beverage</h2>
                <h4><span class="text-muted">Mr. Le Duc</span></h4>
                <p class="lead">Chức năng quản lý đồ uống bao gồm: Thêm mới đồ uống, sửa thông tin sản phẩm, xóa sản phẩm, hiển thị
                    ảnh mô tả sản phẩm.</p>
            </div>
            <div class="col-md-5">
                <img src="public/uploads/rizky-subagja-IBhJivtPqHQ-unsplash.jpg" alt="img" width="500" height="500">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Management Order</h2>
                <h4><span class="text-muted">Mr. Phuong The Ngoc</span></h4>
                <p class="lead">Chức năng tiếp nhận đơn hàng bao gồm: Chọn đồ uống, thêm số lượng, hiển thị đồ uống.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="public/uploads/nathan-dumlao-pMW4jzELQCw-unsplash.jpg" alt="img" width="450" height="600">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Management Bill</h2>
                <h4><span class="text-muted">Mr. Dat Nguyen</span></h4>
                <p class="lead">Chức năng quản lý đơn hàng bao gồm: Hiển thị đơn hàng theo ngày, tuần, tháng, chi tiết đơn hàng,
                    thanh toán hóa đơn, tìm hóa đơn theo ngày giờ.</p>
            </div>
            <div class="col-md-5">
                <img src="public/uploads/descrip.jpeg" alt="img" width="334" height="500">
            </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Management Bill</h2>
                <h4><span class="text-muted">Mr. Cao Ngan</span></h4>
                <p class="lead">Chức năng quản lý đơn hàng bao gồm: Tìm kiếm đơn hàng.</p>
            </div>
            <div class="col-md-5">
                <img src="public/uploads/descrip.jpeg" alt="img" width="334" height="500">
            </div>
        </div>
        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; Since 2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="public/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
