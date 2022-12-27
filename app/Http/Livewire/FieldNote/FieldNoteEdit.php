<?php

namespace App\Http\Livewire\FieldNote;

use Livewire\Component;
use App\Models\FieldNote;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class FieldNoteEdit extends Component
{
    use LivewireAlert;
    public FieldNote $fieldNote;

    public $fecha;
    public $area;
    public $asunto;
    public $elaboro;
    public $recibio;
    public $aporbado;
    public $descripcion;

    public function mount()
    {
        $this->fecha = $this->fieldNote->fecha;
        $this->area = $this->fieldNote->area;
        $this->asunto = $this->fieldNote->asunto;
        $this->elaboro = $this->fieldNote->elaboro;
        $this->recibio = $this->fieldNote->recibio;
        $this->aporbado = $this->fieldNote->aporbado;
        $this->descripcion = $this->fieldNote->descripcion;
    }

    public function updateFieldNote()
    {
        $this->fieldNote->update([
            'fecha' => $this->fecha,
            'area' => $this->area,
            'asunto' => $this->asunto,
            'elaboro' => $this->elaboro,
            'recibio' => $this->recibio,
            'aporbado' => $this->aporbado,
            'descripcion' => $this->descripcion,
        ]);
        $this->alert('success','Nota Actualizada Correctamente');
    }

    public function render()
    {
        return view('livewire.field-note.field-note-edit')->extends('layouts.app');
    }
}
