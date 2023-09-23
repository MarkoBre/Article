<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $action,
        public string $header,
        public string $method = '',
        public string $title = '',
        public string $body = '',
        public string $category = '',
        public string $tags = ''
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-form');
    }
}
