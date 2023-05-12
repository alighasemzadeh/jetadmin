<?php

namespace AliQasemzadeh\Http\Livewire\AliQasemzadeh\Article;

use AliQasemzadeh\Models\Article;
use Livewire\Component;

class View extends Component
{
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function render()
    {
        return view('jetadmin::livewireapp.article.view');
    }
}
