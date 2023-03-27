<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFotoComponent extends Component
{
    use WithFileUploads;
    public $photo, $title, $deskripsi, $publishdate, $category, $status = 0;

    public function uploadImage(){
        $file = $this->photo->store('public/files/photos');
        $foto = $this->photo->hashName();

        $manager = new ImageManager();

        // https://image.intervention.io/v2/api/fit
        $image = $manager->make('storage/files/photos/'.$foto)->fit(300, 150);
        $image->save('storage/files/photos/thumbnail/'.$foto);
        return $foto;
    }
    public function storeFoto(){
        if($this->manualValidation()){
            DB::table('foto')->insert([
                'title' => $this->title,
                'foto' => $this->uploadImage(),
                'deskripsi' => $this->deskripsi,
                'publishdate' => $this->publishdate,
                'status' => $this->status,
                'category' => $this->category,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);
            redirect()->to('/cms/foto');

        }
    }
    public function render()
    {
        return view('livewire.add-foto-component');
    }

    public function manualValidation(){
        if($this->photo == ''){
            $message = 'Foto harus diisi.';
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
