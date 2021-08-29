<?php include("path.php"); ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- Font Awesome  https://fontawesome.com/kits/01fd25480c/use-->
  <script src="https://kit.fontawesome.com/01fd25480c.js" crossorigin="anonymous"></script>
  <!-- https://fontawesome.com/v5.15/icons/user-alt?style=solid -->
  
  <!-- Custom Styling -->
  <link rel="stylesheet" href="asset/css/style.css">
  
  <!-- Google Fonts https://fonts.google.com/specimen/Comfortaa?subset=cyrillic&category=Display-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <title>My blog</title>
</head>

<body>

<!-- header start -->
<?php include("app/include/header.php"); ?>
<!-- header end -->

<!-- block carousel start -->
<div class="container">
  <!-- https://getbootstrap.com/docs/5.1/components/carousel/ -->
  <div class="row">
    <h2 class="slider-title">Топ публикации</h2>
  </div>  
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/images/image_1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="#">First slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/images/image_2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="#">Second slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/images/2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="#">Third slide label</a></h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- block carousel end -->

<!-- block main start -->
<div class="container">
  <!-- https://getbootstrap.com/docs/5.1/examples/grid/ -->
  <div class="content row">
    <!-- Main Content -->
    <div class="main-content col-md-9 col-12">
      <h2>Последние публикации</h2>
      
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="asset/images/image_small.png" alt="" class="img-thumbnail">
        </div>
        <div class="post-text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта...</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aliquam amet officia ad sint quod repellat iure molestias nisi voluptas! Fugit et officiis architecto similique unde, iusto molestias laudantium magnam!
          </p>
        </div>
      </div>

      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="asset/images/image_small.png" alt="" class="img-thumbnail">
        </div>
        <div class="post-text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта...</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aliquam amet officia ad sint quod repellat iure molestias nisi voluptas! Fugit et officiis architecto similique unde, iusto molestias laudantium magnam!
          </p>
        </div>
      </div>

      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="asset/images/image_small.png" alt="" class="img-thumbnail">
        </div>
        <div class="post-text col-12 col-md-8">
          <h3>
            <a href="#">Прикольная статья на тему динамического сайта...</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae aliquam amet officia ad sint quod repellat iure molestias nisi voluptas! Fugit et officiis architecto similique unde, iusto molestias laudantium magnam!
          </p>
        </div>
      </div>
      
    </div>
      <!-- sidebar Content -->
    <div class="sidebar col-md-3 col-12">
      <div class="section search">
        <h3>Поиск</h3>
        <form action="/" method="post">
          <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
        </form>
      </div>

      <div class="section topics">
        <h3>Категории</h3>
        <ul>
          <li><a href="#">Программирование</a></li>
          <li><a href="#">Дизайн</a></li>
          <li><a href="#">Визуализация</a></li>
          <li><a href="#">Кейсы</a></li>
          <li><a href="#">Мотивация</a></li>
        </ul>
      </div>
    
    </div>
  
  </div>
</div>
<!-- block main end -->

<!-- footer start -->
<?php include("app/include/footer.php"); ?>
<!-- footer end -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
-->
</body>
</html>