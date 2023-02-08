@extends('layouts/navigation.bar', ['page' => 'produit'])

@section('content')
    <form action="{{ Route('produit.store') }}" method="post" onsubmit="return confirm('Voulez-vous vraiment creér le article')" >
        @csrf
        <div class="card"
            style="margin: 15px 15px 0px 15px;padding : 15px ;background-color :#FFFF;">
            <legend class="label label-default" style="text-align: center; font-weight: bolder ;">CREATION D'UN NOUVEL
                ARTICLE</legend><br>
            <div>
                @if ($code == 'success')
                    @include('alerts.sucess', compact('message', 'message'));
                @elseif ($code == 'error')
                    @include('alerts.error', compact('message', 'message'));
                @endif
            </div>
            <div class="row">
                <div class="col-1 align-self-center"><label class="control-label" for="nom">Désignation</label></div>
                <div class="col"><input class="form-control black" type="text" name="designation" id="" required value="{{old('nom')}}"></div>
            </div><br>

            <div class="row">
                <div class="col-1"><label class="control-label" for="description">Description</label></div>
                <div class="col">
                    <textarea class="form-control black" name="description" id="" cols="50" rows="3"  value="{{old('description')}}"></textarea>
                </div>
            </div><br>
            <div class="row align-self-start">
                <div class="col-1 align-self-center " style="margin-left:2rem; width : 4rem;">
                    <label class="control-label" for="prix">Prix</label>
                </div>
                <div class="col-3"><input class="form-control black @error('prix') is-invalid @enderror" type="number" name="prix" required value="{{old('prix')}}"/></div>
                <div class="col-3 align-self-center">
                    <div><span class="control-label span">{{ env('APP_DEVISE') }}</span></div>
                </div>
                <div class="col-1 align-self-center">
                    <label class="control-label" for="unite">Unité</label>
                </div>
                <div class="col-3">
                    <input class="form-control black @error('unite') is-invalid @enderror" type="number" name="unite" id="" required value="{{old('unite')}}">
                </div>
            </div><br>
            @if ($errors->has('prix'))
                    <div class="alert alert-danger">Le prix d'un article ne peut être inférieur à 0 .</div>
            @endif
            @if ($errors->has('unite'))
                    <div class="alert alert-danger">L'unité d'un article ne peut être inférieur à 0 .</div>
            @endif
             <div class="row align-self-start">
                <div class="col-1 align-self-center " style="margin-left:2rem; width : 4rem;">
                    <label class="control-label" for="poids">Poids</label>
                </div>
                <div class="col-3"><input class="form-control black @error('poids') is-invalid @enderror" type="number" name="poids" required value="{{old('poids')}}"/></div>
                <div class="col-1 align-self-center">
                    <label class="control-label" for="volume">Volume</label>
                </div>
                <div class="col-3">
                    <input class="form-control black @error('volume') is-invalid @enderror" type="number" name="volume" id="" required value="{{old('volume')}}">
                </div>
            </div><br>
            @if ($errors->has('poids'))
                    <div class="alert alert-danger">Le poids d'un article ne peut être inférieur à 0 .</div>
            @endif
            @if ($errors->has('volume'))
                    <div class="alert alert-danger">Le volume d'un article ne peut être inférieur à 0 .</div>
            @endif
            <div class="row ">
                <div class="col-1 align-self-center" style="margin-left:2rem; width : 4rem;">
                    <label class="control-label " for="">famille</label>
                </div>
                <div class="col align-self-center " >
                    <select class="form-control black black" name="id_famille" id="" required value="{{old('categorie')}}" >
                        @foreach ($familles as $cat)
                            <option value="{{ $cat->id_famille }}">{{ $cat->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1 align-self-center " style="margin-left:2rem; width : 4rem;">
                    <label class="control-label" for="type">Type </label>
                </div>
                <div class="col-4">
                    <input class="form-control black" type="text" name="type" id="" required value="{{old('type')}}">
                </div>
            </div><br>
            <div class="row">
                <div class="col-1 align-self-center " style="margin-left:2rem; width : 4rem;">
                    <label class="control-label" for="nature">Nature</label>
                </div>
                <div class="col-4">
                    <select class="form-control black" type="text" name="nature" id="" required value="{{old('nature')}}">
                        <option value="DURABLE">DURABLE</option>
                        <option value="NON DURABLE">NON DURABLE</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col offset-md-8"><input type="submit" class="bouton" value="Enregistrer"
                        style="background-color: rgb(35,38,106);color:#FFFF; "></div>
                <div class="col"><input type="reset" class="bouton" value="Tout vider"
                        style="background-color: rgb(35,38,106);color:#FFFF;"></div>
            </div>
        </div>
    </form>
@endsection
