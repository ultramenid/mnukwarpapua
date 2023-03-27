<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditStaffComponent extends Component
{
    use WithFileUploads;
    public $uphoto, $photo, $nama, $deskripsi, $posisi, $status, $idStaff;

    public function mount($id){
        $data = DB::table('staff')->where('id', $id)->first();

        $this->idStaff = $id;
        $this->nama = $data->nama;
        $this->deskripsi = $data->deskripsi;
        $this->posisi = $data->posisi;
        $this->status = $data->status;
        $this->uphoto = $data->foto;

    }

    public function uploadImage(){
        $file = $this->photo->store('public/files/photos');
        $foto = $this->photo->hashName();

        return $foto;
    }

    public function storeStaff(){
        if($this->manualValidation()){
            if(!$this->photo){
                $name = $this->uphoto;
            }else{
                Storage::delete('public/files/photos/'.$this->uphoto);
                $name =  $this->uploadImage();
            }
                DB::table('staff')
                ->where('id', $this->idStaff)
                ->update([
                    'foto' => $name,
                    'nama' => $this->nama,
                    'deskripsi' => $this->deskripsi,
                    'posisi' => $this->posisi,
                    'status' => $this->status,
                    'updated_at' => Carbon::now('Asia/Jakarta')
                ]);

            //passing to toast
            $message = 'Berhasil memperbarui data staff';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);

        }
    }

    public function render(){
        return view('livewire.edit-staff-component');
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
        }
        return true;
    }
}
