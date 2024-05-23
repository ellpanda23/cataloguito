<?php

namespace App\Http\Livewire\Admin\Socials;

use App\Models\Social;
use Livewire\Component;

class SocialIndex extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $socials = Social::all();

        return view('livewire.admin.socials.social-index', compact('socials'));
    }
}
