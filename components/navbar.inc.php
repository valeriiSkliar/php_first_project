    <nav class="navbar bg-light fixed-top mb-5">
      <div class="container-fluid ">
        <a class="navbar-brand" href="#">Test project PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Test project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link" href="/admin">Admin panel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout">LogOut</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
                </a>
                <ul class="dropdown-menu">
                  <?php
                    $query = 'SELECT * FROM category';
                    $category = select($query);
                    foreach($category as $value){
                      $title = $value['title'];
                      $url = $value['url'];
                      echo "<li><a class='dropdown-item' href='/cat/{$url}'>{$title}</a></li>";
                    }
                  ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
