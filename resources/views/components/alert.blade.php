<div {{$attributes->merge()}} class="alert alert-danger">
    <!-- Well begun is half done. - Aristotle -->
 @isset($title)
    <h2>{{$title}}</h2>
  @endisset
      {{$slot}}
</div>