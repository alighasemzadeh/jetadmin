<?php

namespace AliQasemzadeh\Http\Livewire\Panel\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('jetadmin::livewirepanel.dashboard.index')->layout('layouts.panel');
    }
}
