<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class StaffComponent extends Component
{
    use WithPagination;
    public $deleteName, $deleteID, $deleter;
    public $dataField = 'nama', $dataOrder = 'desc', $paginate = 10, $search = '';

    public function closeDelete(){
        $this->deleter = false;
        $this->deleteName = null;
        $this->deleteID = null;
    }
    public function delete($id){

        //load data to delete function
        $dataDelete = DB::table('staff')->where('id', $id)->first();
        $this->deleteName = $dataDelete->nama;
        $this->deleteID = $dataDelete->id;

        $this->deleter = true;
    }
    public function deleting($id){
        DB::table('staff')->where('id', $id)->delete();

        $message = 'Berhasil hapus staff';
        $type = 'success'; //error, success
        $this->emit('toast',$message, $type);


        $this->closeDelete();
    }
    public function sortingField($field){
        $this->dataField = $field;
        $this->dataOrder = $this->dataOrder == 'asc' ? 'desc' : 'asc';
    }
    public function getStaff(){
        $sc = '%' . $this->search . '%';
        try {
            return  DB::table('staff')
                        ->select('id', 'nama', 'posisi', 'foto', 'status')
                        ->where('nama', 'like', $sc)
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
        $staff = $this->getStaff();
        return view('livewire.staff-component', compact('staff'));
    }
}
