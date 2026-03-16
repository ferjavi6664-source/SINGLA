<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavButton extends Component
{
    public $url;
    public $label;
    public $icon;
    public $class;
    public $permission;

    public function __construct($url, $label, $icon = null, $class = null, $permission = true)
    {
        $this->url = $url;
        $this->label = $label;
        $this->icon = $icon;
        $this->class = $class;
        $this->permission = $permission;
    }

    public function isActive()
    {
        return request()->path() === ltrim($this->url, '/');
    }

    public function render()
    {
        return view('components.nav-button');
    }
}
