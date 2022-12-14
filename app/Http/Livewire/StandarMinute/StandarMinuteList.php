<?php

namespace App\Http\Livewire\StandarMinute;

use Livewire\Component;
use App\Trait\TableTrait;
use App\Models\StandarMinute;


class StandarMinuteList extends Component
{
    use TableTrait;
    public $standarMinute_delete;
    protected $listeners = [
        'standarMinuteListUpdate' => 'render', 'confirmed'
    ];

    public $sortColumn = 'minuta_folio';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $searchColumns = [
        'minuta_folio' => 'Folio',
        'minuta_asunto' => 'Asunto',
        'minuta_tema' => 'Tema',
    ];

    public function render()
    {
        $standarMinute = StandarMinute::select('*');

        return view('livewire.standar-minute.standar-minute-list',['standarMinute' => $standarMinute->get()])->extends('layouts.app');
    }

    public function modalAddStandarMinute()
    {
        $this->emit('newStandarMinute');
    }

    public function modalDeleteStandarMinute($id)
    {
        $this->standarMinute_delete = $id;
        $this->alert('question', '¿Deseas eliminar esta Minuta?', [
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
        Escrito::where('id',$this->standarMinute_delete)->delete();
        $this->alert('success', '¡Se ha eliminado el Escrito correctamente!');
    }
}
