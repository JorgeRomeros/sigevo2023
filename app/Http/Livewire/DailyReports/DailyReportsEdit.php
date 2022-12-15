<?php

namespace App\Http\Livewire\DailyReports;

use Livewire\Component;
use App\Models\DailyReport;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DailyReportsEdit extends Component
{
    use LivewireAlert;

    public DailyReport $dailyReports;
    public $area;
    public $asunto;
    public $fecha_informe;
    public $entidad_emite;
    public $entidad_recibe;
    public $aprueba;
    public $enterado;
    public $actividades;

    public function mount()
    {
        $this->area = $this->dailyReports->area;
        $this->asunto = $this->dailyReports->asunto;
        $this->fecha_informe = $this->dailyReports->fecha_informe;
        $this->entidad_emite = $this->dailyReports->entidad_emite;
        $this->entidad_recibe = $this->dailyReports->entidad_recibe;
        $this->aprueba = $this->dailyReports->aprueba;
        $this->enterado = $this->dailyReports->enterado;
        $this->actividades = $this->dailyReports->actividades;
    }

    public function updateDailyReports()
    {
        $this->DailyReports->update([
        'area' => $this->area,
        'asunto' => $this->asunto,
        'fecha_informe' => $this->fecha_informe,
        'entidad_emite' => $this->entidad_emite,
        'entidad_recibe' => $this->entidad_recibe,
        'aprueba' => $this->aprueba,
        'enterado' => $this->enterado,
        'actividades' => $this->actividades,
        ]);
        $this->alert('success','Minuta Actualizado Correctamente');
    }

    public function render()    {
        return view('livewire.daily-reports.daily-reports-edit')->extends('layouts.app');
    }
}
