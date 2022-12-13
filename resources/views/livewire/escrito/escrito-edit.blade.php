<div>
    <!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Actualiza la informacion del Escrito: {{$folio}}</h1>
        </div>
    </div>
</div>
<div class="content">
    <div class="block block-rounded">
        <div class="block-content">
            <!-- Inline Layout -->
            <h2 class="content-heading"></h2>
            <div class="row">
                <div class="col-lg-4">
                <p class="text-muted">
                    Informacion del Escrito
                </p>
                </div>
                <div class="col-lg-8 space-y-2">
                <!-- Form Inline - Default Style -->
                <form wire:submit.prevent="updateEscrito" class="form-control" class="row row-cols-lg-auto g-3 align-items-center">
                    @wire
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Folio"  name="folio"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Remitente"  name="remitente"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Destinatario"  name="destinatario"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Fecha "  name="fecha" type="date"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Lugar"  name="lugar" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Asunto"  name="asunto"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Contenido"  name="contenido"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="C.C.P"  name="ccp" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Elaboro"  name="elaboro"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Telefono"  name="customer_phone"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Sitio Web"  name="customer_website" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Empresa"  name="customer_company"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Proyecto"  name="customer_id_project"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Activo"  name="customer_active"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <x-form-input label="Logo"  name="customer_logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                -->
                    <button type="submit" class="btn btn-alt-primary center">
                        <i class="fa fa-floppy-disk me-1 opacity-50"></i> Actualizar Cliente
                    </button>
                    @endwire
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


