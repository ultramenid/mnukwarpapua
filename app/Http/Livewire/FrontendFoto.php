<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendFoto extends Component
{
    use WithPagination;
    public function getFoto(){
        return DB::table('foto')
        ->where('publishdate', '<' , Carbon::now('Asia/Jakarta'))
        ->where('status', 1)
        ->orderBy('publishdate', 'desc')
        ->paginate(10);
    }
    public function render(){
        $foto = $this->getFoto();
        return view('livewire.frontend-foto', compact('foto'));
    }
}
