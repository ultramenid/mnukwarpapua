<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class VisiMisiComponent extends Component
{
    public $content;

    public function mount(){
        $data = DB::table('visidanmisi')->where('id', 1)->first();
        if($data){
            $this->content = $data->content;
        }else{
            $this->content = '';
        }
    }
    public function storeGroups(){
        if($this->manualValidation()){
            DB::table('visidanmisi')
            ->updateOrInsert(
                ['name' => 'visidanmisi', 'id' => 1],
                [
                    'content' => $this->content,
                ]
            );
        //passing to toast
        $message = 'Berhasil memperbarui visi dan misi.';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);
        }
    }

    public function render()
    {
        return view('livewire.visi-misi-component');
    }

    public function manualValidation(){
        if($this->content == ''){
            $message = 'Konten harus di isi.';
            $type = 'error'; //error, success
            $this->emit('toast',$message, $type);
            return;

        }
        return true;
    }
}
