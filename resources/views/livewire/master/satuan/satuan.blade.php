<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-lg">
                <div class="card-header d-flex-align-items-center pb-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item float-left">
                            <h4> Satuan</h4>
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="d-none d-md-block">
                                <button type="button" class="btn btn-sm btn-primary" wire:click.prevent="$emit('showModal', null)">
                                    <i class="fas fa-plus"></i> Tambah
                                </button>
                            </div>
                            <div class="d-md-none float-right">
                                <button type="button" class="btn btn-sm btn-primary" wire:click.prevent="$emit('showModal', null)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex float-right">
                                <div class="form-group my-2 mx-2">
                                    <div class="controls">
                                        <div class="input-group">
                                            <input class="form-control form-control-sm" wire:model="search" size="16" type="text">
                                            <span class="input-group-append">
                                                <button id="cari-button" class="btn btn-sm btn-secondary" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="tabel-registrasi" class="table table-sm table-hover table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Satuan</th>
                                    <th class="text-center">Nama Satuan</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($satuans as $satuan)    
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $satuan->idsatuan }}</td>
                                    <td class="text-center">{{ $satuan->nmsatuan }}</td>
                                    <td class="text-center">
                                        <button wire:click.prevent="$emit('showModal', '{{ $satuan->idsatuan }}')" class="btn btn-sm btn-warning">Edit</button>
                                        <button wire:click="delete('{{$satuan->idsatuan}}')" class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{ $satuans->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    @livewire('master.satuan.modal-satuan')
</div>