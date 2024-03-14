<div class="row">
    <div class="mb-3 col">
        <label for="provinsi" class="form-label">Provinsi</label>
        <select wire:change="list_kota" wire:model='provinsi' class="form-select" name="provinsi" id="provinsi">
            <option selected>--Pilih Provinsi--</option>
            @foreach ($list_provinsi as $item)
            <option value="{{ $item['id'].'/'.$item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col">
        <label for="kota" class="form-label">Kota</label>
        <select wire:model='kota' class="form-select" name="kota" id="kota">
            <option value="null" selected>--Pilih Kota--</option>
            @foreach ($list_kota as $item)
                <option value="{{ $item['id'].'/'.$item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>

</div>
