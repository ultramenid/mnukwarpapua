<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendLivelyhood extends Component
{
    use WithPagination;
    public function getLivelyhood(){
        return DB::table('posts')
        ->where('category', 'livelyhood')
        ->where('publishdate', '<' , Carbon::now('Asia/Jakarta'))
        ->where('status', 1)
        ->orderBy('publishdate', 'desc')
        ->paginate(10);
    }

    public function render(){
        $livelyhood = $this->getLivelyhood();
        return view('livewire.frontend-livelyhood', compact('livelyhood'));
    }
}
