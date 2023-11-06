<!doctype html>
<html lang="en">

<head>
  <title>
    Youtube
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <!-- place navbar here -->
    <div class="container-fluid text-center" style="height: 50px;">
      <div class="row">
        <div class="col-md-2 mb-3 text-start">
          <div class="row">
            <div class="col-md-3 mt-3 text-end">
              <a href="#sidebar" class="d-block mt-1" data-bs-togger="offcanvas" role="button" aria-controls="sidebar">
                <i class="fa-solid fa-bars fa-lg" ></i>
              </a>
            </div>
            <div class="col-md-9 mb-2">
              <img style="width: 80px; height: 40;" class="img-fluid" src="{{asset('frontend/img/logo1.jpg')}}" alt="logo">
            </div>
          </div>
        </div>

        <div class="col-md-8 mt-3">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="từ khoá tìm kiếm">
                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
              </div>
            </div>
          </div>
          
        </div>

        <div class="col-md-2 mt-3">
          <div class="row justify-content-start">
            <div class="col-md-8 offset-md-2 mt-1">
              <a class="mx-2" href=""><i class="fa-solid fa-video fa-lg"></i></a>
              <a class="mx-2" href=""><i class="fa-regular fa-bell fa-lg"></i></a>
              <a href=""><i class="fa-regular fa-user fa-lg"></i></i></span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </header>

  

  <main>
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-md-2 me-4">
          <section class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 270px; height: 800px; overflow-y: auto;">
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="#" class="nav-link active" aria-current="page" title="trang chủ">
                    <i class="bi bi-house"></i>
                    <span class="mx-3">Trang chủ</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-file-play"></i>
                    <span class="mx-3">Shorts</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark" title="kênh đăng kí">
                    <i class="bi bi-collection-play"></i>
                    <span class="mx-3">Kênh đăng kí</span>
                  </a>
                </li>
                <hr>
                  <a href="#" class="link-dark fw-bold text-decoration-none">
                    Bạn
                  </a>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-person-video"></i>
                    <span class="mx-3">Kênh của Bạn</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span class="mx-3">Video đã xem</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-play-btn"></i>
                    <span class="mx-3">Video của bạn</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="fa-regular fa-clock"></i>
                    <span class="mx-3">Xem sau</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="fa-regular fa-thumbs-up"></i>
                     <span class="mx-3">Video thích</span>
                  </a>
                </li>
                <hr>
                <a href="#" class="link-dark fw-bold text-decoration-none">
                  Kênh đăng kí
                </a>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <img class="rounded-circle" style="height: 30px; width: 30px;" src="{{asset('frontend/img/logomixi.png')}}" alt="">
                    <span class="mx-3">Mixi</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <img class="rounded-circle" style="height: 30px; width: 30px;" src="{{asset('frontend/img/logomixi.png')}}" alt="">
                    <span class="mx-3">Mixi</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <img class="rounded-circle" style="height: 30px; width: 30px;" src="{{asset('frontend/img/logomixi.png')}}" alt="">
                    <span class="mx-3">Mixi</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <img class="rounded-circle" style="height: 30px; width: 30px;" src="{{asset('frontend/img/logomixi.png')}}" alt="">
                    <span class="mx-3">Mixi</span>
                  </a>
                </li>
                <hr>
                <a href="#" class="link-dark fw-bold text-decoration-none">
                  Khám phá
                </a>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-fire"></i>
                    <span class="mx-3">Thịnh hành</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-music-note"></i>
                    <span class="mx-3">Âm nhạc</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-controller"></i>
                    <span class="mx-3">Trò choi</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-newspaper"></i>
                    <span class="mx-3">Tin tức</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-trophy"></i>
                    <span class="mx-3">Thể thao</span>
                  </a>
                </li>
                <hr>

                <a href="#" class="link-dark fw-bold text-decoration-none">
                  Dịch vụ khác của youtube
                </a>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="fa-brands fa-youtube"></i>
                    <span class="mx-3">Youtube Premium</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-nut-fill"></i>
                    <span class="mx-3">Youtube Studio</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="fa-regular fa-circle-play"></i> 
                    <span class="mx-3">Youtube Music</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="fa-solid fa-otter"></i>
                    <span class="mx-3">Youtube Kids</span>
                  </a>
                </li>

                <hr>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-gear"></i>
                    <span>Cài đặt</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-flag"></i>
                    <span class="mx-3">Nhật kí báo cáo</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-question-circle"></i>
                    <span class="mx-3">Trợ giúp</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link link-dark">
                    <i class="bi bi-exclamation-square"></i>
                    <span class="mx-3">Phản hồi</span>
                  </a>
                </li>
              </ul>
          </section>
        </div>

        <div class="col-md">
          <section class="nav-bar">
            <div class="container-fluid">
              <a href="#" class="btn btn-dark mx-2">Tất cả</a>
              <a href="#" class="btn btn-dark mx-2">Trò chơi</a>
              <a href="#" class="btn btn-dark mx-2">Âm nhạc</a>
              <a href="#" class="btn btn-dark mx-2">Trực tiếp</a>
              <a href="#" class="btn btn-dark mx-2">nấu ăn</a>
              <a href="#" class="btn btn-dark mx-2">bóng đá</a>
              <a href="#" class="btn btn-dark mx-2">đã xem</a>
              <a href="#" class="btn btn-dark mx-2">Trò chơi</a>
              <a href="#" class="btn btn-dark mx-2">Âm nhạc</a>
              <a href="#" class="btn btn-dark mx-2">Trực tiếp</a>
              <a href="#" class="btn btn-dark mx-2">nấu ăn</a>
            </div>
              <hr>

            <div class="container-fluid" >
              <div class="row">
                <div class="col-lg-12">
                  <!-- Phần video chính -->
                  <div class="row mb-5">
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>

            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <!-- Phần video chính -->
                  <div class="row mb-5">
                    <div class="col-2 mx-3">
                      <div class="embed-responsive embed-responsive-9by16">
                        <iframe style="border-radius: 5%;width: 220px;height: 400px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div>ten shorts</div>
                      </div>
                    </div>
                    <div class="col-2 mx-3">
                      <div class="embed-responsive embed-responsive-9by16">
                        <iframe style="border-radius: 5%;width: 220px;height: 400px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div>ten shorts</div>
                      </div>
                    </div>
                    <div class="col-2 mx-3">
                      <div class="embed-responsive embed-responsive-9by16">
                        <iframe style="border-radius: 5%;width: 220px;height: 400px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div>ten shorts</div>
                      </div>
                    </div>

                    <div class="col-2 mx-3">
                      <div class="embed-responsive embed-responsive-9by16">
                        <iframe style="border-radius: 5%;width: 220px;height: 400px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div>ten shorts</div>
                      </div>
                    </div>

                    <div class="col-2 mx-3">
                      <div class="embed-responsive embed-responsive-9by16">
                        <iframe style="border-radius: 5%;width: 220px;height: 400px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div>ten shorts</div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <hr>

            <div class="container-fluid" >
              <div class="row">
                <div class="col-lg-12">
                  <!-- Phần video chính -->
                  <div class="row mb-5">
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe style="border-radius: 5%;width: 390px;height: 224px;" class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
                        <div class="row">
                          <div class="col-3">
                            <img src="" alt="logo">
                          </div>
                          <div class="col-9">
                            <div>ten phim</div>
                            <div>tgian phim</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>
      
          <section class="main-content">
      
          </section>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZmdKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  
</body>

</html>