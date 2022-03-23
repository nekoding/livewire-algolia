<?php

namespace App\Http\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{

    public $search;

    public $result = [];

    public function updatedSearch($value)
    {
        if ($value == '') {
            $this->result = [];
        } else {
            $this->result = ModelsUser::search($value)->get();
        }
    }

    public function render()
    {
        return view('livewire.user');
    }
}
