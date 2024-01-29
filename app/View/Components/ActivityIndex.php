<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActivityIndex extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $activities, public string $route, public $message, public $header)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.activity-index');
    }

    public function stripTags($content, $limit){
        return Str::limit(strip_tags($content), $limit, '...');
    }
}
