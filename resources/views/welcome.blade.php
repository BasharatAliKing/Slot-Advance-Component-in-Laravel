<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <x-alert id="king">
     <x-slot name="title">Hello i'm title</x-slot>
   <p>Lorem ipsum dolor sit amet, 
    {{$component->link('My Portfolio', 'https://portfolio-bdking.netlify.app')}}
    {{-- <a href="https://portfolio-bdking.netlify.app">link component</a> --}}
</p>
@php
    $componentName='card'
@endphp
    </x-alert>
    <x-card />
    <x-form  action="/somepage" method="GET">
        <input type="text" class="form-control">
        <button class="btn btn-sm btn-success mt-2">Submit</button>
    </x-form>
</body>
</html>