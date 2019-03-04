<?php 
    include_once("include/slider.php"); 
    include_once("include/detail.php");
    include_once("include/benefit.php");
    include_once("include/payment.php");
    include_once("include/register.php");
    include_once("include/file.php");
?>
<!DOCTYPE html>
<html>

<head>

    <?php include_once("include/title-favicon.php"); ?>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body class="kanit-font">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-uppercase">
        <a class="navbar-brand txt-font" href="index.php">
            <h1>COMCAMP </h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger " href="#about">เกี่ยวกับค่าย</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#benefit">ประโยชน์จากค่าย</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#photoset">ภาพกิจกรรม</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#register">ลงทะเบียน</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#payment">การชำระเงิน</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <button class="btn btn-outline-success my-2 my-sm-2" type='button' data-toggle="modal"
                        data-target="#popUpWindow" href="#" data-toggle="modal"
                        data-target="#login-modal">เข้าสู่ระบบ</button>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <header>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php echo $button_html; ?>
            </ol>
            <div class="carousel-inner" align="center" role="listbox">
                <?php echo $slider_html; ?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
            <ul class="thumbnails-carousel clearfix">
                <?php echo $thumb_html; ?>
            </ul>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h1>เกี่ยวกับค่าย</h1>
                    <hr>
                    <p class="lead"><?=$detailResult["Name"];?></p>

                </div>
                <div class="col-lg-6">
                    <img src="images/files-detail/<?=$detailResult["FilesName"];?>" width="540" height="350">
                </div>
            </div>
        </div>

    </section>

    <section id="benefit" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/files-benefit/<?=$benefitResult["FilesName"];?>" width="540" height="350">
                </div>
                <div class="col-lg-6">
                    <h1 align="right">ประโยชน์จากค่าย</h1>
                    <hr>
                    <p class="lead" align="right"><?=$benefitResult["Name"];?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="photoset">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1>ภาพกิจกรรม</h1>
                    <hr>
                    <?php include("show_album.php");?>
                </div>

            </div>
        </div>
    </section>

    <section id="register" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/files-register/<?=$registerResult["FilesName"];?>" width="540" height="350">
                </div>
                <div class="col-lg-6">
                    <h1 align="right">ลงทะเบียน</h1>
                    <hr>
                    <p class="lead" align="right"><?=$registerResult["Name"];?></p>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target=".bd-register-modal-lg">ลงทะเบียน</button>
                    <input class="btn btn-success" type="button" value="ประกาศรายชื่อผู้สมัคร"
                        onclick="window.location.href='user_announce.php';">
                    <br><br>
                    <h1 align="right">ดาวน์โหลด</h1>
                    <hr>
                    <p class="lead">
                        <a class="btn btn-outline-primary" target="_blank"
                            href="files/<?php echo $file1Result["FilesName"];?>">
                            <?php echo $file1Result["Name"];?>
                        </a>
                        <a class="btn btn-outline-primary" target="_blank"
                            href="files/<?php echo $file2Result["FilesName"];?>">
                            <?php echo $file2Result["Name"];?>
                        </a>
                        <a class="btn btn-outline-primary" target="_blank"
                            href="files/<?php echo $file3Result["FilesName"];?>">
                            <?php echo $file3Result["Name"];?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="payment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>การชำระเงิน</h1>
                    <hr>
                    <b>ชื่อบัญชี:</b>
                    <p class="lead"><?=$paymentResult["Name"];?></p>
                    <b>เลขที่บัญชี:</b>
                    <p class="lead"><?=$paymentResult["NoAccount"];?></p>
                    <b>ชื่อธนาคาร:</b>
                    <p class="lead"><?=$paymentResult["BankName"];?></p>
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <button class="btn btn-success my-2 my-sm-2" type='button' data-toggle="modal"
                                    data-target="#popUpWindow" href="#" data-toggle="modal"
                                    data-target="#login-modal">แจ้งหลักฐานการชำระเงิน</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="images/files-photoset/<?=$paymentResult["FilesName"];?>" width="540" height="350">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <h2 align="center"> <?=$paymentResult["Detail"];?></h2>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <!-- Footer -->
    <footer class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" align="left">
                    สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยแม่โจ้<br>
                    63 หมู่ 4 ตำบลหนองหาร อำเภอสันทราย จังหวัดเชียงใหม่ 50290
                </div>
                <div class="col-lg-6" align="right">
                    <div class="row">
                        <div class="col-lg" align="right">
                            รายละเอียดเพิ่มเติม<br>
                            053-873890-3<br>
                        </div>
                        <div >
                            <a href="https://www.facebook.com/comscience.mju">
                                <img src="images/icon/facebook.png" width="40" height="">
                            </a>
                            <a href="https://www.youtube.com/user/comscimaejo">
                                <img src="images/icon/youtube.png" width="40" height="">

                            </a>
                            <a href="http://csmju.jowave.com">
                                <img src="images/icon/dribbble.png" width="40" height="">
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="" align="">

        </div><br>
        <p class="m-0 text-center ">Copyright &copy; CS22-2019</p>
    </footer>

    <!-- Login Modal -->
    <?php include("user_login.php"); ?>

    <!-- Register modal -->
    <?php include("user_register.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/global.js"></script>
    <script src="js/age-calculate.js"></script>

</body>

</html>