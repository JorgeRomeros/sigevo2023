<?php

namespace App\Http\Livewire\StandarMinute;

use Livewire\Component;
use App\Models\StandarMinute;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class StandarMinuteEdit extends Component
{
    use LivewireAlert;
    public StandarMinute $standarMinute;
    public $folio;
    public $asunto;
    public $tema;
    public $lugar;
    public $tramo;
    public $agenda;
    public $dirigido_a;
    public $fecha_inicio;
    public $hora_inicio;
    public $fecha_proxima_reunion;
    public $hora_programada;
    public $hora_cierre;

    public function mount()
    {
        $this->folio = $this->standarMinute->folio;
        $this->asunto = $this->standarMinute->asunto;
        $this->tema = $this->standarMinute->tema;
        $this->lugar = $this->standarMinute->lugar;
        $this->tramo = $this->standarMinute->tramo;
        $this->agenda = $this->standarMinute->agenda;
        $this->dirigido_a = $this->standarMinute->dirigido_a;
        $this->fecha_inicio = $this->standarMinute->fecha_inicio;
        $this->hora_inicio = $this->standarMinute->hora_inicio;
        $this->fecha_proxima_reunion = $this->standarMinute->fecha_proxima_reunion;
        $this->hora_programada = $this->standarMinute->hora_programada;
        $this->hora_cierre = $this->standarMinute->hora_cierre;
    }

    public function render()
    {
        return view('livewire.standar-minute.standar-minute-edit')->extends('layouts.app');
    }

    public function updateStandarMinute()
    {
        $this->standarMinute->update([
            'folio' => $this->folio,
            'asunto' => $this->asunto,
            'tema' => $this->tema,
            'lugar' => $this->lugar,
            'tramo' => $this->tramo,
            'agenda' => $this->agenda,
            'dirigido_a' => $this->dirigido_a,
            'fecha_inicio' => $this->fecha_inicio,
            'hora_inicio' => $this->hora_inicio,
            'fecha_proxima_reunion' => $this->fecha_proxima_reunion,
            'hora_programada' => $this->hora_programada,
            'hora_cierre' => $this->hora_cierre,
        ]);
        $this->alert('success','Minuta Actualizado Correctamente');
    }
}
