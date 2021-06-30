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
                  <button type="button" class="btn btn-sm btn-primary" wire:click.prevent="$emit('showModal')">
                    Tambah
                  </button>
                  {{-- Modal --}}
                  @livewire('master.suplier.create-suplier')

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
                            <a href="javascript:;" class="btn btn-sm btn-warning">Edit</a>
                            <a href="javascript:;" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            {{-- {{ $barangFarmasi->count() }} {{ Str::plural('Item', $barangFarmasi->count()) }} --}}
            {{ $suplier->links() }}
          </div>
        </div>
    </div>
</div>