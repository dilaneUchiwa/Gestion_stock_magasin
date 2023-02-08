@extends('layouts/navigation.consultationbar', ['page' => 'magasin'])

@section('content')

        <div class="card" style="margin: 15px 15px 0px 15px;padding : 15px ; min-height: 35rem;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                                <div class="col text-align-center">
                                    <h4 class="card-title black">LISTE DES MAGASINS</h4>
                                </div>
                        </div>
                        <div class="card-body">
                            @if (session($key ?? 'status')) @include('alerts.sucess' , ['message'=>session($key ?? 'status')])
                            @endif

                            <div class="">
                                <table class="table tablesorter black" id="">
                                    <thead >
                                        <th>Code</th>
                                        <th>Nom</th>
                                        <th>agence</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($magasins as $magasin)
                                            <tr>
                                                <td>{{$magasin->id_magasin}}</td>
                                                <td>{{$magasin->nom}}</td>
                                                <td>{{$magasin->agence}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </iframe>
@endsection
