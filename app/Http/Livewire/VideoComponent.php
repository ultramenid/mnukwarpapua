<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class VideoComponent extends Component
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
        $dataDelete = DB::table('video')->where('id', $id)->first();
        $this->deleteName = $dataDelete->title;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('video')->where('id', $id)->delete();

        $message = 'Berhasil hapus posts';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }
    public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }
    public function getVideo(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('video')
                        ->select('id', 'title', 'video', 'category', 'status')
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
        $video = $this->getVideo();
        return view('livewire.video-component', compact('video'));
    }
}
