<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminAccount extends Component
{
    public $username;
    public $password;
    public $new_password;
    public $new_password_confirmation;

    protected function rules()
    {
        return [
            'username' => 'required|string|unique:users,username,' . Auth::id(),
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed',
        ];
    }

    public function mount()
    {
        $this->username = Auth::user()->username;
    }

    public function updateAccount()
    {
        $this->validate();

        $user = Auth::user();

        if (!Hash::check($this->password, $user->password)) {
            $this->addError('password', 'The current password is incorrect.');
            return;
        }

        $user->username = $this->username;

        if ($this->new_password) {
            $user->password = Hash::make($this->new_password);
        }

        $user->save();

        session()->flash('message', 'Account updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin-account');
    }
}
