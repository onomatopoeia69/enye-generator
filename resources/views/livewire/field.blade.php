<div>
        <div class="input-group">
            <input type="{{ $type }}"  class="form-control" 
                placeholder="{{ $placeholder }}" wire:model='child_val'>
            <button type="button" class="btn btn-primary" wire:click='upperCaseEnye'>
                 Ñ
            </button>
            <button type="button" class="btn btn-primary" wire:click='lowerCaseEnye'>
                ñ
            </button>
        </div>
</div>