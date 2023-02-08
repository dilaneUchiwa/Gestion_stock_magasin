@extends('layouts/navigation.consultationbar', ['page' => 'utilisateur'])

@section('content')

        <div class="card" style="margin: 15px 15px 0px 15px;padding : 15px ; min-height: 35rem;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                                <div class="col text-align-center">
                                    <h4 class="card-title black">LISTE DES UTILISATEURS</h4>
                                </div>
                        </div>
                        <div class="card-body">
                            @if (session($key ?? 'status')) @include('alerts.sucess' , ['message'=>session($key ?? 'status')])
                            @endif
                            <div class="">
                                <table class="table tablesorter black" id="">
                                    <thead >
                                        <th>Numéro</th>
                                        <th>Nom</th>
                                        <th>email</th>
                                        <th>Username</th>
                                        <th>Mot de passe</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th class="text-align-center" >Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>user001</td>
                                                <td style="max-width: 15rem;" >{{ $user->name }}</td>
                                                <td>{{ $user->email }} </td>
                                                <td>{{ $user->username }}</td>
                                                {{-- <td>{{$user->poids}}</td> --}}
                                                <td  style="max-width: 16rem;">{{ $user->password }}</td>
                                                <td style="max-width: 18rem;">{{ $user->role}}</td>
                                                <td>status</td>
                                                {{-- <td>{{$user->categorie->nom}}</td> --}}
                                                <td class="td-actions text-right">
                                                    {{-- <a href="{{ route('user.show', $user->id_user) }}"
                                                        class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                        title="More Details">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a> --}}
                                                    <a href="{{ route('user.edit', $user->id) }}"
                                                        class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                        title="Modifier l'utilisateur">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('user.destroy', $user->id) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                            data-placement="bottom" title="Supprimer l'utilisateur"
                                                            onclick="confirm('Voulez-vus vraiment supprimer cette utilisateur') ? this.parentElement.submit() : ''" style="color: red ;">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

