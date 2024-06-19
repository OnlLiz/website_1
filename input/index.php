<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Онлайн-сервіс продажі велосипедів Виконала: Каранфілова Є. А. ІН-303</title>
    <!-- підключення Bootstrap -->
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
    

       <!-- головний контент -->
    <div class="container mt-5">
        <h1 class="text-center mb-5">Асортимент</h1>
        <div class="row">
            <?php
                include("form/con_bd.php");
                $resultm = mysqli_query($link, "SELECT * FROM bike_info");
                if ($resultm) {
                    while ($myrowd = mysqli_fetch_array($resultm)) {
                        echo '<div class="col-md-4 mb-4"> <div class="card h-100"> <img src="' . $myrowd["img_url"] . '" class="card-img-top img-fixed" alt="..."> <div class="card-body"> 
                            <h5 class="card-title">' . $myrowd["name"] . '</h5>
                            <p class="card-text"><h5>' . $myrowd["price"] . ' грн</h5></p>
                            <p class="card-text"><h5>' . $myrowd["type"] . '</h5></p>
                            <a href="#" class="btn btn-primary">Детальніше</a>
                                    </div> </div> </div>';
                    }
                }
            ?>
        </div>
    </div>

    <!-- форма -->


    <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3 class="text-center"><strong>Ми зв'яжемось з вами</strong></h3>
            <form id="contact_form" enctype="multipart/form-data">
                <div class="field-wrapper">
               <div class="form-row col-md-6 col-sm-12">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Ваше Ім'я" />                  
                </div>
                <div class="form-group has-feedback">  
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ваш Email " />                  
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Ваш телефон" />                 
                </div>
               </div>
               <div class="form-row col-md-6 col-sm-12">
                <div class="form-group has-feedback">
                   <textarea cols="60" rows="3" id="comment" name="comment" class="form-control" 
                   placeholder="Що вас цікавить?"></textarea>                  
                </div>   
               </div>
               <div class="clear"></div>
               <div class="form-row  col-md-12">
                <h3 class="text-center">
                 <div id="error" class="text-center" style="color: #ff0000; "></div>
                </h3>
               </div>
               <div class="form-row  col-md-12">                
                 <!-- Кнопка, що відправляє форму по AJAX -->  
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Відправити</button>
                </div>
               </div>
             </div>
            </form>
        </div>
    </div>
</div>

<!--футер-->
    <footer class="bg-primary text-light text-center text-lg-start mt-5 p-3">
        <div class="container">
            © 2024 ВелоСвіт. вул. Хрещатик 1 тел: +380888888888.
        </div>
    </footer>


    <!--скрипти-->
    <script src="js/bootstrap.min.js"></script>
    <!--бібліотека jquery-->
    <script src="js/jquery.min.js"></script>
    <!--скрипт запиту разом з Ajax-->
    <script src="js/zapyt.js"></script>
</body>

    
</html>
