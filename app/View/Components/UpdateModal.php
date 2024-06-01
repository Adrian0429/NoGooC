<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UpdateModal extends Component
{

    public function __construct(public int $id)
    {
        
    }

    public function render(): View|Closure|int
    {
        return view('components.update-modal');
    }
}