<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddVideoComponent extends Component
{
    use WithFileUploads;
    public $code, $title, $deskripsi, $publishdate, $category, $status = 0;



    public function storeVideo(){
        if($this->manualValidation()){
            DB::table('video')->insert([
                'title' => $this->title,
                'video' => $this->code,
                'deskripsi' => $this->deskripsi,
                'publishdate' => $this->publishdate,
                'status' => $this->status,
                'category' => $this->category,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);
            redirect()->to('/cms/video');

        }
    }
    public function render()
    {
        return view('livewire.add-video-component');
    }
    public function manualValidation(){
        if($this->code == ''){
            $message = 'Video harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->title == ''){
            $message = 'Title harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->title) > 120){
            $message = 'Title tidak boleh lebih dari 120 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->deskripsi == ''){
            $message = 'Deskripsi harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->deskripsi) > 160){
            $message = 'Deskripsi tidak boleh lebih dari 160 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->publishdate == ''){
            $message = 'Publish date harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->category == ''){
            $message = 'Kategori harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
