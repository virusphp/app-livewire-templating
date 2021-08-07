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
            <h3 class="card-title">Data Unit </h3>
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
                  @livewire('master.unit.modal-unit')

                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th> Kode Unit</th>
                        <th> Nama Unit</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($units as $unit)    
                    <tr>
                        <td>{{ $unit->kdbagian }}</td>
                        <td>{{ $unit->nmbagian }}</td>
                        <td>
                          <button wire:click.prevent="$emit('showModal', '{{ $unit->kdbagian }}')" class="btn btn-sm btn-warning">Edit</button>
                          <button wire:click="delete('{{$unit->kdbagian}}')" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            {{ $units->links() }}
          </div>
        </div>
    </div>
</div>