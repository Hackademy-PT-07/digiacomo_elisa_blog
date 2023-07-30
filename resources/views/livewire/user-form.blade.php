<div class="bg-light">
   <h3>Crea utente</h3>
    <div class="col-12">
    @if (session()->has('message'))

<div class="alert alert-success">

    {{ session('message') }}

</div>

@endif
    </div>
    
    <form class="row col-12" wire:submit.prevent="store">
        <div >
        <label for="name">Nome</label>
        <input type="text" class="form-control" wire:model="user.name">
        @error('user.name') <span>{{$message}}</span> @enderror
        </div>

        <div class="col-12">
        <label for="email">Email</label>
        <input type="email" class="form-control" wire:model.lazy="user.email">
        @error('user.email') <span>{{$message}}</span> @enderror
        </div>

        <div class="col-12">
        <label for="password">Password</label>
        <input type="password" class="form-control" wire:model="password">
        @error('password') <span>{{$message}}</span> @enderror
        </div>

        <div class="col-12">
        <button class="btn btn-primary my-2"type="submit">Salva</button>
        </div>

    </form>


</div>
