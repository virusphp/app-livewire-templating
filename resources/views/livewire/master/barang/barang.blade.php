<div>
    <div class="row">
        <div class="col-lg-12">
            @if (session()->has('message')) 
            <div class="alert bg-success text-white rounded shadow-sm" role="alert">
              <strong>{{ session('message') }}!!</strong>
            </div>
            @endif 
            <div class="card rounded-lg">
                <div class="card-header d-flex-align-items-center pb-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item float-left">
                            <h4> Barang</h4>
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="d-none d-md-block">
                                <a disabled href="x" class="btn btn-sm btn-primary mb-3 mr-auto">
                                    <i class="c-icon fa fa-plus"></i>
                                    Barang
                                </a>
                            </div>
                            <div class="d-md-none float-right">
                                <a disabled href="x" class="btn btn-sm btn-primary mb-3">
                                    <i class="fas fa-plus"></i>
                                </a>
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
                                    <th>#</th>
                                    <th>KODE BARANG</th>
                                    <th>NAMA BARANG</th>
                                    <th>SATUAN BESAR</th>
                                    <th>SATUAN KECIL</th>
                                    <th>HARGA SATUAN BESAR</th>
                                    <th>HARGA SATUAN KECIL</th>
                                    <th>ISI SATUAN</th>
                                    <th>DOSIS</th>
                                    <th class="text-right">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangFarmasi as $barang)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>   
                                    <td>{{ $barang->kd_barang }}</td>   
                                    <td>{{ $barang->nama_barang }}</td>   
                                    <td>{{ $barang->kd_satuan_besar }}</td>   
                                    <td>{{ $barang->kd_satuan_kecil }}</td>   
                                    <td>{{ $barang->harga_satuan_besar }}</td>   
                                    <td>{{ $barang->harga_satuan_netto }}</td>   
                                    <td>{{ $barang->isi_satuan_besar }}</td>   
                                    <td>{{ $barang->dosis }}</td>   
                                    <td>
                                        <button class="btn btn-sm btn-danger">Delete</button>     
                                    </td>   
                                </tr> 
                                @endforeach
                            </tbody>
                            </table>
                            {{ $barangFarmasi->appends(['search' => 'search'])->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('master.barang.modal-create')
</div>