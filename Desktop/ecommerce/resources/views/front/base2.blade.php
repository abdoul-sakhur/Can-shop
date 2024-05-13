<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAN-ESHOP | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
     <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap')}}"
        rel="stylesheet">
     <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css')}}" rel="stylesheet">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js')}}"></script>
    
   
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="frontend/images/canshop.png" alt="logo" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li><a href="{{route('front.products')}}">Produits</a></li>
                    <li><a href="{{route('front.about')}}">A propos</a></li>
                    <li><a href="{{route('front.contact')}}">Contact</a></li>
                    <li><a href="{{route('front.user')}}">Compte</a></li>
                </ul>
            </nav>
            <a href="{{route('front.cart')}}"><img src="frontend/images/cart.png" width="30px" height="30px"></a>
            @auth
            <p>{{Auth::user()->name}}</p>
            <form action="{{route('logout')}}" method="post">
                @csrf
                @method('delete')
                <button style="background: red; color:aliceblue; margin:5px" class="btn"> Se deconnecter </button>
            </form>
        @endauth
            <img src="frontend/images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>






@yield('content')


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Application mobile.</h3>
                    <p>Notre applications mobile est bientot disponible sur...</p>
                    <div class="app-logo">
                        <img src="{{asset('frontend/images/play-store.png')}}">
                        <img src="{{asset('frontend/images/app-store.png')}}">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{asset('frontend/images/canshop.png')}}">
                    <p>Notre objectif est de rendre durablement accessible à tous le plaisir, les bienfaits du sport, et les équipements sportifs.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Liens</h3>
                    <ul>
                        <li>Accueil</li>
                        <li>Produits</li>
                        <li>A propos de nous</li>
                        <li>Contact</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Suivez-nous sur</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2024 - Sarba Abdoul-sacourou</p>
        </div>
    </div>

    <!-- javascript -->
    <script>
        new TomSelect("#select-beast",{
        create: true,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>


<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px"
        }
        else {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>

<!-- Toggle Form -->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
    function register() {
        RegForm.style.transform = "translatex(0px)";
        LoginForm.style.transform = "translatex(0px)";
        Indicator.style.transform = "translateX(100px)";

    }
    function login() {
        RegForm.style.transform = "translatex(300px)";
        LoginForm.style.transform = "translatex(300px)";
        Indicator.style.transform = "translate(0px)";

    }
</script>


</body>

</html>