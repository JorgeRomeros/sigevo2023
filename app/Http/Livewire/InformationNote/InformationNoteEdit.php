<?php

namespace App\Http\Livewire\InformationNote;;

use Livewire\Component;
use App\Models\InformationNote;
use Jantinnerezo\LivewireAlert\LivewireAlert;



class InformationNoteEdit extends Component
{
    use LivewireAlert;
    public InformationNote $informationNote;

    public $folio;
    public $fecha;
    public $lugar;
    public $elaboro;
    public $dirigido_a;
    public $con_copia_para;
    public $descripcion;

    public function mount()
    {
        $this->folio = $this->informationNote->folio;
        $this->fecha = $this->informationNote->fecha;
        $this->lugar = $this->informationNote->lugar;
        $this->elaboro = $this->informationNote->elaboro;
        $this->dirigido_a = $this->informationNote->dirigido_a;
        $this->con_copia_para = $this->informationNote->con_copia_para;
        $this->descripcion = $this->informationNote->descripcion;
    }

    public function updateInformationNote()
    {
        $this->informationNote->update([
        'folio' => $this->folio,
        'fecha' => $this->fecha,
        'lugar' => $this->lugar,
        'elaboro' => $this->elaboro,
        'dirigido_a' => $this->dirigido_a,
        'con_copia_para' => $this->con_copia_para,
        'descripcion' => $this->descripcion,
        ]);
        $this->alert('success','Nota Actualizada Correctamente');
    }

    public function render()
    {
        return view('livewire.information-note.information-note-edit')->extends('layouts.app');
    }
}
