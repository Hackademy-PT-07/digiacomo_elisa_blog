<div class="bg-primary-subtle">
    <h3>Utenti</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button class="btn btn-secondary" wire:click="editUser({{ $user->id }})">Modifica</button>
                </td>
                <td>
                <button class="btn btn-danger" wire:click="deleteUser({{ $user->id }})">Cancella</button> 

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
