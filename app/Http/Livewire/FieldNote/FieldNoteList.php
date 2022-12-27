<?php

namespace App\Http\Livewire\FieldNote;

use Livewire\Component;
use App\Models\FieldNote;
use App\Trait\TableTrait;

class FieldNoteList extends Component
{
    use TableTrait;
    public $fieldNote_delete;

    protected $listeners = [
        'fieldNoteListUpdate' => 'render' , 'confirmed'
    ];

    public $sortColumn = 'fieldNote_fecha';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $searchColumns = [
        'fieldNote_fecha' => 'Fecha',
        'fieldNote_area' => 'Area',
        'fieldNote_asunto' => 'Asunto',
    ];

    public function render()
    {
        $fieldNote = FieldNote::select('*');

        return view('livewire.field-note.field-note-list',['fieldNote' => $fieldNote->get()])->extends('layouts.app');
    }

    public function modalAddFieldNote()
    {
        $this->emit('newFieldNote');
    }

    public function modalDeleteFieldNote($id)
    {
        $this->FieldNote_delete = $id;
        $this->alert('question', '¿Deseas eliminar esta Nota de Campo?', [
            'timer' => null,
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Si',
            'cancelButtonText' => 'No',
            'onDenied' => 'denied',
            'onDismissed' => 'cancelled',
            'onConfirmed' => 'confirmed',
            'confirmButtonColor' => 'red',
            'position' => 'center',
            'icon' => 'warning'

        ]);
    }

    public function confirmed()
    {
        FieldNote::where('id',$this->FieldNote_delete)->delete();
        $this->alert('success', '¡Se ha eliminado la Nota de Campo correctamente!');
    }
}
