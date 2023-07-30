<x-main>
<x-slot:title> Login </x-slot>
<x-navbar/>

<div class="container mt-3">
    <h1 class="text-center">Accedi</h1>
    <form action="/login" method="POST">
        @csrf
    <div class="row">
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
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary">Registrati</button>
        </div>


    </div>
    </form>





</div>



</x-main> 