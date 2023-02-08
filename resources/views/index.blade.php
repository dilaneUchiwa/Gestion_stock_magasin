<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <script src="{{asset('assets/js/script.min.js')}}"></script>
    <script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script></head>
<style>
    .bouton{
        background: linear-gradient(#031c67 4%, rgb(36,57,123) 20%, rgb(60,79,137) 31%, rgb(98,113,160) 45%, rgb(205,210,225) 85%, white, rgb(99,113,160) 95%, rgb(103,117,163) 95%, rgb(107,121,165) 99%, rgb(206,211,225) 100%), rgb(112,115,174);border-radius: 20px;width :8rem;height: 3rem;font-weight: bold;
    }
    body{
        font-family: Arial, Helvetica, sans-serif;

    }
    label,select,input,textarea,legend,footer,option,.span{
        color: black;
    }
    .black{
        color:black;
    }
    .text-align-center{
        text-align: center;
    }
    .text-align-left{
        text-align: left;
    }
    .text-align-right{
        text-align: right;
    }
    .lb{
        margin-left:2rem ; width : 4rem;
    }
    .has-danger{
        border-block-color: red ;
    }
    .gras{
        font-weight: bold;
    }
</style>
<body id="page-top" style="    box-sizing: border-box;
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif,
    'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
">
    <div id="wrapper">
        <nav class="navbar navbar-light align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: linear-gradient(#031c67 4%, rgb(36,57,123) 20%, rgb(60,79,137) 31%, rgb(98,113,160) 45%, rgb(205,210,225) 85%, white, rgb(99,113,160) 95%, rgb(103,117,163) 95%, rgb(107,121,165) 99%, rgb(206,211,225) 100%), rgb(112,115,174);border-radius: 20px;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><span>MAGASIN</span>
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"></div>
                </a><br><br>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="{{Route('entree.create')}}" style="text-align: center;"><i class="far fa-hand-point-right"></i><span>Entrer produit<br></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{Route('sortie.create')}}" style="text-align: center;"><i class="far fa-hand-point-left"></i><span>Sortir produit<br></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#.html" style="text-align: center;"><i class="fas fa-table" style="text-align: center;"></i><span>Inter-magasin<br></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{Route('produit.index')}}" style="text-align: center;"><i class="far fa-clipboard" style="text-align: center;"></i><span>Consultation<br></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{Route('produit.create')}}" style="text-align: center;"><i class="fas fa-plus-circle"></i><span>Ajout d'un élément<br></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="text-align: center;">><i class="fas fa-align-right"></i><span>Réaliser l'inventaire<br></span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper" style="border-radius: 20px;">
            <div id="content" style="background: #ffffff;">
               <div style="background-color : rgb(237, 237, 245);">
                    @yield("section_principale")
                    @yield('content')
                    {{-- <div class="d-flex flex-column" id="content-wrapper">
                    </div> --}}
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Mai 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>

</body>

</html>
