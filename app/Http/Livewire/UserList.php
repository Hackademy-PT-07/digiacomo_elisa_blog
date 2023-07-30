<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public $users;

    protected $listeners = ['loadUser'];

    public function mount(){
        $this->loadUser();
        
    }
    public function loadUser(){
        $this->users = \App\Models\User::all();
    }

    public function editUser(User $user){
        $this->emitTo('user-form', 'edit', $user);

    }

    public function deleteUser(User $user){
        
        $user->delete();
        $this->loadUser();
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
