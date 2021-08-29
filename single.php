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

<!-- block main start -->
<div class="container">
  <!-- https://getbootstrap.com/docs/5.1/examples/grid/ -->
  <div class="content row">
    <!-- Main Content -->
    <div class="main-content col-md-9 col-12">
      <h2>Заголовок Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis excepturi ex recusandae neque sed atque quaerat assumenda rem animi est. Neque accusamus quaerat nulla. Perferendis asperiores dicta expedita aliquid hic?</h2>
      
      <div class="single-post row">
        <div class="img col-12">
          <img src="asset/images/image_1.png" alt="" class="img-thumbnail">
        </div>
        <div class="info">
            <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
        </div>
        <div class="single-post-text col-12">
          <h3>Заголовок третьего уровня</h3>

            <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipisicing elit. Aperiam, magni sunt, necessitatibus ea veniam perspiciatis, voluptatibus corrupti corporis accusantium natus animi magnam saepe nobis. Minus expedita nostrum laboriosam qui quas.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, eveniet rerum itaque aspernatur, sit placeat perspiciatis ipsa soluta fugiat, reprehenderit veritatis corrupti mollitia vitae blanditiis. Commodi eveniet quaerat nam non.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore tenetur sequi veniam esse recusandae quae. Aliquam ab quae culpa inventore, velit nulla hic itaque, commodi possimus eaque laborum quidem rerum?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id cumque consectetur labore, tenetur inventore, autem, recusandae natus voluptatum blanditiis rerum ab dignissimos magni mollitia deserunt ratione dolores qui. Molestias, voluptates.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas beatae officiis voluptates, ipsum fugit eius perspiciatis qui, vel laboriosam adipisci mollitia velit impedit magnam tempore, ea numquam eum repudiandae in?</p>

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