<div>
    <div class="mb-3">
        <label for="nik" class="form-label badge bg-dark">Nik Karyawan</label>
        <input value="{{ $nik }}" type="text" class="form-control form-control-plaintext" readonly name="nik" id="nik" />
    </div>
    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
        <input wire:model='tgl_lahir' type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" />
    </div>
    <div class="mb-3">
        <label for="user_id" class="form-label">Email</label>
        <select wire:model='user_id' class="form-select" name="user_id" id="user_id">
            <option selected>--Pilih Satu--</option>
            @foreach ($users as $item)
                <option value="{{ $item->id }}">{{ $item->email }}</option>                            
            @endforeach
        </select>
    </div>
</div>
