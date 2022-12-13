<?php

namespace App\Http\Livewire\Escrito;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Escrito;

class EscritoEdit extends Component
{

    use LivewireAlert;

    public Escrito $escrito;
    public $folio;
    public $remitente;
    public $destinatario;
    public $fecha;
    public $lugar;
    public $asunto;
    public $contenido;
    public $ccp;
    public $elaboro;

    public function mount()
    {
        $this->folio = $this->escrito->folio;
        $this->remitente = $this->escrito->remitente;
        $this->destinatario = $this->escrito->destinatario;
        $this->fecha = $this->escrito->fecha;
        $this->lugar = $this->escrito->lugar;
        $this->asunto = $this->escrito->asunto;
        $this->contenido = $this->escrito->contenido;
        $this->ccp = $this->escrito->ccp;
        $this->elaboro = $this->escrito->elaboro;
    }

    public function render()
    {
        return view('livewire.escrito.escrito-edit')->extends('layouts.app');
    }

    public function updateEscrito()
    {
        $this->escrito->update([
            'folio' => $this->folio,
            'remitente' => $this->remitente,
            'destinatario' => $this->destinatario,
            'fecha' => $this->fecha,
            'lugar' => $this->lugar,
            'asunto' => $this->asunto,
            'contenido' => $this->contenido,
            'ccp' => $this->ccp,
            'elaboro' => $this->elaboro,
        ]);
        $this->alert('success','Escrito Actualizado Correctamente');
    }
}
