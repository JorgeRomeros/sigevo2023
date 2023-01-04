<?php

namespace App\Http\Livewire\MonthlyReport;

use Livewire\Component;
use App\Models\MonthlyReport;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class MonthlyReportEdit extends Component
{
    use LivewireAlert;
    public MonthlyReport $monthlyReport;

    public $elabora;
    public $recibe;
    public $titulo;
    public $imagen;
    public $no_informe_mensual;
    public $fecha_inicio_mes;
    public $fecha_final_mes;
    public $semanas;
    public $descripcion;

    public function mount()
    {
        $this->elabora = $this->monthlyReport->elabora;
        $this->recibe = $this->monthlyReport->recibe;
        $this->titulo = $this->monthlyReport->titulo;
        $this->imagen = $this->monthlyReport->imagen;
        $this->no_informe_mensual = $this->monthlyReport->no_informe_mensual;
        $this->fecha_inicio_mes = $this->monthlyReport->fecha_inicio_mes;
        $this->fecha_final_mes = $this->monthlyReport->fecha_final_mes;
        $this->semanas = $this->monthlyReport->semanas;
        $this->descripcion = $this->monthlyReport->descripcion;
    }
    public function render()
    {
        return view('livewire.monthly-report.monthly-report-edit')->extends('layouts.app');
    }
}
