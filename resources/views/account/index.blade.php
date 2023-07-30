<x-main> 
    <x-slot:title>Benvenuto</x-slot>

    <x-main>
     <x-navbar/>   
    <div class="container mt-5">
        <class class="row">
        <h1>Articoli</h1>

        <div class="col-12">
        <a  class="btn btn-primary my-3"href="{{route('create-article')}}">Crea un articolo</a>
        </div>

        @if(session()->has('success')) 
        <div class="text-success mx-3 rounded fs-5">{{session('success')}}</div> 
        @endif 
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Modifica</th>
                    <th>Cancella</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td><a  class="text-reset" href="{{route('article', $article)}}">{{ $article->title }}</a></td>
                        <td>
                        @foreach($article->categories as $category)
                        {{ $category->name }}
                        @endforeach
                        </td>
                        <td> <a class="btn btn-primary"href="{{route('edit-article', $article)}}">Modifica</a></td>
                        <td>
                        <form action="{{route('delete-article', $article)}}" onsubmit="return confirm('Sei sicuro ...?')" method="POST">
                                 @csrf
                                
                            <button type="submit" class="btn btn-danger">Cancella</button>


                        </form>
                    </td>
                          
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>    
</x-main>
@foreach($articles as $article)


@endforeach




</x-main>