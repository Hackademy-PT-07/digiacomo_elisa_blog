<x-main>
<x-slot:title> Registrazione </x-slot>
<x-navbar/>

<div class="container mt-3">
    <h1 class="text-center">Registrati</h1>
    <form action="/register" method="POST">
        @csrf
    <div class="row">
    <div class="col-md-12">
            <label for="name">Nome</label>
            <input class="form form-control" type="text" name="name" id="name">
            @error('email')<span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12">
            <label for="email">Email</label>
            <input class="form form-control" type="email" name="email" id="email">
            @error('email')<span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        
        <div class="col-md-12">
            <label for="password">Password</label>
            <input class="form form-control" type="password" name="password" id="password">
            @error('password')<span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12">
            <label for="password">Conferma Password</label>
            <input class="form form-control" type="password" name="password_confirmation" id="password_confirmation">
            @error('password')<span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary">Registrati</button>
        </div>


    </div>
    </form>





</div>



</x-main> 