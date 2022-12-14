<?php

namespace App\Http\Livewire\StandarMinute;

use Carbon\Carbon;
use Livewire\Component;
use App\Trait\ModalTrait;
use App\Models\StandarMinute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StandarMinuteAdd extends Component
{

    use ModalTrait;
    public $standarMinute;
    public $folio;
    public $asunto;
    public $tema;

    protected $listeners = [
        'newStandarMinute',
    ];
    protected $rules = [
        'folio' => 'required'
    ];

    public function newStandarMinute()
    {
        $this->showModal = true;
        $this->standarMinute = new StandarMinute();
    }

    public function render()
    {
        return view('livewire.standar-minute.standar-minute-add');
    }

    public function addStandarMinute()
    {
        $this->validate();
        $this->folio = $this->folio;
        $this->standarMinute->fill([
            'folio' => $this->folio,
            'asunto' =>$this->asunto,
            'tema'=>$this->tema,
        ]);
        $this->standarMinute->save();
        $this->emit('standarMinuteListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado la Minuta correctamente!');
    }

}
