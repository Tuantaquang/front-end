<!-- navbar start -->
<nav class="navbar-fuild navbar-expand-lg navbar-expand-md  navbar-light bg-white">
    <div class="container-fuild container-expand-lg container-expand-md">
        <div class="row">
            <div class="col col-lg-2 col-md-3" id="start">
                <button 
                class="btn fs-4" 
                type="button" 
                onclick="toggleSidebar()"
                id="sidebar-toggle">
                <i class="bi bi-list"></i>
                </button>
                <a class="navbar-brand fs-5 ms-3" href="#" title="trang chủ youtube">
                    <img id="logo" src="{{asset('frontend')}}/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="col col-lg-8 col-md-6" id="center">
                <div class="collapse navbar-collapse justify-content-center nvabar-md navabar-sm" id="navbarSupportedContent">
                    <div class="search">
                        <div class="row">
                            <div class="col col-11">
                                <form class="d-flex">
                                    <div class="input-group input-group-sm mb-3" style="height: 40px;">
                                        <input 
                                            style="border-top-left-radius: 25rem; border-bottom-left-radius: 25rem;"
                                            type="text" 
                                            class="form-control" 
                                            aria-label="Tìm kiếm" 
                                            aria-describedby="inputGroup-sizing-sm"
                                            placeholder="Tìm kiếm"
                                        >
                                        <button 
                                            style="width: 60px;border-top-right-radius: 25rem; border-bottom-right-radius: 25rem;"
                                            class="btn btn-outline-secondary" 
                                            type="button" 
                                            id="button-addon2"
                                            ><i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col col-1" id="mic">
                                <i class="bi bi-mic-fill fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-lg-2 col-md-3 text-center" id="end">
                <div class="navbar-nav ml-auto ms-5">
                    <a class="nav-link" aria-current="page" href="#" id="hide">
                        <i class="bi bi-camera-video-fill fs-5 ms-1"></i>
                    </a>
                    <a class="nav-link ms-3" href="#" >
                        <a class="nav-link ms-3" href="#" id="hide">
                        <i class="bi bi-bell fs-5 ms-1"></i>
                    </a>
                    <div class="nav-item dropdown ms-3" id="user">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-5 ms-1"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- navbar end -->