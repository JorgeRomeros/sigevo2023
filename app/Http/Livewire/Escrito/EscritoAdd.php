<?php

namespace App\Http\Livewire\Escrito;

use App\Models\Escrito;
use Carbon\Carbon;
use Livewire\Component;
use App\Trait\ModalTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class EscritoAdd extends Component
{

    use ModalTrait;
    use WithFileUploads;
    
    public $escrito;
    public $folio;
    public $remitente;
    public $destinatario;

    protected $listeners = [
		'newEscrito',
	];

    protected $rules = [
        'folio' => 'required'
    ];

    public function newEscrito()
    {
        $this->showModal = true;
        $this->escrito = new Escrito();
    }

    public function render()
    {
        return view('livewire.escrito.escrito-add');
    }

    public function addEscrito()
    {
        $this->validate();
        $this->folio = $this->folio;
        $this->escrito->fill([
            'folio' => $this->folio,
            'remitente' => $this->remitente,
            'destinatario' => $this->destinatario,
        ]);
        $this->escrito->save();
        $this->emit('escritoListUpdate');
        //$this->emit('documentListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado el Escrito correctamente!');
    }

}
