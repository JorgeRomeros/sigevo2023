<?php

namespace App\Http\Livewire\DailyReports;

use Livewire\Component;
use App\Trait\TableTrait;
use App\Models\DailyReport;


class DailyReportsList extends Component
{
    use TableTrait;
    public $dailyReport_delete;

    protected $listeners = [
        'dailyReportsListUpdate' => 'render','confirmed'
    ];

    public $sortColumn = 'dailyReports_area';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $searchColumns = [
        'dailyReports_area' => 'Area',
        'dailyReports_asunto' => 'Asunto',
        'dailyReports_fecha_informe' => 'Fecha Informe',
    ];

    public function render()
    {
        $dailyReports = DailyReport::select('*');

        return view('livewire.daily-reports.daily-reports-list',['dailyReports' => $dailyReports->get()])->extends('layouts.app');
    }

    public function modalAddDailyReport()
    {
        $this->emit('newDailyReports');
    }

    public function modalDeletedailyReport($id)
    {
        $this->dailyReport_delete = $id;
        $this->alert('question', '¿Deseas eliminar este Reporte?', [
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
        DailyReport::where('id',$this->dailyReport_delete)->delete();
        $this->alert('success', '¡Se ha eliminado el Reporte Diario correctamente!');
    }
}
