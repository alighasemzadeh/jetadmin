<?php

namespace AliQasemzadeh\Http\Livewire\AliQasemzadeh\Article;

use AliQasemzadeh\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $articles = Article::with(['user', 'category'])->where('language', app()->getLocale())->paginate(config('bap.per-page'));
        return view('jetadmin::livewireapp.article.index', compact('articles'));
    }
}
