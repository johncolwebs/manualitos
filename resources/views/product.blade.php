@extends('layouts.app')

@section('content')
<div class="container-fluid pd-top-for-fix-fixed-navbar">
  <div class="row hidden-xs hidden-sm">
    <div class="col-sm-12">
      <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li><a href="javascript:void(0)">Inicio</a></li>
        <li><a href="javascript:void(0)">Nombre de Categoría</a></li>
        <li><a href="javascript:void(0)">Nombre de Subcategoría</a></li>
        <li class="active">Nombre del producto Nombre del producto Nombre del producto</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
      <img
        src="http://placehold.it/700x500"
        alt="Nombre del producto"
        class="img-responsive"
       />
    </div>
    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-7">
      <div class="row">
        <div class="col-md-12">
          <h1>Nombre del producto Nombre del producto Nombre del producto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <span class="label label-primary">Vintage</span>
          <span>No. 1960140180</span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="short-description">
            Classic film camera. Uses 620 roll film.
            Has a 2&frac14; x 3&frac14; inch image size.
          </p>
        </div>
      </div>
      <div class="row hidden-xs">
        <div class="col-xs-6 col-sm-7 col-md-5">
          <span class="sr-only">Four out of Five Stars</span>
          <i class="material-icons">&#xE838;</i>
          <i class="material-icons">&#xE838;</i>
          <i class="material-icons">&#xE838;</i>
          <i class="material-icons">&#xE839;</i>
          <i class="material-icons">&#xE83A;</i>
          <span class="label label-success">61</span>
        </div>
        <div class="col-xs-6 col-sm-5 col-md-7">
          <span><a href="#comentarios" data-toggle="tab">Escribir un comentario</a></span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 bottom-rule">
          <h2 class="product-price text-danger">$129.777,00</h2>
        </div>
      </div><!-- end row -->

      <div class="row add-to-cart">
        <div class="col-xs-6 col-sm-6 col-md-4 product-qty">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-info btn-fab-mini">
                  <i class="material-icons">&#xE800;</i>
                </button>
              </span>
              <input type="text" class="form-control text-center" value="1">
              <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-info btn-fab-mini">
                  <i class="material-icons">&#xE3CB;</i>
                </button>
              </span>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-8">
          <div class="form-group">
            <button class="btn btn-primary btn-raised btn-lg btn-block">
              <i class="material-icons">&#xE854;</i> Comprar
            </button>
          </div>
        </div>
      </div><!-- end row -->

      <div class="row">
        <div class="col-md-4 text-center">
          <span class="text-success"><i class="material-icons">&#xE5CA;</i> In Stock</span>
        </div>
        <div class="col-md-4 col-md-offset-1 text-center">
          <a class="monospaced" href="#">Add to Shopping List</a>
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-md-12 bottom-rule top-10"></div>
      </div><!-- end row -->

      <div class="row">
        <div class="col-md-12 top-20">
          <p>To order by telephone, <a href="tel:18005551212">please call 1-800-555-1212</a></p>
        </div>
      </div>
    </div>
  </div>
  {{--  --}}
  <div class="row">
    <div class="col-sm-12">
      <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
        <li><a href="#preguntas" data-toggle="tab">Preguntas</a></li>
        <li><a href="#comentarios" data-toggle="tab">Comentarios</a></li>
        <li class="hidden-xs"><a href="#envioypago" data-toggle="tab">Envío y Pago</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="descripcion">
          <p>Descripción de la publicación</p>
        </div>
        <div class="tab-pane fade" id="preguntas">
          <p>Preguntas.</p>
        </div>
        <div class="tab-pane fade" id="comentarios">
          <p>Comentarios</p>
        </div>
        <div class="tab-pane fade hidden-xs" id="envioypago">
          <p>Detalles de envío y pago</p>
        </div>
      </div>
    </div>
  </div>

  {{-- Similar Products --}}
  <div class="row">
    <div class="col-sm-12">
      <h3 class="text-info">Productos similares</h3>
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
  </div>
  {{-- Similar Products --}}
</div>
@endsection
