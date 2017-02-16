@extends('layouts.app')

@section('content')
<div class="container-fluid pd-top-for-fix-fixed-navbar">
  <div class="row">
    <div class="col-sm-12">
      <h1>Editar Categoría</h1>
      @if ($message = Session::get('message'))
        <div class="alert alert-{{ Session::get('class') }} alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
      @endif
      {{-- formulario --}}
      @include('admin.categories.form', ['category' => $category, 'allCategories' => $allCategories, 'url' => route('categories.update', $category->id), 'method' => 'PATCH'])
    </div>
  </div>
</div>
@endsection