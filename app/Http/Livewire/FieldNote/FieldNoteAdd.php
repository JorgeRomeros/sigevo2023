<?php

namespace App\Http\Livewire\FieldNote;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\FieldNote;
use App\Trait\ModalTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FieldNoteAdd extends Component
{
    use ModalTrait;

    public $fieldNote;
    public $fecha;
    public $area;
    public $asunto;

    protected $listeners = [
        'newFieldNote',
    ];

    protected $rules = [
        'fecha' => 'required'
    ];

    public function newFieldNote()
    {
        $this->showModal = true ;
        $this->fieldNote = new FieldNote();
    }

    public function render()
    {
        return view('livewire.field-note.field-note-add');
    }

    public function addFieldNote()
    {
        $this->validate();
        $this->fecha = $this->fecha;
        $this->fieldNote->fill([
            'fecha' => $this->fecha,
            'area' => $this->area,
            'asunto' => $this->asunto,
        ]);
        $this->fieldNote->save();
        $this->emit('fieldNoteListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado La nota de campo  correctamente!');

    }

}
