@extends('layouts.app')

@section('content')
<div class="container-fluid pd-top-for-fix-fixed-navbar">
  <div class="row hidden-xs hidden-sm">
    <div class="col-sm-12">
      <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li><a href="javascript:void(0)">Inicio</a></li>
        <li class="active">Carro de Compras</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="shopping_cart page-header">
        <h2>Your Shopping Cart <small>That little bucket of joy</small></h2>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <table id="cart" class="table table-hover table-condensed">
        <thead>
          <tr>
            <th style="width:50%">Producto</th>
            <th style="width:10%">Precio</th>
            <th style="width:8%">Cantidad</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
          </tr>
        </thead>
        <tbody>
          {{--  --}}
          <tr>
            <td data-th="Producto">
              <div class="row">
                <div class="col-sm-2 hidden-xs hidden-sm"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                <div class="col-sm-10">
                  <h4 class="nomargin">Nombre del producto Nombre del producto Nombre del producto</h4>
                </div>
              </div>
            </td>
            <td data-th="Precio">$1.99</td>
            <td data-th="Cantidad">
              <input type="number" class="form-control text-center" value="1">
            </td>
            <td data-th="Subtotal" class="text-center">1.99</td>
            <td class="actions btn-group-sm text-center" data-th="">
              <button class="btn btn-info btn-fab-mini btn-fab"><i class="material-icons">&#xE863;</i></button>
              <button class="btn btn-danger btn-fab-mini btn-fab"><i class="material-icons">&#xE92B;</i></button>
            </td>
          </tr>
          {{--  --}}
          <tr>
            <td data-th="Producto">
              <div class="row">
                <div class="col-sm-2 hidden-xs hidden-sm""><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                <div class="col-sm-10">
                  <h4 class="nomargin">Nombre del producto Nombre del producto Nombre del producto</h4>
                </div>
              </div>
            </td>
            <td data-th="Precio">$1.99</td>
            <td data-th="Cantidad">
              <input type="number" class="form-control text-center" value="1">
            </td>
            <td data-th="Subtotal" class="text-center">1.99</td>
            <td class="actions btn-group-sm text-center" data-th="">
              <button class="btn btn-info btn-fab-mini btn-fab"><i class="material-icons">&#xE863;</i></button>
              <button class="btn btn-danger btn-fab-mini btn-fab"><i class="material-icons">&#xE92B;</i></button>
            </td>
          </tr>
          {{--  --}}
        </tbody>
        <tfoot>
          <tr class="visible-xs">
            <td class="text-center"><strong>Total 1.99</strong></td>
          </tr>
          <tr>
          <td><a href="#" class="btn btn-warning btn-raised"><i class="fa fa-angle-left"></i> Continuar comprando</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
            <td><a href="#" class="btn btn-success btn-raised btn-block">Pagar <i class="fa fa-angle-right"></i></a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection
