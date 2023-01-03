<?php

namespace App\Http\Livewire\WeeklyReport;

use Livewire\Component;
use App\Trait\TableTrait;
use App\Models\WeeklyReport;

class WeeklyReportList extends Component
{
    use TableTrait;
    public $weeklyReport_delete;

    protected $listeners = [
        'weeklyReportListUpdate' => 'render' , 'confirmed'
    ];

    public $sortColumn = 'weeklyReport_elabora';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $searchColumns = [
        'weeklyReoort_elabora' => 'Elabora',
        'weeklyReoort_recibe' => 'Recibe',
        'weeklyReoort_titulo' => 'Titulo',
    ];

    public function render()
    {
        $weeklyReport = WeeklyReport::select('*');

        return view('livewire.weekly-report.weekly-report-list',['weeklyReport' => $weeklyReport->get()])->extends('layouts.app');
    }

    public function modalAddWeeklyReport()
    {
        $this->emit('newWeeklyReport');
    }

    public function modalDeleteWeeklyReport($id)
    {
        $this->weeklyReport_delete = $id;
        $this->alert('question', '¿Deseas eliminar este Reporte Semanal?', [
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
        WeeklyReport::where('id',$this->WeeklyReport_delete)->delete();
        $this->alert('success', '¡Se ha eliminado el Informe Semanal correctamente!');
    }
}
