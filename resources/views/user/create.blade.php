@extends('layouts/navigation.bar', ['page' => 'utilisateur'])

@section('content')
@section('content')
    <form action="{{ Route('user.store') }}" method="post"
        >
        @csrf
        <div class="card" style="margin: 15px 15px 0px 15px;padding : 15px ;background-color :rgb(255, 255, 255); min-height: 38rem;">
            <legend class="label label-default" style="text-align: center; font-weight: bolder ;">CREATION D'UN NOUVEL
                UTILISATEUR</legend><br>
            <div>
                @if ($code == 'success')
                    @include('alerts.sucess', compact('message', 'message'));
                @elseif ($code == 'error')
                    @include('alerts.error', compact('message', 'message'));
                @endif
            </div>
            <div class="row">
                <div class="col-1 align-self-center"><label class="control-label lb " for="nom">Nom</label></div>
                <div class="col-7"><input class="form-control" type="text" name="name" value="{{old('name')}}" id="" required></div>
            </div><br>

            <div class="row">
                <div class="col-1"><label class="control-label lb  " for="email">E-mail</label></div>
                <div class="col-7">
                    <div class="col"><input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="" required value="{{old('email')}}">
                    </div>
                </div>
                <div class="col align-self-center">
                    @if ($errors->has('email'))
                        <span style="color: red;">L'email est invalide .</span>
                    @endif
                </div>
            </div><br>
            <div class="row">
                <div class="col-1 align-self-center"><label class="control-label " for="username">Username</label></div>
                <div class="col-4"><input class="form-control" type="text" name="username" id="" required value="{{old('username')}}"
                        placeholder="Entrer le nom d'utilisateur"></div>
            </div><br><br>
            <div class="row">
                {{-- <div class="col-1 align-self-center"><label class="control-label lb" for="password">{!! Form::password($name, [$options]) !!}</label></div> --}}
                <div class="col-1 align-self-center"><label class="control-label " for="password">Password</label></div>
                <div class="col-4"><input class="form-control black @error('password') is-invalid @enderror" type="password" name="password"
                        placeholder="Entrer le mot de passe" id="" required value="{{old('password')}}"></div>
                <div class="col-2 align-self-center text-align-right"><label class="control-label " for="password">Confirm
                        password</label></div>
                <div class="col-4"><input class="form-control black @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation"
                        placeholder="Confirmer le mot de passe" id="" required value="{{old('password_confirmation')}}"></div>
            </div>

            @if ($errors->has('password'))
                <div class="row">
                    <div class="col offset-md-1 align-self-center">

                        <span style="color: red;">le mot de passe doit contenir au moins 6 caractères .</span>

                    </div><br>
            @elseif ($errors->has('password_confirmation'))
                    <div class="row">
                        <div class="col offset-md-7 align-self-center">

                            <span style="color: red;">Vous devez entrer le même mot de passe .</span>

                        </div><br>
                    @else
                        <br>
            @endif
            <div class="row ">
                <div class="col-1 align-self-center">
                    <label class="control-label lb " for="">Role</label>
                </div>
                <div class="col-4 align-self-center ">
                    <select class="form-control black @error('role') is-invalid @enderror" name="role" id=" required" value="{{old('role')}}">
                        <option  disabled selected hidden value="default">Choisissez une fonction</option>
                        <option value="magasinier">Magasinier</option>
                        <option value="Admin">Administrateur</option>
                    </select>
                </div>

                <div class="col-2 text-align-right align-self-center ">
                    <label class="control-label lb" for="type">status </label>
                </div>
                <div class="col-2">
                    <select class="form-control black" name="status" id="" required value="{{old('status')}}">
                        <option value="1">Actif</option>
                        <option value="0">Bloqué</option>
                    </select>
                </div>
            </div>
            @if ($errors->has('role'))
                    <div class="row">
                        <div class="col offset-md-1 align-self-center">

                            <span style="color: red;">Vous devez choisir une fonction .</span>

                        </div><br>
                    </div>
            @endif
            @foreach ($errors as $error )
                    @include('alerts.error',compact('message',$error))
            @endforeach
            <br><br>
            <div class="row" style="">
                <div class="col offset-md-7"><input type="submit" class="bouton" value="Enregistrer"
                        style="background-color: rgb(35,38,106);color:#FFFF; "></div>
                <div class="col"><input type="reset" class="bouton" value="Tout vider"
                        style="background-color: rgb(35,38,106);color:#FFFF;"></div>
            </div>
    </form>
@endsection
