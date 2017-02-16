@foreach($childs as $child)
  <tr class="info cat_{{ $child->id }}">
    <td class="text-center">{{ $child->id }}</td>
    <td>{{ $child->name }}</td>
    <td class="text-center">
      {{-- <a href="{{ route('categories.show', $child->id) }}" class="btn btn-raised btn-fab-mini btn-fab btn-info"><i class="material-icons">&#xE880;</i></a> --}}
      <a href="{{ route('categories.edit', $child->id) }}" class="btn btn-raised btn-fab-mini btn-fab btn-warning"><i class="material-icons">&#xE254;</i></a>
      <a onclick="deleteCat({{ $child->id }})" class="btn btn-raised btn-fab-mini btn-fab btn-danger"><i class="material-icons">&#xE92B;</i></a>
    </td>
  </tr>
  @if(count($child->childs))
    @include('admin.categories.categoryChild',['childs' => $child->childs])
  @endif
@endforeach