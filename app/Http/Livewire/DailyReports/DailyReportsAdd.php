<?php

namespace App\Http\Livewire\DailyReports;

use Carbon\Carbon;
use Livewire\Component;
use App\Trait\ModalTrait;
use App\Models\DailyReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DailyReportsAdd extends Component
{
    use ModalTrait;
    public $dailyReports;
    public $area;
    public $asunto;
    public $fecha_informe;

    protected $listeners = [
        'newDailyReports',
    ];

    protected $rules = [
        'area' => 'required'
    ];

    public function newDailyReports()
    {
        $this->showModal = true;
        $this->dailyReports = new DailyReport();
    }

    public function render()
    {
        return view('livewire.daily-reports.daily-reports-add');
    }

    public function addDailyReport()
    {
        $this->validate();
        $this->area = $this->area;
        $this->dailyReports->fill([
            'area' => $this->area,
            'asunto' =>$this->asunto,
            'fecha_informe'=>$this->fecha_informe,
        ]);
        $this->dailyReports->save();
        $this->emit('dailyReportsListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado El Reporte Diario correctamente!');
    }
}
