<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">Categorías</h3>
    </div>
    <div class="panel-body">
      <ul class="nav nav-pills nav-stacked">
        <div id="categories" class="tree">
          @foreach ($categories as $category)
            <ul>
              <li>
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-raised btn-xs btn-info pull-right">ver</a>
                <a onclick="deleteCat({{ $category->id }})" class="btn btn-raised btn-xs btn-danger pull-right">del</a>
                @if(count($category->childs))
                  @include('admin.categories.categoryChild',['childs' => $category->childs])
                @endif
              </li>
            </ul>
          @endforeach
        </div>
      </ul>
    </div>
  </div>
</div>