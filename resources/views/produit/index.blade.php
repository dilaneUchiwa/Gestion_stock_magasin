@extends('layouts/navigation.consultationbar', ['page' => 'produit'])

@section('content')
    <div class="card" style="margin: 15px 15px 0px 15px;padding : 15px ; min-height: 35rem;">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="col text-align-center">
                            <h4 class="card-title black">LISTE DES ARTICLES</h4><br>
                        </div>
                        <div>


                            <div class="animated--grow-in border-1 small" aria-labelledby="searchDropdown" style="width: 25%;">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light black form-control border-0 small"
                                            type="text" placeholder="Entrer le nom du produit à rechercher" style="height: 30px;">
                                        <div class="input-group-append"><button  class="btn btn-primary py-0"
                                                type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                            <button type="button" id="open" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#transactionModal">
                                test
                            </button>
                        </div>

                    </div>
                    <div class="card-body">
                        @if (session($key ?? 'status'))
                            @include('alerts.sucess', ['message' => session($key ?? 'status')])
                        @endif
                        <div class="">
                            <table class="table tablesorter black" id="">
                                <thead>
                                    <th>Code</th>
                                    <th>Désignation</th>
                                    <th>Prix</th>
                                    <th>Poids</th>
                                    <th>Volume</th>
                                    <th>Description</th>
                                    <th>Famille</th>
                                    <th class="text-align-center">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($produits as $produit)
                                        <tr>

                                            <td>{{ $produit->id_produit }}</td>
                                            <td style="max-width: 15rem;">{{ $produit->designation }}</td>
                                            <td>{{ $produit->prix }} {{ env('APP_DEVISE') }} </td>
                                            <td>{{ $produit->poids }}</td>
                                            {{-- <td>{{$produit->poids}}</td> --}}
                                            <td>{{ $produit->volume }}</td>
                                            <td style="max-width: 18rem;">{{ $produit->description }}</td>
                                            <td>{{ $produit->id_famille }}</td>
                                            <td class="td-actions text-right">
                                                {{-- <a href="{{ route('produit.show', $produit->id_produit) }}"
                                                        class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                        title="More Details">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a> --}}
                                                <a href="{{ route('produit.edit', $produit->id_produit) }}"
                                                    class="btn btn-link" data-toggle="tooltip" data-placement="bottom"
                                                    title="Modifier le produit">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <form action="{{ route('produit.destroy', $produit->id_produit) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-link" data-toggle="tooltip"
                                                        data-placement="bottom" title="Supprimer le produit"
                                                        onclick="confirm('Voulez-vus vraiment supprimer ce produit') ? this.parentElement.submit() : ''"
                                                        style="color: red ;">
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
    <div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="transactionModal"
        aria-hidden="true" style="margin-top:10%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header align-self-end" style="max-height: 20px;">
                    <button  2px;" type="button" class="btn btn-link closemodal" data-toggle="tooltip" data-placement="bottom"
                        style="color: red ; ">
                        <i class="fas fa-times"></i>
                    </button>

                </div>
                <div class="modal-body align-self-center" style="max-height: 20px;">
                    <div class="d-flex justify-content-between">
                        <p>Etes-vous sur de vouloir supprimer cet élément</p>
                    </div>
                </div>
                <div class="modal-footer align-self-end">
                    <input type="button" value="Ok">
                    <input type="button" value="Annuler">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#open').click(function() {
                $('.modal').modal('show')
            })
            $('.closemodal').click(function() {
                $('.modal').modal('hide')
            })
        })
    </script>
@endsection
