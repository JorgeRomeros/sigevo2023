
<div>
    <div class="modal @if ($showModal) show @endif" @if ($showModal) style="display:block; overflow-y:auto;" @endif id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <x-form wire:submit.prevent="addFieldNote">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Nueva Nota informativa</h3>
                            <div class="block-options">
                                <button type="button" wire:click="close()" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content pb-3">
                            @wire
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <x-form-input name="fecha" label="Fecha" required type="date"/>
                                </div>
                                <div class="col-lg-12">
                                    <x-form-input name="area" label="Area"  />
                                </div>
                                <div class="col-lg-12">
                                    <x-form-input name="asunto" label="Asunto" />
                                </div>
                            </div>
                            @endwire
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" wire:click="close()" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <x-form-submit>Guardar</x-form-submit>
                        </div>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
</div>
