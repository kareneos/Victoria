@extends('layouts.app')

@section('content')
<div class="container lista-proveedores mt-10">
    <div class="row text-center">
        <div class="col-md-12">
            <h1>Resultados</h1>
        </div>
        <div class="col-6 col-md-3">
            <div class="box-prov prov1" data-toggle="modal" data-target="#myModal">
                <div class="favorite">
                <i class="fas fa-heart"></i>
                </div>

                <div class="info-prov">
                    <p>Claudia López</p>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="box-prov prov2">
            <div class="favorite">
                <i class="fas fa-heart"></i>
                </div>
                <div class="info-prov">
                    <p>Carolina Galicia</p>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="box-prov prov3">
            <div class="favorite">
                <i class="fas fa-heart"></i>
                </div>
                <div class="info-prov">
                    <p>Mónica Suárez</p>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="box-prov prov4">
            <div class="favorite">
                <i class="fas fa-heart"></i>
                </div>
                <div class="info-prov">
                    <p>Teresa Robles</p>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Claudia López</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div>
                    <figure>
                        <img class="provider-img img-fluid" src="/images/proveedor1.png" alt="Claudia">
                    </figure>
            </div>
            <div class="info">

                    <p>Empresa: Juguetes Claudia</p>
                    <p>Sector: Juguetes</p> 
                    <p>Rango de precios: $100 - $1000</p>
                    <p>Recomendada para:Empresas pequeñas</p>
                    <h5>Contacto</h5>
                    <p>Correo: juguetesclaudia@juguetes.com</p>
                    <p>Teléfono: 6688321169</p>
            </div>
            <div>
                <h3>Comentarios</h3>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
                <p>Me gusto mucho sus productos, pero tarda mucho en contestar y se retrasó con la entrega.</p>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default"> <i class="fas fa-heart"></i> Añadir a favoritos</button>
        </div>
      </div>
      
    </div>
  </div>
  @include('includes.chat')
@endsection

@section('js')
@endsection
