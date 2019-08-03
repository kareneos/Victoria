@extends('layouts.app')

@section('content')
<div class="container home mt-10">
    <div class="row">
        <div class="col-12">
        <h1>Directorio</h1>
        </div>
    </div>

    <div class="row text-center">
        <a href="/lista-proveedores">
            <div class="col-6 col-md-4">
            <a href="/lista-proveedores">
                <div class="prov-content toy">
                    <p class="category-title">Juguetes</p>
                </div>
            </a>
            </div>

        <div class="col-6 col-md-4">
            <div class="prov-content textil">
                <p class="category-title">Textil</p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="prov-content shoes">
                <p class="category-title">Zapatos</p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="prov-content packing">
                <p class="category-title">Empaque</p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="prov-content electronics">
                <p class="category-title">Electrónica</p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="prov-content legal">
                <p class="category-title">Asesoría jurídica</p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="prov-content makeup">
                <p class="category-title">Maquillaje</p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="prov-content tech">
                <p class="category-title">Tecnología</p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="prov-content pet">
                <p class="category-title">Mascotas</p>
            </div>
        </div>
        
    </div>
</div>
@include('includes.chat')
@endsection

@section('js')

@endsection
