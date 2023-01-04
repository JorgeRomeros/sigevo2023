<?php

namespace App\Http\Livewire\MonthlyReport;

use Carbon\Carbon;
use Livewire\Component;
use App\Trait\ModalTrait;
use App\Models\MonthlyReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class MonthlyReportAdd extends Component
{
    use ModalTrait;

    public $MonthlyReport;
    public $elabora;
    public $recibe;
    public $titulo;

    protected $listeners = [
        'newMonthlyReport',
    ];

    protected $rules = [
        'elabora' => 'required'
    ];

    public function newMonthlyReport()
    {
        $this->showModal = true ;
        $this->MonthlyReport = new MonthlyReport();
    }

    public function render()
    {
        return view('livewire.monthly-report.monthly-report-add');
    }

    public function addMonthlyReport()
    {
        $this->validate();
        $this->elabora = $this->elabora;
        $this->MonthlyReport->fill([
            'elabora' => $this->elabora,
            'recibe' => $this->recibe,
            'titulo' => $this->titulo,
        ]);
        $this->MonthlyReport->save();
        $this->emit('monthlyReportListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado El Reporte Semanal  correctamente!');
    }

}
