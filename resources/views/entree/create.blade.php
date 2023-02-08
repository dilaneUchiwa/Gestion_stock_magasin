@extends('index')
@section('section_principale')
    <script>
        var numero = 1
    </script>
    <div style="  background-color : rgb(237, 237, 245);">
        <div style="width:40%; margin:auto;">
            <marquee>
                <p class="label  label-default" style="text-align: center; font-weight :bold;Font-size:X-large; color: red;">
                    Faire entrer
                    les produits au magasin</p>
            </marquee>
        </div>
        <div class="card" style="margin: 0px 15px 0px 15px;padding : 5px 15px 15px 15px; background-color : rgb(211, 211, 211);">
            <span class="label black " style="font-size:18px; float:right;margin-left:2rem;font-style:italic; ">AJOUT D'UN ARTICLE</span>
            <div>
                <form action="{{ Route('add_entree_ligne') }}" method=post>
                    @csrf
                    <div class="row" style="margin-right: 0px">
                        <div class="col-3">
                            <label class="control-label " for="produit">Recherche</label>
                            <div class="animated--grow-in border-1 small" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light black form-control border-0 small"
                                            type="text" placeholder="Entrer le nom du produit à rechercher"
                                            style="height: 30px;">
                                        <div class="input-group-append"><button class="btn btn-primary py-0"
                                                type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="control-label " for="produit">Article</label>
                            <select class="form-control black" name="produit" id="choice" style="">
                                @foreach ($produits as $produit)
                                    <option
                                        value="{{ $produit->id_produit . '#' . $produit->designation . '#' . $produit->description }}">
                                        {{ $produit->designation }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-4" style="width: 250px;">
                            <label class="control-label " for="quantite">Quantité</label>
                            <input class="form-control black @error('quantite') is-invalid @enderror"" type=" number"
                                name="quantite" class="" id="quantite" required>
                            </select>
                        </div>
                        <input type="hidden" name="id_produit" id="id_produit" value="{{$produits[0]->id_produit}}">
                        <input type="hidden" name="designation" id="designation"  value="{{$produits[0]->designation}}">
                        <div class="col">
                            <br>
                            <input class="form-control  btn btn-primary bouton" type="submit" value="Ajouter" id="Add_item"
                                disabled
                                style="background: linear-gradient(#031c67 4%, rgb(36,57,123) 20%, rgb(60,79,137) 31%, rgb(98,113,160) 45%, rgb(205,210,225) 85%, white, rgb(99,113,160) 95%, rgb(103,117,163) 95%, rgb(107,121,165) 99%, rgb(206,211,225) 100%), rgb(112,115,174);border-radius: 20px;width: 120px;">
                        </div>
                    </div>
                    @if ($errors->has('quantite'))
                        <div class="row">
                            <div class="col offset-md-6 align-self-center">

                                <span style="color: red;">le quantité doit etre superieur à 0 .</span>

                            </div><br>
                        @else
                            <br>
                    @endif
                    <label for="description">Description :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="black" id='span'>{{$produits[0]->description}}</span>
                </form>
            </div>
        </div>


        <div class="card d-flex flex-column" style="margin: 10px 15px 15px 15px;padding : 10px 15px 15px 15px ;min-height: 28rem;background-color : rgb(211, 211, 211);">
            @if (count(session('panier')) != 0)
            <div class="row">
            <div class="col-2 " ><span class="label black " style="font-size:18px; float:right;font-style:italic;">LISTE D'ARTICLES</span></div>
                <div class="col-2 offset-md-7">
                    <span class="black">Nombre d'article :</span>
                </div>
                <div class="col-1">
                    <span class="black">{{count(session('panier'))}}</span>
                </div>


        </div>
            <form method="post" action="{{ Route('entree.store') }}">
                @csrf
                <div class="table-responsive" style="text-align : center ;">
                    <table class="table tablesorter black"">
                            <thead>
                                <tr>
                                    <th style="max-width: 1rem;">Numero</th>
                                    <th>Désignation</th>
                                    <th>Quantité</th>
                                    <th style="max-width: 1rem;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $numero = 1; ?>
                                 @foreach (session('panier') as $produit)
                        <tr>
                            <td>{{ $numero }}</td>
                            <td>{{ $produit['designation'] }}</td>
                            <td>{{ $produit['quantite'] }}</td>
                            <td>
                                <a href="{{ route('remove_entree_ligne', $produit['id_produit']) }}"
                                    class="btn btn-link" data-toggle="tooltip" data-placement="top"
                                    title="supprimer la ligne" style="color: red ;">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>

                        </tr>
                        <?php $numero++; ?>
                        @endforeach
                        </tbody>

                    </table>

                </div>
                <div class="row gras" >
                    <div class="col-2 offset-md-9">
                        <span class="black">Nombre d'article :</span>
                    </div>
                    <div class="col-1">
                        <span class="black">{{$numero-1}}</span>
                    </div>
                </div>

                <input type="hidden" name="valeur" id="valeur">
                <input class="btn btn-primary" type="submit" value="Valider"
                    style="background: linear-gradient(#031c67 4%, rgb(36,57,123) 20%, rgb(60,79,137) 31%, rgb(98,113,160) 45%, rgb(205,210,225) 85%, white, rgb(99,113,160) 95%, rgb(103,117,163) 95%, rgb(107,121,165) 99%, rgb(206,211,225) 100%), rgb(112,115,174);border-radius: 20px;width: 120px ;position: fixed ; bottom : 50px; Right : 100px;">
            </form>
            @else
            
                <p class="black" style="margin:auto;border : 2px dotted ;padding :5rem ;">Vide pour l'instant</p>
            
        @endif
        </div>

    </div>
    <script>
        $("#Add_item").on('click', function() {
            var val = $(this).parents().find('#choice').val().split('#');
            $(this).parents().parents().parents().find('tbody').append("<tr><td>" + numero + "</td><td>" + val[1] +
                "</td><td>" + $(this).parents().find('#quantite').val() + "</td></tr>");
            numero = numero + 1;
            val.push($(this).parents().find('#quantite').val());
            // $(this).parents().find('#quantite').val(null);
            // $(this).attr('disabled', 'disabled');
            $(this).parents().parents().parents().find('#valeur').val(val);
        });
        $("#choice").on('change', function() {
            $(this).parents().find('#span').html($(this).val().split('#').pop());
            $(this).parents().parents().find('#id_produit').val($(this).val().split('#').shift());
            $(this).parents().parents().find('#designation').val($(this).val().split('#')[1]);

        });
        $("#quantite").on('change', function() {
            if ($(this).val() != null) $(this).parents().find('#Add_item').removeAttr('disabled');
        });
    </script>
@endsection
