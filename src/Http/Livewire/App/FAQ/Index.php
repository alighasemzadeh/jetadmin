<?php

namespace AliQasemzadeh\Http\Livewire\App\FAQ;

use AliQasemzadeh\Models\FrequentlyAskedQuestion;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $faqs = FrequentlyAskedQuestion::all();
        return view('jetadmin::livewireapp.f-a-q.index', compact('faqs'));
    }
}
