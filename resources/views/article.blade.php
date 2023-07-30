

<x-main>
    <x-slot:title>Articolo</x:slot>

    <x-navbar/>

    <div class="container mt-5">
        <div class="mt-4">
            <div class="mb-3">
                <a href="{{ route('articles') }}">Indietro</a>
            </div>
            @foreach($article->categories as $category)
            <span class="small text-secondary">{{ $category->name }}</span>
            @endforeach
            <h1 class="text-primary">{{ $article->title}}</h1>
            @if($article->image)
           <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title}}">
           @endif
            <div class="mt-4"
                {{ $article->description }}
            </div>
            
        </div>
    </div>  

</x-main>