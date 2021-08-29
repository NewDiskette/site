<header class="container-fluid">
  <!-- https://getbootstrap.com/docs/5.1/layout/containers/ -->
    <div class="container">
        <div class="row">
            <div class="col-4">
              <!-- https://getbootstrap.com/docs/5.1/layout/columns/ -->
                  <h1>
                    <a href="<?php echo BASE_URL; ?>">My blog</a>
                  </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>">Главная</a></li>
                    <li><a href="<?php echo BASE_URL . '/about.php'; ?>">О нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#"><i class="fas fa-user-alt"></i>Кабинет</a>
                        <ul>
                            <li><a href="#">Админ панель</a></li>
                            <li><a href="#">Выход</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>              
    </div>
</header>