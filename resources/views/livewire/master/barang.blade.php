<div>
    <div class="form-horizontal control-group mb-2">
        @include('livewire.master.create-barang')
        <select wire:model="status" class="pull-right" id="status">
            <option value="1">Aktif</option>
            <option value="2">Non Aktif</option>
        </select>
        <div class="pull-right">
            <label class="control-label" for="pencarian-barang">Pencarian</label>
            <div class="controls">
                <input wire:model="search" type="text" class="span4" id="pencarian-barang" placeholder="Nama barang. . .">
            </div> <!-- /controls -->				
        </div>
    </div>

    <div class="widget widget-table action-table">
        <div class="widget-header"> <i class="icon-th-list"></i>
            <h3>Tabel Barang</h3>
        </div>
        <div class="widget-content">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th> Kode Barang </th>
                        <th> Nama Barang</th>
                        <th> Satuan Besar</th>
                        <th> Isi</th>
                        <th> Satuan Kecil</th>
                        <th> Harga Besar</th>
                        <th> Harga Netto</th>
                        <th> Dosis</th>
                        <th class="td-actions"> Aksi</th>
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
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-small btn-warning"><i class="btn-icon-only icon-edit"> </i></a>
                            <a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-2">
            <div class="pull-left">
                {{ $barangFarmasi->links() }}
            </div>
            <div class="pull-right">
                <div class="counting-page">
                    {{ $barangFarmasi->count() ." Items" }} 
                </div>
            </div>
        </div>

    </div>
</div>
