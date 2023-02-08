@extends('index')
@section('section_principale')
<script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script>
<script>var numero=1 </script>
    <div  style=" font-weight :bold ; background-color : rgb(237, 237, 245);" >
        <div style="width:40%; margin:auto;">
        <marquee><p class="label label-default" style="text-align: center; font-weight :bold;Font-size:X-large;">Faire sortir les produits du magasin</p></marquee>
        </div>
        <div class="card" style="margin: 15px;padding : 15px ; ">

        <legend class="label label-default">Ajout de produits</legend>
            <div >
                     <div class="row" style="margin-right: 0px">
            <div class="col">
                <label class="control-label col-sm-2" for="produit">Produit</label>
                <select class="form-control" name="produit" id="choice" style="" >
                    @foreach ($produits as $produit )
                        <option value='{{"$produit->id_produit"."#"."$produit->designation"."#"."$produit->description"}}' >{{$produit->designation}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4" style="width: 250px;">
                <label class="control-label " for="quantite">Quantité</label>
                <input class="form-control" type="number" name="quantite" class="" id="quantite" >
                </select>
            </div>
            <div class="col">
                <br>
                <input class="form-control btn btn-primary" type="button" value="Ajouter" id="Add_item" disabled style="background-color :rgb(35,38,106);width: 120px"><br>
            </div>
                      </div>
            <label for="description">Description :</label>
            <span></span>
        </div>
        </div>
        <div class="card d-flex flex-column" style="margin: 15px;padding : 15px ;min-height: 28rem;">
            <legend>Liste produits</legend>
            <form action="{{Route('entree.store')}}" method="post">
            @csrf
                <div class="table-responsive" style="text-align : center ;">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Désignation</th>
                        <th>Quantité</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </div>
                <input type="hidden" name="valeur" id="valeur">
                <input class="btn btn-primary"type="submit" value="Valider" style=" background-color :rgb(35,38,106); position: fixed ; bottom : 50px; Right : 100px;">
            </form>
        </div>
    </div>
    <script>
        $("#Add_item").on('click',function(){
            var val=$(this).parents().find('#choice').val().split('#');
            $(this).parents().parents().parents().find('tbody').append("<tr><td>"+numero+"</td><td>"+val[1]+"</td><td>"+$(this).parents().find('#quantite').val()+"</td></tr>");
            numero=numero+1;
            val.push($(this).parents().find('#quantite').val());
            //$(this).parents().find('#quantite').val(null);
            //$(this).attr('disabled','disabled');
            $(this).parents().parents().parents().find('#valeur').val(val);
        });
        $("#choice").on('change',function(){
            $(this).parents().children('span').html($(this).val().split('#').pop());
        });
        $("#quantite").on('change',function(){
            if($(this).val()!=null) $(this).parents().find('#Add_item').removeAttr('disabled');
        });
    </script>
@endsection
