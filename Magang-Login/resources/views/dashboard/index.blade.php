<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Staff_Gene_Creative</title>
  <!-- bootstrap 5 css -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
  />
  <style>
    li {
      list-style: none;
      margin: 20px 0 20px 0;
    }

    a {
      text-decoration: none;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      margin-left: -300px;
      transition: 0.4s;
    }

    .active-main-content {
      margin-left: 250px;
    }

    .active-sidebar {
      margin-left: 0;
    }

    #main-content {
      transition: 0.4s;
    }
  </style>
</head>
<body>
  <div>
    <div class="sidebar p-4 bg-primary" id="sidebar">
      <h4 class="mb-3 text-white">Welcome CEO</h4>
      <img class="Logo" style="width: 118px; height: 109px; border-radius: 9999px;" src="{{ asset('images/Logo_GeneCreative.JPEG') }}"/>
      <li>
        <a class="text-white" href="{{route('dashboard.index')}}"> 
          <i class="bi bi-house mr-2"></i>
          KPI Dashboard
        </a>
      </li>
      <li>
        <a class="text-white" href="{{ route('layouts.structure')}}">
          <i class="bi bi-people mr-2"></i>
          Company Structure
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-calendar mr-2"></i>
          Task Assign
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-newspaper mr-2"></i>
          News
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-clock mr-2"></i>
          Task Today
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-cash mr-2"></i>
          Finance
        </a>
      </li>
      <li>
        <a class="text-white" href="#">
          <i class="bi bi-globe mr-2"></i>
          Another Website
        </a>
      </li>
      <li>
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 bg-#f8f9fa border-0" ><i class="bi bi-bosx-arrow-fixed"></i> Logout</button>
        </form>
      </li>
    </div>
  </div>
  <section class="p-4" id="main-content">
    <button class="btn btn-primary" id="button-toggle">
      <i class="bi bi-list"></i>
    </button>
      <div class="container mt-5">
        <!-- Baris pertama dengan dua card di atas -->
        <div class="row">
          <div class="col-md-6 py-2 px-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">KPI Staff</h5>
                <p class="card-text">Menampilkan KPI Staff</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 py-2 px-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Task-Today</h5>
                <p class="card-text">menampilkan Task-Today</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Baris kedua dengan dua card di bawah -->
        <div class="row">
          <div class="col-md-6 py-5 px-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">News/Berita</h5>
                <p class="card-text">Menampilkan News/Berita</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 py-5 px-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tools</h5>
                <p class="card-text">Menampilkan Tools yang diperlukan</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  </section>

  
  <script>
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {
      // when the button-toggle is clicked, it will add/remove the active-sidebar class
      document.getElementById("sidebar").classList.toggle("active-sidebar");
      // when the button-toggle is clicked, it will add/remove the active-main-content class
      document.getElementById("main-content").classList.toggle("active-main-content");
    });
  </script>
</body>
</html>
