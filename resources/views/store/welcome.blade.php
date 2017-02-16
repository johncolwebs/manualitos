@extends('layouts.app')

@section('content')
<div class="container-fluid pd-top-for-fix-fixed-navbar">
  {{-- Carousel --}}
  <div class="row hidden-xs">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      {{-- Indicators --}}
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      {{-- Wrapper for slides --}}
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://placehold.it/1600x340" alt="...">
          <div class="carousel-caption">
            <h3><a href="#!">Nombre del producto 1</a></h3>
            {{-- <p>Descripción de la promoción, o texto alternativo</p> --}}
          </div>
        </div>
        <div class="item">
         <img src="http://placehold.it/1600x340" alt="...">
          <div class="carousel-caption">
            <h3><a href="#!">Nombre del producto 2</a></h3>
            {{-- <p>Descripción de la promoción, o texto alternativo</p> --}}
          </div>
        </div>
        <div class="item">
         <img src="http://placehold.it/1600x340" alt="...">
          <div class="carousel-caption">
            <h3><a href="#!">Nombre del producto 3</a></h3>
            {{-- <p>Descripción de la promoción, o texto alternativo</p> --}}
          </div>
        </div>
      </div>
      {{-- Controls --}}
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>
  {{-- Carousel EOF --}}

  <div class="row">
    {{-- Sidebar --}}
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
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
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
      {{--  --}}
      <div class="row">
        <h3 class="text-center text-danger"><a href="#!" class="text-danger">En Oferta</a></h3>
        <div class="owl-carousel owl-theme">
          {{--  --}}
          <div class="item">
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
                    <span class="price-new text-danger">$120.00</span>
                  </div>
                </div>
                <div class="separator">
                  <div class="btn-group btn-group-justified" role="group">
                    <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons">add_shopping_cart</i> Comprar</a>
                    <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          {{--  --}}
          <div class="item">
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
                    <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons">add_shopping_cart</i> Comprar</a>
                    <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          {{--  --}}
          <div class="item">
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
                    <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons">add_shopping_cart</i> Comprar</a>
                    <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          {{--  --}}
          <div class="item">
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
                    <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons">add_shopping_cart</i> Comprar</a>
                    <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          {{--  --}}
          <div class="item">
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
                    <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons">add_shopping_cart</i> Comprar</a>
                    <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          {{--  --}}
          <div class="item">
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
                    <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons">add_shopping_cart</i> Comprar</a>
                    <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          {{--  --}}
        </div>
      </div>
      {{--  --}}
    </div>
    {{-- content --}}
  </div>

  {{-- Product List --}}
  <div class="row">
    <div class="col-sm-4 col-md-4 col-lg-3">
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
              <a href="#!" class="btn btn-raised btn-sm btn-primary"><i class="material-icons">add_shopping_cart</i> Comprar</a>
              <a href="#!" class="btn btn-raised btn-sm btn-info"><i class="material-icons">remove_red_eye</i> Ver</a>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </article>
    </div>
  </div>
  {{-- Product List EOF --}}
</div>
@endsection