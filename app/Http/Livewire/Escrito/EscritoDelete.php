<?php

namespace App\Http\Livewire\Escrito;

use App\Models\Escrito;
use Livewire\Component;
use App\Trait\ModalTrait;

class EscritoDelete extends Component
{
    use ModalTrait;

    public $escrito;

    protected $listeners = ['deleteEscrito'];

    public function deleteEscrito(Escrito $escrito)
    {
        $this->showModal = true;
        $escrito = delete();
        $this->alert('warning', '!Se ha eliminado el escrito correctamente¡');
    }

    public function render()
    {
        return view('livewire.escrito.escrito-delete');
    }
}
