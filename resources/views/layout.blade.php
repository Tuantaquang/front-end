<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Homepage</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="{{asset('frontend/img/logo.png')}}" alt="logo"></a>
        
        <div class="collapse navbar-collapse justify-content-end" >
            <ul class="navbar-nav">
                <li class="nav-item">
                <form class="">
                    <input type="text">
                    <button><i class="bi bi-search"></i></button>
                </form>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" >
            <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-camera-video"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-bell"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">user</i></a>
            </li>
          </ul>
        </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid" >
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                <i class="bi bi-house-door-fill"></i>   Trang chủ
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="short"></span>
                <i class="bi bi-play-circle"></i>Short
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="sub"></span>
                <i class="bi bi-play-btn"></i> Kênh Đăng kí
              </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-person-square"></i> Kênh cua bạn
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-arrow-repeat"></i> video đã xem
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-clock"></i> xem sau
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-heart"></i> video đã thích
                </a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-heart"></i> video đã thích
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-heart"></i> video đã thích
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-heart"></i> video đã thích
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="sub"></span>
                  <i class="bi bi-heart"></i> video đã thích
                </a>
              </li>
          </ul>
        </div>
      </nav>

    <main role="main" class="col-md-10 ml-sm-auto px-4">
        <h1>Hello</h1>
    </main>
    <footer>
        <!-- place footer here -->
      </footer>
      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    
    </html>