<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditVideoComponent extends Component
{
    use WithFileUploads;
    public $uvideo, $video, $title, $deskripsi, $publishdate, $category, $status, $idVideo;
    public function mount($id){
        $this->idVideo = $id;
        $data = DB::table('video')->where('id', $id)->first();

        $this->uvideo = $data->video;
        $this->title = $data->title;
        $this->deskripsi = $data->deskripsi;
        $this->publishdate = $data->publishdate;
        $this->category = $data->category;
        $this->status = $data->status;

    }
    public function uploadVideo(){
        $file = $this->video->store('public/files/photos/video');
        $foto = $this->video->hashName();

        return $foto;
    }
    public function storeVideo(){
        if($this->manualValidation()){
            if(!$this->video){
                $name = $this->uvideo;
            }else{
                Storage::delete('public/files/photos/video/'.$this->uvideo);
                $name =  $this->uploadImage();
            }
            DB::table('video')
                ->where('id', $this->idVideo)
                ->update([
                    'title' => $this->title,
                    'video' => $name,
                    'deskripsi' => $this->deskripsi,
                    'publishdate' => $this->publishdate,
                    'status' => $this->status,
                    'category' => $this->category,
                    'updated_at' => Carbon::now('Asia/Jakarta')
                ]);
            //passing to toast
            $message = 'Berhasil memperbarui data video';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }
    public function render()
    {
        return view('livewire.edit-video-component');
    }
    public function manualValidation(){
        if($this->title == ''){
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
        }elseif(strlen($this->deskripsi) > 120){
            $message = 'Deskripsi tidak boleh lebih dari 120 karakter.';
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
