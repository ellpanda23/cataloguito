<?php

namespace App\Http\Livewire\Admin\Socials;

use App\Models\Social;
use Livewire\Component;

class AddUsername extends Component
{
    public $platform, $username, $social;

    public function mount(Social $social)
    {
        $this->social = $social;
        $this->username = $social->username;
        $this->platform = $social->platform;
    }

    public function render()
    {
        return view('livewire.admin.socials.add-username');
    }

    public function save()
    {
        $social = $this->social;
        $social->update(['username' => $this->username]);

        $this->emitTo('admin.socials.social-index', 'render');
    }

    public function delete()
    {
        $social = $this->social;
        $social->update(['username' => null]);

        $this->emitTo('admin.socials.social-index', 'render');
    }

}
