<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class PostsComponent extends Component
{
    use WithPagination;
    public $deleteName, $deleteID, $deleter;

    public $dataField = 'title', $dataOrder = 'desc', $paginate = 10, $search = '';

    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }
    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('posts')->where('id', $id)->first();
        $this->deleteName = $dataDelete->title;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('posts')->where('id', $id)->delete();

        $message = 'Berhasil hapus posts';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }
    public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }
    public function getPosts(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('posts')
                        ->select('id', 'title', 'img', 'category', 'status')
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
        $posts = $this->getPosts();
        return view('livewire.posts-component', compact('posts'));
    }
}
