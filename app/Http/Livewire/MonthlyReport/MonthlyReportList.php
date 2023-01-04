<?php

namespace App\Http\Livewire\MonthlyReport;

use Livewire\Component;
use App\Trait\TableTrait;
use App\Models\MonthlyReport;


class MonthlyReportList extends Component
{
    use TableTrait;
    public $monthlyReport_delete;

    protected $listeners = [
        'monthlyReportListUpdate' => 'render' , 'confirmed'
    ];

    public $sortColumn = 'fieldNote_fecha';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $searchColumns = [
        'monthlyReport_elabora' => 'Elabora',
        'monthlyReport_recibe' => 'Recibe',
        'monthlyReport_titulo' => 'Titulo',
    ];

    public function render()
    {
        $MonthlyReport = MonthlyReport::select('*');

        return view('livewire.monthly-report.monthly-report-list',['MonthlyReport' => $MonthlyReport->get()])->extends('layouts.app');
    }

    public function modalAddMonthlyReport()
    {
        $this->emit('newMonthlyReport');
    }

    public function modalDeleteMonthlyReport($id)
    {
        $this->MonthlyReport_delete = $id;
        $this->alert('question', '¿Deseas eliminar este Reporte Mensual?', [
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
        MonthlyReport::where('id',$this->MonthlyReport_delete)->delete();
        $this->alert('success', '¡Se ha eliminado la Nota de Campo correctamente!');
    }

}
