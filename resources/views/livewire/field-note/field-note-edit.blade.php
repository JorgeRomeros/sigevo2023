<div>
    <!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Actualiza la informacion de la <font color="#0d6efd"> Nota de Campo</font>: {{$asunto}}</h1>
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
                    Informacion de la Nota de campo
                </p>
                <a type="button" class="btn btn-lg btn-outline-primary" href="{{ url('/notacampo') }}">
                    <i class="far fa-hand-point-left"></i> Regresa al listado
                </a>
                </div>
                <div class="col-lg-8 space-y-2">
                    <!-- Form Inline - Default Style -->
                    <form wire:submit.prevent="updateFieldNote" class="form-control" class="row row-cols-lg-auto g-3 align-items-center">
                        @wire
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="area"  name="area"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="fecha"  name="fecha" type="date"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="asunto"  name="asunto" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="elaboro"  name="elaboro" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="recibio"  name="recibio"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="aporbado"  name="aporbado"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="descripcion"  name="descripcion" type="text" placeholder="aqui va el ckeditor :)"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="block block-rounded">
                                    <div class="block-content">
                                        <x-form-input label="Contenido"  name="contenido"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    -->
                <!--
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
                            <i class="fa fa-floppy-disk me-1 opacity-50"></i> Actualizar Nota de campo
                        </button>
                        @endwire
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
