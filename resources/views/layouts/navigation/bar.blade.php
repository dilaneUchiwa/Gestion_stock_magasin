@extends('index')
@section('section_principale')
<link rel="stylesheet" href="{{asset('assets/css/style_bar.css')}}">
<nav class="navbar navbar-expand-custom navbar-mainbg" style="background: linear-gradient(#031c67 4%, rgb(36,57,123) 20%, rgb(60,79,137) 31%, rgb(98,113,160) 45%, rgb(205,210,225) 85%, white, rgb(99,113,160) 95%, rgb(103,117,163) 95%, rgb(107,121,165) 99%, rgb(206,211,225) 100%), rgb(112,115,174);border-radius: 20px;">>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li  @if($page=='produit') class='nav-item active present' @else class="nav-item" @endif>
                    <a class="nav-link" href="{{Route('produit.create')}}"> Article</a>
                </li>
                <li  @if($page=='utilisateur') class='nav-item active present' @else class="nav-item" @endif>
                    <a class="nav-link" href="{{Route("user.create")}}">Utilisateur</a>
                </li>
                <li  @if($page=='famille') class='nav-item active present' @else class="nav-item" @endif>
                    <a class="nav-link " href="{{Route("famille.create")}}">Famille</a>
                </li>
                <li  @if($page=='categorie') class='nav-item active present' @else class="nav-item" @endif>
                    <a class="nav-link " href="{{Route("categorie.create")}}">Categorie</a>
                </li>
                <li  @if($page=='magasin') class='nav-item active present' @else class="nav-item" @endif>
                    <a class="nav-link " href="{{Route("magasin.create")}}">Magasin</a>
                </li>
            </ul>
        </div>
    </nav>
    <script id="rendered-js"  src="{{asset('assets/js/bar.js')}}"></script>

@endsection

