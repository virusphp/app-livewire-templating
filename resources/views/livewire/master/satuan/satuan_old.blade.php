<div>
    <div class="col-12">
        @if (session()->has('message')) 
        <div class="alert bg-success text-white rounded shadow-sm" role="alert">
          <strong>{{ session('message') }}!!</strong>
          {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
        @endif 
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Satuan </h3>
          </div>
          <div class="card-body border-bottom py-3">
            <div class="d-flex">
              <div class="text-muted">
                   Search:
                <div class="mx-2 d-inline-block">
                  <input wire:model="search" type="text" class="form-control form-control-sm" aria-label="Search Unit">
                </div>
              </div>
              <div class="ms-auto text-muted">
                <div class="ms-2 d-inline-block">
                  <button type="button" class="btn btn-sm btn-primary" wire:click.prevent="$emit('showModal', null)">
                    Tambah
                  </button>
                  {{-- Modal --}}
                  @livewire('master.satuan.modal-satuan')

                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th> Kode Satuan</th>
                        <th> Nama Satuan</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($satuans as $satuan)    
                    <tr>
                        <td>{{ $satuan->idsatuan }}</td>
                        <td>{{ $satuan->nmsatuan }}</td>
                        <td>
                          <button wire:click.prevent="$emit('showModal', '{{ $satuan->idsatuan }}')" class="btn btn-sm btn-warning">Edit</button>
                          <button wire:click="delete('{{$satuan->idsatuan}}')" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            {{ $satuans->links() }}
          </div>
        </div>
    </div>
</div>