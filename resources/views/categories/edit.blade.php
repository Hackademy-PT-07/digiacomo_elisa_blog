<x-main>
   <x-navbar/>
<x-slot:title>Modifica la categoria </x-slot>
<div class="container">
   <div class="row">
<h1 class="col-12 text-center">
    Modifica la categoria
 </h1>

 <form action="{{route('categories.update', $category)}}" method="POST">
    @csrf
    @method('PUT')
    <label class="my-2" for="name">Categoria</label>
    <input  class="form form-control"type="text" name="name" id="name" value="{{ old('name', $category->name) }}">

    <button class="btn btn-primary my-2" type='submit'>Modifica</button>


 </form>
 </div> 
 </div>







</x-main>
