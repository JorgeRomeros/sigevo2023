<?php

namespace App\Http\Livewire\Escrito;

use Livewire\Component;
use App\Trait\TableTrait;
use App\Models\Escrito;

class EscritoList extends Component
{
    use TableTrait;
    public $escrito_delete;
    protected $listeners =[
        'escritoListUpdate' => 'render',
        'confirmed'
    ];

    public $sortColumn = 'escrito_folio';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $searchColumns = [
        'escrito_folio' => 'Folio',
        'escrito_remitente' => 'Remitente',
        'escrito_destinatario' => 'Destinatario',
    ];

    public function render()
    {
        $escrito = Escrito::select('*');

        return view('livewire.escrito.escrito-list',['escrito' => $escrito->get()])->extends('layouts.app');
    }

    public function modalAddEscrito()
    {
        $this->emit('newEscrito');
    }

    public function modalDeleteEscrito($id)
    {
        $this->escrito_delete = $id;
        $this->alert('question', '¿Deseas eliminar este Escrito?', [
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
        Escrito::where('id',$this->escrito_delete)->delete();
        $this->alert('success', '¡Se ha eliminado el Escrito correctamente!');
    }

}
