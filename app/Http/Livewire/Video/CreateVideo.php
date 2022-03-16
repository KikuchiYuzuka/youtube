<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;

class CreateVideo extends Component
{

    public $name = 'tet';
    public function render()
    {
        return view('livewire.video.create-video')->extends('layouts.app');
    }
}
