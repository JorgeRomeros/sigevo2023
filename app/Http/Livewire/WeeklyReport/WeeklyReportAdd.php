<?php

namespace App\Http\Livewire\WeeklyReport;

use Carbon\Carbon;
use Livewire\Component;
use App\Trait\ModalTrait;
use App\Models\WeeklyReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WeeklyReportAdd extends Component
{
    use ModalTrait;

    public $weeklyReport;
    public $elabora;
    public $recibe;
    public $titulo;

    protected $listeners = [
        'newWeeklyReport',
    ];

    protected $rules = [
        'elabora' => 'required'
    ];

    public function newWeeklyReport()
    {
        $this->showModal = true ;
        $this->weeklyReport = new WeeklyReport();
    }

    public function render()
    {
        return view('livewire.weekly-report.weekly-report-add');
    }

    public function addWeeklyReport()
    {
        $this->validate();
        $this->elabora = $this->elabora;
        $this->weeklyReport->fill([
            'elabora' => $this->elabora,
            'recibe' => $this->recibe,
            'titulo' => $this->titulo,
        ]);
        $this->weeklyReport->save();
        $this->emit('weeklyReportListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado El Reporte Semanal  correctamente!');

    }
}
