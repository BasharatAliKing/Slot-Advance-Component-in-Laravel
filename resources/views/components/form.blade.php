@props([
    'action',
    'method'=>'POST',
])

<div class="col-md-4 p-4 border m-4">
    <form action="{{$action}}" method="{{$method==='GET' ? 'GET' : 'POST'}}">
        @csrf
        @unless (in_array($method,['GET','POST']))
            @method($method)
        @endunless
     {{$slot}}
    </form>
</div>