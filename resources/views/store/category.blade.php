@extends('layouts.app')

@section('content')
<div class="container-fluid pd-top-for-fix-fixed-navbar">
  <div class="row hidden-xs hidden-sm">
    <div class="col-sm-12">
      <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li><a href="javascript:void(0)">Inicio</a></li>
        <li><a href="javascript:void(0)">Nombre de Categoría</a></li>
        <li class="active">Nombre de la subcategoría</li>
      </ul>
    </div>
  </div>

  <div class="row">
    {{-- Sidebar --}}
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Categorías</h3>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="">Overview</a></li>
            <li><a href="">Reports</a></li>
            <li><a href="">Analytics</a></li>
            <li><a href="">Export</a></li>
            <li class="active"><a href="">Nav item <span class="sr-only">(current)</span></a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
      </div>
    </div>
    {{-- Sidebar --}}
    {{-- content --}}
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
      {{--  --}}
      <div class="row">
        <h3 class="text-center text-info"><a href="#!" class="text-info">Nombre de la categoría</a></h3>

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <article class="col-item">
              <div class="photo">
                <div class="options-cart-round">
                  <button class="btn btn-primary btn-raised" data-toggle="tooltip" data-placement="top" title="Agregar al carrito">
                    <i class="material-icons">add_shopping_cart</i>
                  </button>
                </div>
                <a href="#"> <img src="http://placehold.it/500x300" class="img-responsive" alt="Product Image" /> </a>
              </div>
              <div class="info">
                <div class="row">
                  <div class="price-details col-md-6">
                    <p class="details text-success">SKU: 123456</p>
                    <h1 class="text-info">Sample Product Sample Product Sample Product Sample Product Sample Product</h1>
                    <span class="price-new text-danger">$110.00</span>
                  </div>
                </div>
                <div class="separator">
                  <div class="btn-group btn-group-justified" role="group">
                    <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons hidden-md">add_shopping_cart</i> Comprar</a>
                    <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
        </div>

      </div>
      {{--  --}}
    </div>
    {{-- content --}}
  </div>
</div>
@endsection