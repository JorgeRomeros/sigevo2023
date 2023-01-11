<div>
    <!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Actualiza la informacion del Escrito: {{$folio}}</h1>
            <a type="button" class="btn btn-lg btn-outline-primary" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Regresa a los escritos" href="{{ url('/escrito') }}">
                <i class="far fa-hand-point-left"></i>
            </a><br>
            <br>
            <a type="button" class="btn btn-lg btn-outline-success" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Menú de formatos" href="{{ url('/formatos') }}">
                <i class="fa fa-laptop-file"></i>
            </a>
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
                    <!-- test --->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="block-content p-0">
                                @wire
                                <h3 class="block-title">Edita el contenido del Escrito</h3>
                                <div class="row push">
                                    <div class="col-lg-12" wire:ignore wire:key="MyId">
                                        <div class="toolbar-container"></div>
                                        <div id="archivo_contenido" name="dm-post-edit-body" style="height: 350px;">
                                            {!! $contenido !!}
                                        </div>
                                    </div>
                                </div>
                                @endwire
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-alt-primary center">
                        <i class="fa fa-floppy-disk me-1 opacity-50"></i> Actualizar Escrito
                    </button>
                    @endwire
                </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{ asset('js/plugins/ckeditor5-document/ckeditor.js') }}"></script>
    <script src="{{ asset('js/plugins/dropzone/min/dropzone.min.js') }}"></script>

    <script>

    class MyUploadAdapter {
        constructor( loader ) {
            // The file loader instance to use during the upload.
            this.loader = loader;
        }

        // Starts the upload process.
        upload() {
            return this.loader.file
                .then( file => new Promise( ( resolve, reject ) => {
                    this._initRequest();
                    this._initListeners( resolve, reject, file );
                    this._sendRequest( file );
                } ) );
        }

        // Aborts the upload process.
        abort() {
            if ( this.xhr ) {
                this.xhr.abort();
            }
        }


            // Initializes the XMLHttpRequest object using the URL passed to the constructor.
        _initRequest() {
            const xhr = this.xhr = new XMLHttpRequest();

            // Note that your request may look different. It is up to you and your editor
            // integration to choose the right communication channel. This example uses
            // a POST request with JSON as a data structure but your configuration
            // could be different.
            xhr.open( 'POST', '{{ route('images.store') }}', true ); //aqui se especifica la ruta del controlador
            xhr.setRequestHeader('x-csrf-token','{{ csrf_token() }}'); //esta linea no se ve en el ejemplo pero basicamente son tokens de seguridad
            xhr.responseType = 'json';
        }

        // Initializes XMLHttpRequest listeners.
        _initListeners( resolve, reject, file ) {
            const xhr = this.xhr;
            const loader = this.loader;
            const genericErrorText = `Couldn't upload file: ${ file.name }`;

            xhr.addEventListener( 'error', () => reject( genericErrorText ) );
            xhr.addEventListener( 'abort', () => reject() );
            xhr.addEventListener( 'load', () => {
                const response = xhr.response;

                // This example assumes the XHR server's "response" object will come with
                // an "error" which has its own "message" that can be passed to reject()
                // in the upload promise.
                //
                // Your integration may handle upload errors in a different way so make sure
                // it is done properly. The reject() function must be called when the upload fails.
                if ( !response || response.error ) {
                    return reject( response && response.error ? response.error.message : genericErrorText );
                }

                // If the upload is successful, resolve the upload promise with an object containing
                // at least the "default" URL, pointing to the image on the server.
                // This URL will be used to display the image in the content. Learn more in the
                // UploadAdapter#upload documentation.
                resolve( {
                    default: response.url
                } );
            } );

            // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
            // properties which are used e.g. to display the upload progress bar in the editor
            // user interface.
            if ( xhr.upload ) {
                xhr.upload.addEventListener( 'progress', evt => {
                    if ( evt.lengthComputable ) {
                        loader.uploadTotal = evt.total;
                        loader.uploaded = evt.loaded;
                    }
                } );
            }
        }

    // Prepares the data and sends the request.
    _sendRequest( file ) {
        // Prepare the form data.
        const data = new FormData();

        data.append( 'upload', file );

        // Important note: This is the right place to implement security mechanisms
        // like authentication and CSRF protection. For instance, you can use
        // XMLHttpRequest.setRequestHeader() to set the request headers containing
        // the CSRF token generated earlier by your application.

        // Send the request.
        this.xhr.send( data );
    }
}


    function MyCustomUploadAdapterPlugin( editor ) {
        editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
            // Configure the URL to the upload script in your back-end here!
            return new MyUploadAdapter( loader );
        };
    }

        if (document.querySelector("#archivo_contenido")) {

            DecoupledEditor.create(document.querySelector("#archivo_contenido"), {
            extraPlugins: [ MyCustomUploadAdapterPlugin ]
        } )

        .then(archivo_contenido => {
            const toolbarContainer = document.querySelector( 'main .toolbar-container' );
            toolbarContainer.prepend( archivo_contenido.ui.view.toolbar.element );
            window.archivo_contenido = archivo_contenido;
            archivo_contenido.model.document.on('change:data', () => {
                console.log(archivo_contenido.getData())
                @this.set('contenido', archivo_contenido.getData())
            })
        })
        .catch( error => {
        console.error( error.stack );
        });

    }
    </script>
@endpush
</div>


