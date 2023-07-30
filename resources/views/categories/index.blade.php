<x-main>
     <x-navbar/>   
    <div class="container mt-5">
        <class class="row">
        <h1>Categorie</h1>

        <div class="col-12">
        <a  class="btn btn-primary my-3"href="{{route('categories.create')}}">Crea una categoria</a>
        </div>

        @if(session()->has('success')) 
        <div class="text-success mx-3 rounded fs-5">{{session('success')}}</div> 
        @endif 
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>#</th>
                    
                    <th>Categoria</th>
                    <th>Modifica</th>
                    <th>Cancella</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        
                        <td>
                        
                        {{ $category->name }}
                       
                        </td>
                        <td> <a class="btn btn-primary"href="{{route('categories.edit', $category)}}">Modifica</a></td>
                        <td>
                        <form action="{{route('categories.destroy', $category)}}" onsubmit="return confirm('Sei sicuro ...?')" method="POST">
                                 @csrf
                                 @method('DELETE')
                                
                            <button type="submit" class="btn btn-danger">Cancella</button>


                        </form>
                    </td>
                          
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>    
</x-main>