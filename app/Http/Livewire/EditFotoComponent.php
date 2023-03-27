<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditFotoComponent extends Component
{
    use WithFileUploads;
    public $uphoto, $photo, $title, $deskripsi, $publishdate, $status, $category, $idFoto;

    public function mount($id){
        $this->idFoto = $id;
        $data = DB::table('foto')->where('id', $id)->first();

        $this->uphoto = $data->foto;
        $this->title = $data->title;
        $this->deskripsi = $data->deskripsi;
        $this->publishdate = $data->publishdate;
        $this->status = $data->status;
        $this->category = $data->category;
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

    public function storeFoto(){
        if($this->manualValidation()){
            if(!$this->photo){
                $name = $this->uphoto;
            }else{
                Storage::delete('public/files/photos/'.$this->uphoto);
                Storage::delete('public/files/photos/thumbnail/'.$this->uphoto);
                $name =  $this->uploadImage();
            }
            DB::table('foto')
                ->where('id', $this->idFoto)
                ->update([
                    'title' => $this->title,
                    'foto' => $name,
                    'deskripsi' => $this->deskripsi,
                    'publishdate' => $this->publishdate,
                    'status' => $this->status,
                    'category' => $this->category,
                    'updated_at' => Carbon::now('Asia/Jakarta')
                ]);
            //passing to toast
            $message = 'Berhasil memperbarui data foto';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }

    public function render(){
        return view('livewire.edit-foto-component');
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
