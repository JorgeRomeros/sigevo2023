<?php

namespace App\Http\Livewire\Escrito;

use App\Models\Escrito;
use Carbon\Carbon;
use Livewire\Component;
use App\Trait\ModalTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EscritoAdd extends Component
{

    use ModalTrait;
    public $escrito;
    public $escrito_folio;
    public $escrito_remitente;
    public $escrito_destinatario;

    protected $listeners = [
		'newEscrito',
	];

    protected $rules = [
        'escrito_folio' => 'required'
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
        $this->escrito_folio = $this->escrito_folio;
        $this->escrito->fill([
            'escrito_folio' => $this->escrito_folio,
            'escrito_remitente' => $this->escrito_remitente,
            'escrito_destinatario' => $this->escrito_destinatario,
        ]);
        $this->escrito->save();
        $this->emit('escritoListUpdate');
        //$this->emit('documentListUpdate');
        $this->close();
        $this->alert('success', '¡Se ha agregado el Escrito correctamente!');
    }

}
