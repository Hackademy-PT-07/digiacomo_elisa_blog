<x-main>
<x-slot:title>Crea la tua categoria </x-slot>
<x-navbar/>



<div class="container mt-5">
<h1>Aggiungi una categoria</h1>
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif

<form action="{{route('categories.store')}}" method="POST">
    @csrf
<div class="row g-3">
    <div class="col-12">
        <label for="title">Categoria</label>
        <div class="col-12">
        <input class="form form-control"type="text" name="name" id="name" value="{{old('category')}}">
        <span>@error('category') {{$message}} @enderror</span> 
        </div>
    </div>

    

    <div class="col-12">
    <button class="btn btn-primary">Aggiungi</button>
    </div>
</div>
</form>




</x-main>