<?php

namespace App\Http\Livewire\WeeklyReport;

use Livewire\Component;
use App\Models\WeeklyReport;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class WeeklyReportEdit extends Component
{
    use LivewireAlert;
    public WeeklyReport $weeklyReport;

    public $elabora;
    public $recibe;
    public $titulo;
    public $imagen;
    public $no_informe;
    public $fecha_inicio_semana;
    public $fehca_final_semana;
    public $descripcion;

    public function mount()
    {
        $this->elabora = $this->weeklyReport->elabora;
        $this->recibe = $this->weeklyReport->recibe;
        $this->titulo = $this->weeklyReport->titulo;
        $this->imagen = $this->weeklyReport->imagen;
        $this->no_informe = $this->weeklyReport->no_informe;
        $this->fecha_inicio_semana = $this->weeklyReport->fecha_inicio_semana;
        $this->fehca_final_semana = $this->weeklyReport->fehca_final_semana;
        $this->descripcion = $this->weeklyReport->descripcion;
    }

    function updateWeeklyReport()
    {
        $this->weeklyReport->update([
            'elabora' => $this->elabora,
            'recibe' => $this->recibe,
            'titulo' => $this->titulo,
            'imagen' => $this->imagen,
            'no_informe' => $this->no_informe,
            'fecha_inicio_semana' => $this->fecha_inicio_semana,
            'fehca_final_semana' => $this->fehca_final_semana,
            'descripcion' => $this->descripcion,
        ]);
        $this->alert('success','Informe Semanal Actualizado Correctamente');
    }

    public function render()
    {
        return view('livewire.weekly-report.weekly-report-edit')->extends('layouts.app');
    }
}
