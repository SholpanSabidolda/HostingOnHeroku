
@extends('layout')
@section('content')
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
  display: flex;
  justify-content: space-between;
  flex-flow: row;
}
.container{
	display: flex;
	flex-flow:column;
}
/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 5px 5px 0 0;
}
</style>
<h1 class="display-4 text-center" style="font-size: 7.0rem;font-family: cursive;">All products</h1>
<div class="card">
	<div class="container">
  <img src="https://arbuz.kz/image/f/251759-kletchatka_truefiber_energiya_naturalnaya_s_granatom_persikom_i_abrikosom_100_g.jpg?w=260&h=260&_c=1616043112" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>

<div class="container">
   <img src="https://arbuz.kz/image/f/251757-kletchatka_truefiber_fitnes_naturalnaya_s_asai_yablokom_i_slivoi_100_g.jpg?w=360&h=360&_c=1616043150" style="width:60%">
  
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
<div class="container">
  <img src="https://arbuz.kz/image/f/251752-kletchatka_truefiber_legkost_naturalnaya_s_yagodami_godzhi_malinoi_i_shipovnikom_100_g.jpg?w=360&h=360&_c=1616043162" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
  <div class="container">
  <img src="https://arbuz.kz/image/f/224852-spirulina_poroshok_polezzno_100_g.jpg?w=260&h=260&_c=1615873587" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>

</div>
<div class="card">
  <div class="container">
  <img src="https://arbuz.kz/image/f/224853-hlorella_poroshok_polezzno_100_g.jpg?w=360&h=360&_c=1615873586" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
   <div class="container">
  <img src="https://arbuz.kz/image/f/224856-miks_dlya_smuzi_polezzno_150_g.jpg?w=360&h=360&_c=1615873586" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
  <div class="container">
  <img src="https://arbuz.kz/image/f/224845-yagody_godzhi_polezzno_100_g.jpg?w=360&h=360&_c=1616658948" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
   <div class="container">
  <img src="https://arbuz.kz/image/f/224857-vitgrass_poroshok_polezzno_100_g_.jpg?w=360&h=360&_c=1615873586" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
</div>
<div class="card">
  <div class="container">
  <img src="https://arbuz.kz/image/f/244269-protein_orgtium_mindalnyi_izolyat_250_g.jpg?w=360&h=360&_c=1615873585" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
   <div class="container">
  <img src="https://arbuz.kz/image/f/244269-protein_orgtium_mindalnyi_izolyat_250_g.jpg?w=360&h=360&_c=1615873585" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
   <div class="container">
  <img src="https://arbuz.kz/image/f/244271-protein_orgtium_soevyi_izolyat_250_g.jpg?w=360&h=360&_c=1615873585" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
   <div class="container">
  <img src="https://arbuz.kz/image/f/244268-protein_orgtium_gorohovyi_izolyat_250_g.jpg?w=360&h=360&_c=1615873585" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
  </div>
  <div class="card">
  <div class="container">
  <img src="https://arbuz.kz/image/f/226350-hlebcy_multizlakovye_apelsin_100_g.jpg?w=360&h=360&_c=1614684503" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
  <div class="container">
  <img src="https://arbuz.kz/image/f/226353-hlebcy_fitstart_risovye_risovye_morskaya_sol_100_g.jpg?w=360&h=360&_c=1617881752" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
   <div class="container">
  <img src="https://arbuz.kz/image/f/226115-hleb_elizaveta_vafelnyi_pshenichnyi_s_otrubyami_85_g.jpg?w=360&h=360&_c=1618211123" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>
   <div class="container">
  <img src="https://arbuz.kz/image/f/232261-hlebcy_fitstart_risovye_s_karamelyu_100_g.jpg?w=360&h=360&_c=1614684502" alt="Avatar" style="width:60%">
    <h2><b>John Doe</b></h2>
    <p>Architect & Engineer</p>
  </div>

</div>
<nav class="navbar navbar-dark bg-success">

    <span class="navbar-brand mb-0 h1">Healthy food shop</span>
</nav>

