<div class="mb-3">
    @if ($foto)
        <h4 class="text-center">
            Photo: Preview
        </h4>
        <img src="{{ $foto->temporaryUrl }}" class="mx-auto d-block">
    @endif
    <label for="avatar" class="form-label">Pilih File</label>
    <input wire:model="foto" type="file" class="form-control" name="avatar" />
</div>