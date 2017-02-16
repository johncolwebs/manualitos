<ul>
  @foreach($childs as $child)
  <li>
    <a href="{{ route('categories.show', $child->id) }}">{{ $child->name }}</a>
    @if(count($child->childs))
      @include('admin.categories.categoryChild',['childs' => $child->childs])
    @endif
  </li>
  @endforeach
</ul>