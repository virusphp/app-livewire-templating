<div>
    <button type="button" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#exampleModal">
        Tambah
    </button>
    
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Form Barang</h3>
                <button type="button" class="pull-right mt-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="widget-content">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email address</label>
                        <input type="email" class="form-control" wire:model="email" id="exampleFormControlInput2" placeholder="Enter Email">
                        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
