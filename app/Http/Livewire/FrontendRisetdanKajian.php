<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendRisetdanKajian extends Component
{
    use WithPagination;

    public function getRisetdanKajian(){
        return DB::table('posts')
        ->where('category', 'risetdankajian')
        ->where('publishdate', '<' , Carbon::now('Asia/Jakarta'))
        ->where('status', 1)
        ->orderBy('publishdate', 'desc')
        ->paginate(10);
    }

    public function render(){
        $risetdankajian = $this->getRisetdanKajian();
        return view('livewire.frontend-risetdan-kajian', compact('risetdankajian'));
    }
}
