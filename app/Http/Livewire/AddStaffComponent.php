<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;

class AddStaffComponent extends Component
{
    use WithFileUploads;
    public $photo, $nama, $posisi, $deskripsi, $status = 1;

    public function uploadImage(){
        $file = $this->photo->store('public/files/photos');
        $foto = $this->photo->hashName();

        return $foto;
    }

    public function storeStaff(){
        if($this->manualValidation()){
            DB::table('staff')->insert([
                'foto' => $this->uploadImage(),
                'nama' => $this->nama,
                'deskripsi' => $this->deskripsi,
                'posisi' => $this->posisi,
                'status' => $this->status,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]);
            redirect()->to('/cms/staff');
        }
    }

    public function render()
    {
        return view('livewire.add-staff-component');
    }

    public function manualValidation(){
        if($this->nama == ''){
            $message = 'Nama harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->nama) > 120){
            $message = 'Nama tidak boleh lebih dari 120 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->posisi == ''){
            $message = 'Posisi harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->posisi) > 12){
            $message = 'Posisi tidak boleh lebih dari 12 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->deskripsi == ''){
            $message = 'Deskripsi harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->deskripsi) > 255){
            $message = 'Deskripsi tidak boleh lebih dari 255 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->status == ''){
            $message = 'Silahkan pilih status staff.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->photo == ''){
            $message = 'Foto harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}

