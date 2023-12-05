<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->to('/dashboard'); // Cambia '/dashboard' según tus rutas
        }

        // Autenticación fallida
        session()->flash('error', 'Credenciales incorrectas.');
    }
}