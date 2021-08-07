<div>
    <div class="modal fade @if($show === true) show @endif" 
       id="modal-form" 
       tabindex="-1" 
       role="dialog"
       style="display: @if($show === true) block @else none @endif;" 
       aria-hidden="true">
       <div class="modal-dialog modal-md" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Data Satuan</h5>
                   <button type="button" class="btn-close" aria-label="Close" wire:click.prevent="doClose()">
                    <span aria-hidden="true">x</span>
                </button>
               </div>
               <div class="modal-body">
                   <div class="form-group mb-0 row">
                       <label class="form-label col-3 col-form-label">Nama Satuan</label>
                       <div class="col">
                           <input wire:model="namaSatuan" type="text" class="form-control form-control-sm" placeholder="Nama Satuan">
                           @if($errors->has('namaSatuan'))
                               <p style="color:red;">{{ $errors->first('namaSatuan') }}</p>
                           @endif
                       </div>
                   </div>
                   @if($modeUpdate === true) 
                   <button wire:click="update()" class="btn btn-sm btn-warning ms-auto">
                       <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                       Update
                   </button>
                   @else
                   <button wire:click="store()" class="btn btn-sm btn-primary ms-auto">
                       <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                       Simpan
                   </button>
                    @endif
               </div>
           </div>
       </div>
   </div>

   <div class="modal-backdrop fade show"
   id="backdrop"
   style="display: @if($show === true) 
          block
          @else
          none
          @endif;"></div>
</div>