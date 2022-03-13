@if ( session('updateClave') )
<div class="alert alert-success" role="alert">
  <strong>Felicitaciones </strong>
    {{ session('updateClave') }}
</div>



    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 text-center">
          <img src="{{ asset('img/excelent.gif') }}" style="width:100px;" class="img-fluid" alt="Responsive image">
        </div>
    </div>
@endif


@if ( session('name') )
<div class="alert alert-success" role="alert">
  <strong>Felicitaciones </strong>
    {{ session('name') }}
</div>
@endif


@if ( session('claveIncorrecta') )
  <div class="alert alert-danger" role="alert">
    <strong>Lo siento!</strong>  {{ session('claveIncorrecta') }}
  </div>
@endif


@if ( session('clavemenor') )
<div class="alert alert-warning" role="alert">
  <strong>Lo siento !</strong>
    {{ session('clavemenor') }}
</div>
@endif