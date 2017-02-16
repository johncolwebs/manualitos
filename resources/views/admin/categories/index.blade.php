@extends('layouts.app')

@section('content')
<div class="container-fluid pd-top-for-fix-fixed-navbar">
  <div class="row">
    <div class="col-sm-12">
      <h1>Categorías</h1>
      @if ($message = Session::get('message'))
        <div class="alert alert-{{ Session::get('class') }} alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th></th>
              <th class="text-center">Categoría</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr class="success cat_{{ $category->id }}">
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-center">
                  {{-- <a href="{{ route('categories.show', $category->id) }}" class="btn btn-raised btn-fab-mini btn-fab btn-info"><i class="material-icons">&#xE880;</i></a> --}}
                  <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-raised btn-fab-mini btn-fab btn-warning"><i class="material-icons">&#xE254;</i></a>
                  <a onclick="deleteCat({{ $category->id }})" class="btn btn-raised btn-fab-mini btn-fab btn-danger"><i class="material-icons">&#xE92B;</i></a>
                </td>
              </tr>
              @if(count($category->childs))
                @include('admin.categories.categoryChild',['childs' => $category->childs])
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="pull-right">
        <a href="{{ route('categories.create') }}" class="btn btn-primary btn-fab">
          <i class="material-icons">add</i>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection