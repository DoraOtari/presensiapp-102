<div class="row">
    <div class="mb-3 col">
        <label for="provinsi" class="form-label">Provinsi</label>
        <select class="form-select" name="provinsi" id="provinsi">
            <option selected>--Pilih Provinsi--</option>
            @foreach ($list_provinsi as $item)
            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 col">
        <label for="kota" class="form-label">Kota</label>
        <select class="form-select" name="kota" id="kota">
            <option selected>--Pilih Kota--</option>
            <option value="">New Delhi</option>
        </select>
    </div>

</div>
