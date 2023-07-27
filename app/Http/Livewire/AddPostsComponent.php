<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddPostsComponent extends Component
{
    use WithFileUploads;
    public $photo, $title, $deskripsi, $content, $publishdate, $status = 0, $category;

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
            DB::table('posts')->insert([
                'img' => $this->uploadImage(),
                'title' => $this->title,
                'slug' => Str::slug($this->title,'-'),
                'deskripsi' => $this->deskripsi,
                'content' => $this->content,
                'publishdate' => $this->publishdate,
                'status' => $this->status,
                'category' => $this->category,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);
            redirect()->to('/cms/posts');
        }
    }
    public function render()
    {
        return view('livewire.add-posts-component');
    }
    public function manualValidation(){
        if($this->photo == ''){
            $message = 'Photo harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->title == ''){
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
