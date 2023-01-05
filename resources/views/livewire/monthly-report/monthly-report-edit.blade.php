<div>
        <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Completa la informacion del <font color="#0d6efd"> Informe Mensual</font>: {{$titulo}}</h1>
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
                            Informacion del Informe Mensual
                        </p>
                        <a type="button" class="btn btn-lg btn-outline-primary" href="{{ url('/mensual') }}">
                            <i class="far fa-hand-point-left"></i> Regresa al listado
                        </a>
                    </div>
                    <div class="col-lg-8 space-y-2">
                        <!-- Form Inline - Default Style -->
                        <form wire:submit.prevent="updateWeeklyReport" class="form-control" class="row row-cols-lg-auto g-3 align-items-center">
                            @wire
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="block block-rounded">
                                        <div class="block-content">
                                            <x-form-input label="elabora"  name="elabora"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="block block-rounded">
                                        <div class="block-content">
                                            <x-form-input label="recibe"  name="recibe" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="block block-rounded">
                                        <div class="block-content">
                                            <x-form-input label="titulo"  name="titulo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="block block-rounded">
                                        <div class="block-content">
                                            <x-form-input label="no_informe_mensual"  name="no_informe_mensual"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="block block-rounded">
                                        <div class="block-content">
                                            <x-form-input label="fecha_inicio_mes"  name="fecha_inicio_mes" type="date" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="block block-rounded">
                                        <div class="block-content">
                                            <x-form-input label="fecha_final_mes"  name="fecha_final_mes" type="date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="block block-rounded">
                                        <div class="block-content">
                                            <x-form-select label="semanas"  name="semanas" />
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
                                <i class="fa fa-floppy-disk me-1 opacity-50"></i> Actualizar Informe Semanal
                            </button>
                            @endwire
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @push('scripts')
            <script src="{{ asset('js/plugins/ckeditor5-build-decoupled-document/ckeditor.js') }}"></script>
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
                    const genericErrorText = `Couldn't upload file: ${ file.name }.`;

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
                        @this.set('file_content', archivo_contenido.getData())
                    })
                })
                .catch( error => {
                console.error( error.stack );
                });

            }
            </script>
        @endpush

</div>
