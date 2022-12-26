<?php

namespace App\Http\Livewire\InformationNote;

use Carbon\Carbon;
use Livewire\Component;
use App\Trait\ModalTrait;
use App\Models\InformationNote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InformationNoteAdd extends Component
{
    use ModalTrait;

    public $informationNote;
    public $folio;
    public $fecha;
    public $lugar;

    protected $listeners = [
        'newInformationNote',
    ];

    protected $rules = [
        'folio' => 'required'
    ];

    public function newInformationNote()
    {
        $this->showModal = true;
        $this->informationNote = new InformationNote();
    }

    public function render()
    {
        return view('livewire.information-note.information-note-add');
    }

    public function addInformationNote()
    {
        $this->validate();
        $this->folio = $this->folio;
        $this->informationNote->fill([
            'folio' => $this->folio,
            'fecha' =>$this->fecha,
            'lugar'=>$this->lugar,
        ]);
        $this->informationNote->save();
        $this->emit('informationNoteListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado La nota informativa correctamente!');
    }
}
