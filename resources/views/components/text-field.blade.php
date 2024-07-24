<div>
    <div class="form-floating">
        <input type="{{ $type }}" class="form-control" name="{{ $name }}" wire:model="{{ $name ?? '' }}" placeholder="name@example.com">
        <label>{{ $label }}</label>
    </div>
</div>