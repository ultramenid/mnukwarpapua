<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FooterComponent extends Component
{
    public $deskripsi, $email, $phone, $facebook, $twitter, $instagram;
    public function mount(){
        $data = DB::table('footer')->where('id', 1)->first();
        if($data){
            $this->deskripsi = $data->deskripsi;
            $this->phone = $data->phone;
            $this->email = $data->email;
            $this->facebook = $data->facebook;
            $this->twitter = $data->twitter;
            $this->instagram = $data->instagram;
        }else{
            $this->deskripsi = '';
            $this->phone = '';
            $this->email = '';
            $this->facebook = '';
            $this->twitter = '';
            $this->instagram = '';
        }
    }
    public function storeFooter(){
        if($this->manualValidation()){
            DB::table('footer')
            ->updateOrInsert(
                ['name' => 'footer', 'id' => 1],
                [
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'facebook' => $this->facebook,
                    'twitter' => $this->twitter,
                    'instagram' => $this->instagram,
                    'deskripsi' => $this->deskripsi,
                ]
            );
            //passing to toast
            $message = 'Berhasil memperbarui footer';
            $type = 'success'; //error, success
            $this->emit('toast',$message, $type);
        }
    }
    public function render(){
        return view('livewire.footer-component');
    }
    public function manualValidation(){
        if($this->deskripsi == ''){
            $message = 'Deskripsi harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->deskripsi) > 255){
            $message = 'Deskripsi tidak boleh lebih dari 255 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->email == ''){
            $message = 'Email harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->email) > 60){
            $message = 'Email tidak boleh lebih dari 60 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->phone == ''){
            $message = 'Phone harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->phone) > 60){
            $message = 'Email tidak boleh lebih dari 60 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->facebook == ''){
            $message = 'Facebook harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->facebook) > 60){
            $message = 'Email tidak boleh lebih dari 60 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->twitter == ''){
            $message = 'Twitter harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->twitter) > 60){
            $message = 'Twitter tidak boleh lebih dari 60 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif($this->instagram == ''){
            $message = 'Instagram harus diisi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }elseif(strlen($this->instagram) > 60){
            $message = 'Instagram tidak boleh lebih dari 60 karakter.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;
        }
        return true;
    }
}
