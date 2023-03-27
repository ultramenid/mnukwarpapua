<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

class EditPostComponent extends Component
{
    use WithFileUploads;
    public $uphoto, $photo, $title, $deskripsi, $content, $publishdate, $status, $category, $idPosts;

    public function mount($id){
        $this->idPosts = $id;
        $data = DB::table('posts')->where('id', $id)->first();
        $this->uphoto = $data->img;
        $this->title = $data->title;
        $this->deskripsi = $data->deskripsi;
        $this->content = $data->content;
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

    public function storePosts(){
        if($this->manualValidation()){
            if(!$this->photo){
                $name = $this->uphoto;
            }else{
                    Storage::delete('public/files/photos/'.$this->uphoto);
                    Storage::delete('public/files/photos/thumbnail/'.$this->uphoto);
                    $name=  $this->uploadImage();
            }
            DB::table('posts')
                ->where('id', $this->idPosts)
                ->update([
                    'img' => $name,
                    'title' => $this->title,
                    'deskripsi' => $this->deskripsi,
                    'content' => $this->content,
                    'publishdate' => $this->publishdate,
                    'status' => $this->status,
                    'category' => $this->category,
                    'updated_at' => Carbon::now('Asia/Jakarta')
                ]);
            //passing to toast
            $message = 'Berhasil memperbarui data posts';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }

    public function render(){
        return view('livewire.edit-post-component');
    }

    public function manualValidation(){
        if($this->title == ''){
            $message = 'Title harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif(strlen($this->title) > 120){
            $message = 'Title tidak boleh lebih dari 120 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif($this->deskripsi == ''){
            $message = 'Deskripsi harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif(strlen($this->deskripsi) > 120){
            $message = 'Deskripsi tidak boleh lebih dari 120 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif($this->content == ''){
            $message = 'Content harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif($this->publishdate == ''){
            $message = 'Publish date harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif($this->status == ''){
            $message = 'Status harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }elseif($this->category == ''){
            $message = 'Category harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
        }

        return true;
    }
}
