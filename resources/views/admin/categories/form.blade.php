{!! Form::open(['url' => $url, 'method' => $method]) !!}
  <div class="form-group label-floating {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('name', 'Nombre de la Categoría', ['class' => 'control-label']) }}
    {{ Form::text('name', $category->name, ['class' => 'form-control', 'required' => 'required']) }}
    <span class="text-danger">{{ $errors->first('name') }}</span>
  </div>
  <div class="form-group label-floating {{ $errors->has('description') ? 'has-error' : '' }}">
    {{ Form::label('description', 'Descripción', ['class' => 'control-label']) }}
    {{ Form::textarea('description', $category->description, ['class' => 'form-control', 'required' => 'required']) }}
    <span class="text-danger">{{ $errors->first('description') }}</span>
  </div>
  <div class="form-group label-floating {{ $errors->has('sort_order') ? 'has-error' : '' }}">
    {{ Form::label('sort_order', 'Orden de la Categoría', ['class' => 'control-label']) }}
    {{ Form::number('sort_order', $category->sort_order, ['class' => 'form-control', 'required' => 'required']) }}
    <span class="text-danger">{{ $errors->first('sort_order') }}</span>
  </div>
  <div class="form-group label-floating {{ $errors->has('parent_id') ? 'has-error' : '' }}">
    {!! Form::label('Categoría Padre:') !!}
    {!! Form::select('parent_id', $allCategories, ($category->parent_id != 0) ? $category->parent_id : null, ['class'=>'form-control', 'placeholder'=>'Seleccione']) !!}
    <span class="text-danger">{{ $errors->first('parent_id') }}</span>
  </div>
  <div class="form-group text-right">
    <a class="btn btn-info btn-raised" href="{{ route('categories.index') }}"> Regresar</a>
    <button class="btn btn-raised btn-success" type="submit">
      <i class="material-icons">save</i>
      Enviar
    </button>
  </div>
{!! Form::close() !!}