<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{
    public $user;
    public $password;

    protected $listeners = ['edit'];

    protected function rules() { 
        return [
        'user.name' => 'required',
        'user.email' => 'required|email|unique:users,email' . $this-> user->id,
        'password' => 'required'

    ];
}
    protected $messages = [
        'user.name.required' => 'il campo nome non puo essere vuoto',
        'user.email.required' => 'il campo email non puo essere vuoto',
        'password.required' => 'il campo password non puo essere vuoto'
    ];



    public function mount(){
        $this->newUser();
    }

    public function store(){

        $this->validate();

        $this->user->password = \Illuminate\Support\Facades\Hash::make($this->password);
        $this->user->save();

        session()->flash('message', 'Utente creato correttamente');
        $this->newUser();

        $this->emitTo('user-list', 'loadUser');
    }

    public function newUser(){

        $this->user = new User;
        $this->password = '';
    }

    public function edit(User $user){
        $this->user = $user;

    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
