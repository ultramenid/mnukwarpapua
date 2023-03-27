<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FrontendFooter extends Component
{

    public function getFooter(){
        return DB::table('footer')
                ->where('id', 1)
                ->first();
    }
    public function render(){
        $footer = $this->getFooter();
        return view('livewire.frontend-footer', compact('footer'));
    }
}
