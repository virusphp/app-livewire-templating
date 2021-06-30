<div>
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Barang </h3>
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
                  @include('livewire.master.barang.create-barang')
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
              <thead>
                <tr>
                    <th> Kode Barang</th>
                    <th> Nama Barang</th>
                    <th> Satuan Besar</th>
                    <th> Isi</th>
                    <th> Satuan Kecil</th>
                    <th> Harga Besar</th>
                    <th> Harga Netto</th>
                    <th> Dosis</th>
                    <th> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($barangFarmasi as $barang)
                <tr>
                    <td> {{ $barang->kd_barang }} </td>
                    <td> {{ $barang->nama_barang }} </td>
                    <td> {{ $barang->kd_satuan_besar }} </td>
                    <td> {{ $barang->isi_satuan_besar }} </td>
                    <td> {{ $barang->kd_satuan_kecil }} </td>
                    <td> {{ money_to_dec($barang->harga_satuan_besar) }} </td>
                    <td> {{ money_to_dec($barang->harga_satuan_netto) }} </td>
                    <td> {{ $barang->dosis }} </td>
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
            {{ $barangFarmasi->links() }}
          </div>
        </div>
    </div>
</div>
@include('master.barang.modal-create')