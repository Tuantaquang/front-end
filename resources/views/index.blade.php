<!doctype html>
<html lang="en">

<head>
  <title>YouTube</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <header>
    <!-- navbar start -->
    @include('navbar')
    <!-- navbar end -->
    
  </header>

  <main>
    <div class="container-fuild">
        <div class="row">
            <div class="col-sm-2">
                <!-- sidebar start -->
                    @include('sidebar')
                <!-- sidebar end -->
            </div>
            
            <div class="col-sm-10">
                <!-- main content start -->
                @include('maincontent')
                <!-- main content end -->
            </div>
        </div>
    </div>
   
    
  </main>

  <footer>
    <!-- place footer here -->
  </footer>

  <script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("hidden");
    }
</script>
  <!-- Bootstrap JavaScript Libraries -->

  <script src="{{asset('frontend')}}/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>