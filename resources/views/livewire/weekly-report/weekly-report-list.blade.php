<div>
    <div class="container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Informe Semanal <i class="fa fa-calendar-week"></i></h1>
                    <a wire:click="modalAddWeeklyReport" class="btn btn btn-success me-1 mb-3" href="javascript:void(0)">
                        <i class="fa fa-fw fa-plus opacity-50"></i>
                        <span class="d-none d-sm-inline ms-1">Nuevo Informe Semanal</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="block block-rounded">
                <div class="block-content table-responsive p-1" >
                    <div class="row my-3 px-3">
                        <div class="col-md-2 ms-auto">
                            <label class="text-right">
                                <input type="search" wire:model="search" class="form-control" placeholder="Buscar" >
                            </label>
                        </div>
                    </div>
                    <table class="table table-sm table-vcenter">
                        <x-table-header :columns="$searchColumns" sortColumn="{{$sortColumn}}" sortDirection="{{$sortDirection}}" />
                        <tbody>
                            @foreach ($weeklyReport as $w)
                            <tr>
                                <th>{{$w->elabora}}</th>
                                <th>{{$w->recibe}}</th>
                                <th>{{$w->titulo}}</th>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('weeklyReport.edit',$w->id)}}" class="btn btn-sm text-success" data-bs-toggle="tooltip" title="Editar">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a wire:click="modalDeleteFieldNote({{$w->id}})" href="javascript:void(0)" class="btn btn-sm text-warning"  data-bs-toggle="tooltip" title="Eliminar">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('modals')
    @livewire('weekly-report.weekly-report-add');
    @endpush
</div>

