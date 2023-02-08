@extends('layouts/navigation.consultationbar', ['page' => 'categorie'])

@section('content')

        <div class="card" style="margin: 15px 15px 0px 15px;padding : 15px ; min-height: 35rem;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                                <div class="col text-align-center">
                                    <h4 class="card-title black">LISTE DES CATEGORIES DE PRODUITS</h4>
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
                                        <th class="text-align-center" >Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $cat)
                                            <tr>
                                                <td>{{$cat->id_categorie}}</td>
                                                <td>{{$cat->nom}}</td>
                                                {{-- <td>{{$produit->categorie->nom}}</td> --}}
                                                <td class="td-actions text-align-center">
                                                    {{-- <a href="{{ route('produit.show', $cat->id_categorie) }}"
                                                        class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                        title="More Details">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a> --}}
                                                    <a href="{{ route('categorie.edit', $cat->id_categorie) }}"
                                                        class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                        title="Modifier ">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('categorie.destroy', $cat->id_categorie ) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                            data-placement="bottom" title="Supprimer "
                                                            onclick="confirm('Voulez-vus vraiment supprimer cette gamme produit') ? this.parentElement.submit() : ''" style="color: red ;">
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
