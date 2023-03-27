<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;


class CoverComponent extends Component
{
    use WithFileUploads;
    public $uphoto, $photo, $deskripsi, $title;

    public function mount(){
        $data = DB::table('cover')->where('id', 1)->first();
        if($data){
            $this->uphoto = $data->img;
            $this->title = $data->title;
            $this->deskripsi = $data->deskripsi;
        }else{
            $this->title = '';
            $this->deskripsi = '';
        }
    }

    public function uploadImage(){
        $file = $this->photo->store('public/files/photos');
        $foto = $this->photo->hashName();

        $manager = new ImageManager();

        // https://image.intervention.io/v2/api/fit
        $image = $manager->make('storage/files/photos/'.$foto)->fit(300, 150);
        $image->save('storage/files/photos/thumbnail/'.$foto);
        return $foto;
    }

    public function storeCover(){
        if($this->manualValidation()){
            DB::table('cover')
            ->updateOrInsert(
                ['name' => 'cover', 'id' => 1],
                [
                    'img' => $this->uploadImage(),
                    'title' => $this->title,
                    'deskripsi' => $this->deskripsi,
                ]
            );
            //passing to toast
            $message = 'Berhasil memperbarui cover';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }
    public function render()
    {
        return view('livewire.cover-component');
    }
    public function manualValidation(){
        if($this->title == ''){
            $message = 'Title harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->title) > 60){
            $message = 'Nama tidak boleh lebih dari 60 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->deskripsi == ''){
            $message = 'Title harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif(strlen($this->deskripsi) > 160){
            $message = 'Deskripsi tidak boleh lebih dari 160 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }
        return true;
    }
}
