<?php 
include("path.php");
include("app/controllers/users.php");
?>

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

<!-- https://getbootstrap.com/docs/5.1/forms/overview/ -->
<!-- https://getbootstrap.com/docs/5.1/forms/layout/ -->
<!-- https://getbootstrap.com/docs/5.1/layout/grid/ -->
<!-- form start -->
<div class="container reg-form">
    <form class="row justify-content-center" method="POST" action="reg.php">
    <h2>Форма регистрации</h2>
    <div class="mb-3 col-12 col-md-4 err">
        <p><?=$errMsg?></p>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
        <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="введите ваш логин...">
    </div>
    <!-- https://getbootstrap.com/docs/4.0/layout/grid/#column-breaks -->
    <!-- Force next columns to break to new line -->
    <div class="w-100"></div>
    
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
      <div id="emailHelp" class="form-text">Ваш email адрес не будет использован для спама!</div>
    </div>
    <div class="w-100"></div>
   
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
    </div>
    <div class="w-100"></div>

    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="повторите ваш пароль...">
    </div>
    <div class="w-100"></div>
    
    <div class="mb-3 col-12 col-md-4">
        <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
      <a href="<?php echo BASE_URL . 'log.php'; ?>">Вход</a>
    </div>
  </form>
</div>
<!-- form end -->

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