<div class="row">

    <div class="col-sm-3">

        <div class="container">
            <div class="list-group-item list-group-item-action active">Item</div>


        <div class="panel-body bg-success" style="color: white">
            
            <form id="frm-project">
                <div class="form-group">

                    <div>   
                        <img src="{{asset('https://arbuz.kz/image/f/242414-krekery_bite_ovsyanye_s_kurkumoi_i_imbirem_mini_66g.jpg?w=360&h=360&_c=1615872707')}}"  id="Chocolate" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                            <b>Chocolate</b>
                    </div>
                     

                    <div>
                    <img src="{{asset('https://arbuz.kz/image/f/229922-pastila_fruktiki_apelsin_25_g.jpg?w=360&h=360&_c=1616996007')}}" id="Mango" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Mango</b>
                    </div>

                    <div>
                    <img src="{{asset('https://arbuz.kz/image/f/251030-marmelad_bob_snail_grusha-yabloko-limon_bez_sahara_54_g.jpg?w=360&h=360&_c=1614682529')}}" id="Venila" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Venila</b>
                    </div>

                    <div>
                    <img src="{{asset('https://arbuz.kz/image/f/251027-marmelad_bob_snail_grushevo-apelsinovyi_bez_sahara_54_g.jpg?w=360&h=360&_c=1614780481')}}" id="Strawberry" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Strawberry</b>
                    </div>

                    <div>
                    <img src="{{asset('https://arbuz.kz/image/f/250695-pastilki_poleznye_sladosti_vishnya_i_smorodina_70_g.jpg?w=360&h=360&_c=1617113441')}}" id="MixFruit" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>MixFruit</b>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="container">
            <div class="list-group-item list-group-item-action active">AddProducts</div>
            <table id="tbl-item" class="table table-success table-bordered" cellpadding="0" cellspacing="0" width="100%" align="center">
                <thead>

                <tr>
                    <th>Delete</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Number</th>
                    <th>Total</th>
                </tr>

                <tbody>

                </tbody>

            </table>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="list-group-item list-group-item-action active">Bill</div>
        <div>
            <label>Total</label>
            <input type="text" style="color: yellow; background: green; font-size:21px;" id="total" name="total" placeholder="Total" required>
        </div>
        </br>

        <div>
            <input type="button" class="btn btn-warning" value="reset" name="reset" id="reset">
        </div>

    </div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Qty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <input type="number" style="color: yellow; background: black; font-size: 30px;" id="qty" name="qty" placeholder="Qty" required>
                </div>
            </div>




            <div class="modal-footer">
                <input type="button" class="btn btn-info" value="Add" name="add" id="add" onclick="add()">


            </div>
        </div>
    </div>
</div>

<script src="{{asset('/component/jquery/jquery.js')}}"></script>

<script src="{{asset('/component/jquery/jquery.min.js')}}"></script>

<script type="text/javascript">

    var total = 0;
    var tot = 0;

    var item = null;
    var price = 0;


    var a = "";

    $("img").on("click",function()
        {

            a = $(this).prop('id')

        });


    function add()
    {
        if(a == "Chocolate")
        {

            item = "Chocolate";
            price = 32;


        }
        else if(a == "Mango")
        {
            item = "Mango";
            price = 35;

        }
        else if(a == "Venila")
        {
            item = "Venila";
            price = 40;

        }
        else if(a == "Strawberry")
        {
            item = "Strawberry";
            price = 45;

        }

        else if(a == "MixFruit")
        {
            item = "Strawberry";
            price = 35;

        }

        var qty = $('#qty').val();
        tot = qty * price;

        var table1 =

            "<tr>" +
            "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td>" +
            "<td>" + item    +  "</td>" +
            "<td>" + price    +  "</td>" +

            "<td>" + qty    +  "</td>" +

            "<td>" + tot    +  "</td>" +

            "</tr>" ;


        total += Number(tot);
        $('#total').val(total);


        $("table tbody").append(table1);
        $("exampleModal").modal('toggle');
        $('#qty').val("1");


    }

    function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();



    }

    $('#reset').click(function()
    {
        location.reload();
    });

</script>


</body>

</html>
  @stop