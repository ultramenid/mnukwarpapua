<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendVideo extends Component
{
    use WithPagination;
    public function getVideo(){
        return DB::table('video')
        ->where('publishdate', '<' , Carbon::now('Asia/Jakarta'))
        ->where('status', 1)
        ->orderBy('publishdate', 'desc')
        ->paginate(10);
    }
    public function render(){
        $video = $this->getVideo();
        return view('livewire.frontend-video', compact('video'));
    }
}
