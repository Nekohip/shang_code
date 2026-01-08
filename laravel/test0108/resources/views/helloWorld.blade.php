<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
    integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.bundle.min.js"
    integrity="sha512-HvOjJrdwNpDbkGJIG2ZNqDlVqMo77qbs4Me4cah0HoDrfhrbA+8SBlZn1KrvAQw7cILLPFJvdwIgphzQmMm+Pw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        #nav1 {
            max-height: 40px;
        }

        #nav2 {
            margin-top: 40px;
        }

        .box1, .box2 {
            width: 100%;
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .box2 {
            margin-top: 50px;
        }

        .carousel {
            margin-top: 95px;
        }

        #img-btn {
            margin-top: -110px;
            margin-right: 40px;
            width: 150px;
        }

        #container1 {
            height: 100vh;
            margin: auto;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .text {
            color: white;
            font-size: 40px;
            font-family:  "Noto Sans TC Light";
            display: flex;
            justify-content: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .text-name {
            color: white;
            font-size: 24px;
            font-family:  "Noto Sans TC Light";
            display: flex;
            justify-content: center;
            padding-top: 10px
        }

        .img-fluid {
            transition: all 0.5s ease;
        }

        .img-fluid:hover {
            box-shadow: 0 0 25px rgb(0, 255, 242);
            transform: scale(1.05);
        }

        #col {
            width:300px;
        }

        .row {
            width: 80%;
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="nav1">
        <div class="container-fluid con-logo justify-content-end">
            <a class="navbar-brand logo" href="#">SONY</a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-sm bg-white navbar-white fixed-top" id="nav2">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"><img src="../img/pslogo.png" width="40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- nav start -->
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Games</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">PS5</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">PS4</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Service</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Accesories</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">News</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Store</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Support</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>

                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-sort-by-attributes"></span>
                    </button>
                </ul>
            </div>
            <!-- nav end -->
        </div>
    </nav>
    <!-- carousel start -->
    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
        <!-- 指示物 -->
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" id="img-btn">
                <img src="../img/psstore1-l.png" class="d-block w-100" alt="thumbnail 1">
            </button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" id="img-btn">
                <img src="../img/psstore2-l.png" class="d-block w-100" alt="thumbnail 1">
            </button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" id="img-btn">
                <img src="../img/psstore3-l.png" class="d-block w-100" alt="thumbnail 1">
            </button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="3" id="img-btn">
                <img src="../img/psstore4-l.png" class="d-block w-100" alt="thumbnail 1">
            </button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="4" id="img-btn">
                <img src="../img/psstore5-l.png" class="d-block w-100" alt="thumbnail 1">
            </button>
        </div>
        <!-- 內容 -->
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/psstore1.png" alt="1" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/psstore2.png" alt="2" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/psstore3.png" alt="3" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/psstore4.png" alt="4" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/psstore5.png" alt="5" class="d-block" style="width:100%">
            </div>
        </div>
        
        <!-- 左右箭頭 -->
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
            <!-- <span class="carousel-control-prev-icon"></span> -->
            <img src="../img/arrow-l.png" alt="5" class="d-block" style="width:30%">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
            <!-- <span class="carousel-control-next-icon"></span> -->
             <img src="../img/arrow-r.png" alt="5" class="d-block" style="width:30%">
        </button>
    </div>
    <!-- carousel end -->
    <div class="container-fluid" id="container1">
        <div class="text"><span>現已推出的精彩PS4和PS5遊戲</span></div>
        <!-- row1 start -->
        <div class="row">
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box1">
                    <img class="img-fluid " src="../img/game1.png">
                </div>
                <div class="text-name"><span>LET IT DIE: INFERNO</span></div>
            </div>
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box1">
                    <img class="img-fluid" src="../img/game2.png">
                </div>
                <div class="text-name"><span>勇者鬥惡龍I & II HD-2D Remake</span></div>
            </div>
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box1">
                    <img class="img-fluid" src="../img/game3.png">
                </div>
                <div class="text-name"><span>無盡傳奇 Remastered</span></div>
            </div>
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box1">
                    <img class="img-fluid" src="../img/game4.png">
                </div>
                <div class="text-name"><span>從前從前有個塊魂</span></div>
            </div>
        </div>
        <!-- row1 end -->

        <!-- row2 start -->
        <div class="row">
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box2">
                    <img class="img-fluid" src="../img/game5.png">
                </div>
                <div class="text-name"><span>數碼寶貝物語 時空異客</span></div>
            </div>
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box2">
                    <img class="img-fluid" src="../img/game6.png">
                </div>
                <div class="text-name"><span>緋夜傳奇 Remastered</span></div>
            </div>
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box2">
                    <img class="img-fluid" src="../img/game7.png">
                </div>
                <div class="text-name"><span>羊蹄山戰鬼</span></div>
            </div>
            <div class="col-lg-3 col-sm-6" id="col">
                <div class="box2">
                    <img class="img-fluid" src="../img/game8.png">
                </div>
                <div class="text-name"><span>DEATH STRANDING 2: ON THE BEACH</span></div>
            </div>
        </div>
    </div>
    <!-- row2 end -->
</body>

</html>