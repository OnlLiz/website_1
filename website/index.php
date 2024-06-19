
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Онлайн-сервіс з продажу велосипедів Виконала: Каранфілова Є. А.  ІН-303</title>
    <!--підключення Bootstrap стилів-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    
</head>
<body>
    <!--навігаційна панель-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">ВелоСвіт</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Головна <span class="sr-only">(поточна)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакти</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--карусель -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/s1.webp" alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/s2.webp" alt="Второй слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/s3.webp" alt="Третий слайд">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"> </span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"> </span>
  </a>
</div>

    

    <!--головний контент -->
    <div class="container mt-5">
        <h1 class="text-center mb-5">Асортимент</h1>
        <div class="row">
            <div class="col-md-4">
                
                <div class="card">
                    <img src="https://veliki.com.ua/files/2022/08_13/16_26/u_files_store_37_258.jpg" class="card-img-top" alt=" 1">
                    <div class="card-body">
                        <h5 class="card-title">DISCOVERY TREK</h5>
                        <p class="card-text">ціна  7899  грн</p>
                        <a href="#" class="btn btn-primary">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
              
                <div class="card">
                    <img src="https://veliki.com.ua/files/2022/10_17/19_11/u_files_store_37_1158.jpg" class="card-img-top" alt="2">
                    <div class="card-body">
                        <h5 class="card-title">PRIDE MARVEL</h5>
                        <p class="card-text">ціна 14600 грн</p>
                        <a href="#" class="btn btn-primary">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
               
                <div class="card">
                    <img src="https://veliki.com.ua/files/2021/09_21/21_27/u_files_store_37_124.jpg" class="card-img-top" alt="3">
                    <div class="card-body">
                        <h5 class="card-title">MARIN KENTFIELD</h5>
                        <p class="card-text">ціна 18800 грн </p>
                        <a href="#" class="btn btn-primary">Детальніше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                
                <div class="card">
                    <img src="https://veliki.com.ua/files/2023/06_27/22_43/u_files_store_37_188.jpg" class="card-img-top" alt="4">
                    <div class="card-body">
                        <h5 class="card-title">GT AGGRESSOR SPORT</h5>
                        <p class="card-text">ціна 18760 грн</p>
                        <a href="#" class="btn btn-primary">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
              
                <div class="card">
                    <img src="https://veliki.com.ua/files/2019/10_29/12_23/u_files_store_0_2598842.jpg" class="card-img-top" alt="5">
                    <div class="card-body">
                        <h5 class="card-title">MARIN NICASIO+</h5>
                        <p class="card-text">ціна 33200 грн</p>
                        <a href="#" class="btn btn-primary">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
               
                <div class="card">
                    <img src="https://veliki.com.ua/files/2022/02_02/09_26/u_files_store_0_5389175.jpg" class="card-img-top" alt="6">
                    <div class="card-body">
                        <h5 class="card-title">PRIDE STELLA</h5>
                        <p class="card-text">ціна 133200 грн </p>
                        <a href="#" class="btn btn-primary">Детальніше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--футер-->
    <footer class="bg-primary text-light text-center text-lg-start mt-5 p-3">
        <div class="container">
            © 2024 ВелоСвіт. вул. Хрещатик 1 тел: +380888888888.
        </div>
    </footer>
    <!--підключення скриптів-->

    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
