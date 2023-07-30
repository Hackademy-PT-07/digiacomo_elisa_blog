<x-main>
    <x-slot:title> Modifica </x-slot>
    <x-navbar/>

    <div class="container mt-5">
        <h1>Modifica articolo</h1>

        @if(session()->has('success'))
        <div class="mx-3 text-success">{{session('success')}}</div>
        @endif


        <form action="{{ route('update-article', $article) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" maxlength="150"
                            value="{{ old('title', $article->title) }}">
                            @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="category_id">Categorie</label>
                    @foreach(App\Models\Category::all() as $category)
                    <div class="form-check">
                        <input class="form-check-input"
                                type="checkbox"
                                name="categories[]"
                                value="{{ $category->id }}"
                                @checked($article->categories->contains($category->id))
                        >

                        <label class="form-check-label" for="flexCheckDefault">
                            {{ $category->name }}
                        </label>
                    </div>
                    @endforeach
                    @error('category_id') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="description">Descrizione breve</label>
                    <input type="text" name="description" id="description" class="form-control"
                            value="{{ old('description', $article->description) }}">
                    @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="image">Immagine</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-12">
                    <label for="body">Corpo</label>
                    <textarea name="body" id="body" rows="10" class="form-control">{{ old('body', $article->body) }}</textarea>
                    @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Salva</button>
                </div>
            </div>
        </form>
    </div>    

</x-main>