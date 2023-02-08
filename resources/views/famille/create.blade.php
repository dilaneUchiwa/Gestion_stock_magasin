@extends('layouts/navigation/bar', ['page' => 'famille'])

@section('content')
    <form action="{{ Route('famille.store') }}" method="post">
        @csrf
        <div class="card"
            style="margin: 15px 15px 0px 15px;padding : 15px ;background-color :rgb(255, 255, 255); min-height: 38rem;">
            <legend class="label label-default" style="text-align: center; font-weight: bolder ;">CREATION D'UN NOUVELLE
                FAMILLE DE PRODUITS</legend><br><br>
            <div>
                @if ($code == 'success')
                    @include('alerts.sucess', compact('message', 'message'));
                @elseif ($code == 'error')
                    @include('alerts.error', compact('message', 'message'));
                @endif
            </div>
            <div class="row align-self-center">
                <label class="control-label" style="" for="nom">Nom</label>
            </div>
            <div class="row">
                <input class="form-control text-align-center black" type="text" autofocus name="nom" id="" placeholder="Veuillez entrer le nom de la famille " required>
            </div><br>
            <div class="row align-self-center">
                <label class="control-label" style="" for="nom">Categorie</label>
            </div>
            <div class="row">
                <select class="form-control text-align-center black" type="text" autofocus name="id_categorie" id="" required>
                    @foreach ($categories as $cat)
                            <option value={{$cat->id_categorie}} >{{ $cat->nom}}</option>
                    @endforeach
                </select>
            </div><br><br>
            <div class="row align-self-center" style="">
                <div class="col "><input type="submit" class="bouton" value="Enregistrer"
                        style="color:#FFFF; "></div>
            </div>
        </div>
    </form>
    @endsection
