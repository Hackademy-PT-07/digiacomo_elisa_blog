<x-main>
<x-slot:title>Crea il tuo articolo </x-slot>
<x-navbar/>



<div class="container mt-5 text-center">
<h1>Inserisci il tuo articolo</h1>


<form action="{{route('store-article')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row g-3">
    <div class="col-12">
        <label for="title mx-2">Titolo</label>
        <div class="col-12">
        <input class="form form-control" type="text" name="title" id="title" value="{{old('title')}}">
        <span>@error('title') {{$message}} @enderror</span> 
        </div>
    </div>

    <div class="col-12">
        <label for="category">Categoria</label>
        <div class="col-12">
        
        @foreach($categories as $category)
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            {{ $category-> name }}
        </label>
        </div>
        @endforeach
        @error('category_id') <span class="small text-danger">{{ $message }}</span> @enderror
        



    <div class="col-12">
        <label for="description">Descrizione</label>
        <div class="col-12">
        <input class="form form-control" type="text" name="description" id="description" value="{{old('description')}}">    
        <span>@error('description') {{$message}} @enderror</span>   
        </div>
    </div>

    <div class="col-12">
        <label for="body">Corpo</label> <br>
        <textarea class="form form-control" name="body" id="body" cols="30" rows="10">{{old('body')}}</textarea> 
        <span>@error('body') {{$message}} @enderror</span>      
    </div>
    <div class="col-12">
        <label for="image">Immagine</label>
       <input type="file" name="image" id="image" value="{{old('image')}}"> 
        <span>@error('body') {{$message}} @enderror</span>      
    </div>


    <div class="col-12">
    <button class="btn btn-primary">Salva</button>
    </div>
</div>
</form>




</x-main>