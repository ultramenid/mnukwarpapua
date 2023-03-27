<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class InboxComponent extends Component
{

    use WithPagination;
    public $dataField = 'subject', $dataOrder = 'desc', $paginate = 10, $search = '', $show;
    public $name, $email, $subject, $deskripsi ;

    // refresh page on search
    public function updatedSearch(){
        $this->resetPage();
    }

    public function showData($id){
        $data = DB::table('inbox')->where('id', $id)->first();
        $this->name = $data->name;
        $this->email = $data->email;
        $this->subject = $data->subject;
        $this->deskripsi = $data->deskripsi;
        $this->show = true;
    }

    public function closeDelete(){
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->deskripsi = '';
        $this->show = false;

    }

    public function getInbox(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('inbox')
                        ->select('id', 'name', 'email', 'subject')
                        ->where('subject', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }
    public function render(){
        $inbox = $this->getInbox();
        return view('livewire.inbox-component', compact('inbox'));
    }
}
