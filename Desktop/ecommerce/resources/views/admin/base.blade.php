
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
   
    <title>@yield('title') | Administration</title>

</head>
<body>
    <style>
        body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
    </style>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a
        
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
            href="{{route('dashboard')}}"
          >
            <i  class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
          </a>
          <a href="{{route('admin.category.index')}}" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>CATEGORIES</span>
          </a>
          <a href="{{route('admin.category.create')}}" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fa-solid fa-circle-plus"></i> <span>Ajouter categorie</span></a
          >
          <a href="{{route('admin.product.index')}}" class="list-group-item list-group-item-action py-2 ripple active"
            ><i class="fas fa-chart-line fa-fw me-3"></i><span>PRODUITS</span></a
          >
          <a href="{{route('admin.product.create')}}" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fa-solid fa-circle-plus"></i> <span>Ajouter un produit</span>
          </a>
          <a href="{{route('admin.slider.index')}}" class="list-group-item list-group-item-action py-2 ripple active"
            ><i class="fas fa-chart-bar fa-fw me-3"></i><span>SLIDERS</span></a
          >
          <a href="{{route('admin.slider.create')}}" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fa-solid fa-circle-plus"></i> <span>Ajouter un slider</span></a
          >
        
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
  

        <a class="navbar-brand fw-bold" href="#">
        CAN-SHOP
        </a>
       
        <form class="d-none d-md-flex input-group justify-content-center w-auto my-auto" method="get">
          <input
            autocomplete="off"
            type="search"
            class="form-control rounded"
            placeholder='Rechercher un produit '
            style="min-width: 225px;"
            name="title"
          />
          <button class="btn btn-primary">

            <i class="fas fa-search" ></i>
          </button>
        </form>
  
    
        <ul class="navbar-nav ms-auto d-flex flex-row">  
              
  
          <!-- Icon dropdown -->
         
        <div style="margin-right:50px;" class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Utilisateur
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Mon profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Parametre</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i> deconnexion</a></li>
              </ul>
          </div>
        
 
          <!-- Avatar -->
          <div class="container bg-dark rounded-circle" style="width: 50px; height:auto;"  >
            <img src="" class="img-fluid rounded bg-dark" alt="">
          </div>
         
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px;">
    <div class="container">
        
        @yield('content')
    </div>
  </main>
  <!--Main layout-->

  <script>
  new TomSelect("#select-state",{
	maxItems: 1
});
       </script>
  <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>