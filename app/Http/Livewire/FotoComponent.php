<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FotoComponent extends Component
{
    use WithPagination;
    public $deleteName, $deleteID, $deleter;
    public $dataField = 'category', $dataOrder = 'desc', $paginate = 10, $search = '';

    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }
    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('foto')->where('id', $id)->first();
        $this->deleteName = $dataDelete->title;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('foto')->where('id', $id)->delete();

        $message = 'Berhasil hapus posts';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }
    public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }
    public function getFoto(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('foto')
                        ->select('id', 'title', 'foto', 'category', 'status')
                        ->where('title', 'like', $sc)
                        ->orderBy($this->dataField, $this->dataOrder)
                        ->paginate($this->paginate);
        } catch (\Throwable $th) {
            return [];
        }
    }
    // refresh page on search
    public function updatedSearch(){
        $this->resetPage();
    }

    public function render(){
        $foto = $this->getFoto();
        return view('livewire.foto-component', compact('foto'));
    }
}
