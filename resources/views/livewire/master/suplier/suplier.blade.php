<div>
    <div class="col-12">
        @if (session()->has('message')) 
        <div class="alert bg-success text-white rounded shadow-sm" role="alert">
          <strong>{{ session('message') }}!!</strong>
        </div>
        @endif 
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Suplier </h3>
          </div>
          <div class="card-body border-bottom py-3">
            <div class="d-flex">
              <div class="text-muted">
                   Search:
                <div class="mx-2 d-inline-block">
                  <input wire:model="search" type="text" class="form-control form-control-sm" aria-label="Search Barang">
                </div>
              </div>
              <div class="ms-auto text-muted">
                <div class="ms-2 d-inline-block">
                  <button type="button" class="btn btn-sm btn-primary" wire:click.prevent="$emit('showModal', null)">
                    Tambah
                  </button>
                  {{-- Modal --}}
                  @livewire('master.suplier.modal-suplier')

                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th> Kode Suplier</th>
                        <th> Nama Suplier</th>
                        <th> Alamat</th>
                        <th> Telpon</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suplier as $sup)    
                    <tr>
                        <td>{{ $sup->kdsuplier }}</td>
                        <td>{{ $sup->nmsuplier }}</td>
                        <td>{{ $sup->alamat }}</td>
                        <td>{{ $sup->telpon }}</td>
                        <td>
                            <button wire:click.prevent="$emit('showModal', '{{ $sup->kdsuplier }}')" class="btn btn-sm btn-warning">Edit</button>
                            <button wire:click="delete('{{$sup->kdsuplier}}')" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            {{-- {{ $barangFarmasi->count() }} {{ Str::plural('Item', $barangFarmasi->count()) }} --}}
            {{ $suplier->appends(['search' => 'search'])->render() }}
          </div>
        </div>
    </div>
</div>