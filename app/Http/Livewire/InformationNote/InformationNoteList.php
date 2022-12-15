<?php

namespace App\Http\Livewire\InformationNote;

use Livewire\Component;
use App\Trait\TableTrait;
use App\Models\InformationNote;


class InformationNoteList extends Component
{
    use TableTrait;
    public $informationNote_delete;

    protected $listeners = [
        'informationNoteListUpdate' => 'render' , 'confirmed'
    ];

    public $sortColumn = 'informationNote_folio';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $searchColumns = [
        'informationNote_folio' => 'Folio',
        'informationNote_fecha' => 'Fecha',
        'informationNote_lugar' => 'Lugar',
    ];

    public function render()
    {
        $informationNote = InformationNote::select('*');

        return view('livewire.information-note.information-note-list',['informationNote' => $informationNote->get()])->extends('layouts.app');
    }

    public function modalAddInformationNote()
    {
        $this->emit('newInformationNote');
    }

    public function modalDeleteInformationNote($id)
    {
        $this->InformationNote_delete = $id;
        $this->alert('question', '¿Deseas eliminar esta Nota Informativa?', [
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
        InformationNote::where('id',$this->InformationNote_delete)->delete();
        $this->alert('success', '¡Se ha eliminado el Reporte Diario correctamente!');
    }
}
