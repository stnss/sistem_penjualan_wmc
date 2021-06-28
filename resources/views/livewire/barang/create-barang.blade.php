<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('menu.tambah', ['type' => 'Barang']) }}</h4>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.barangs.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="namaBarang">Nama Barang</label>
                            <input type="text" name="name" class="form-control form-control"
                                id="namaBarang" placeholder="Nama Barang" value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('Detail Barang') }}</h4>
                            </div>
                            <div class="card-body">
                                <input type="text" name="name" class="form-control" />
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="30%">Satuan</th>
                                            <th width="13%">Stok</th>
                                            <th width="30%">Harga</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barangDetails as $index => $detail)
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="satuan[{{ $index }}]" class="form-control"
                                                            wire:model="barangDetails.{{ $index }}.satuan">
                                                            <option value="pcs">Pcs</option>
                                                            <option value="dus">Dus</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="number" name="stok[{{$index }}]" class="form-control form-control"
                                                            placeholder="Stok Barang"
                                                            wire:model="barangDetails.{{ $index }}.stok">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="number" name="harga[{{ $index }}]" class="form-control form-control form-control"
                                                            placeholder="Harga Barang"
                                                            value="{{ $detail['harga'] }}"
                                                            wire:model="barangDetails.{{ $index }}.harga">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-danger-outline" wire:click.prevent="removeDetail({{ $index }})">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" wire:click.prevent="addDetail"><i class="fas fa-plus"></i> {{ __('menu.tambah', ['type' => 'Detail Barang']) }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary"><i class="fas fa-save"></i> {{ __('menu.simpan', ['type' => 'Barang']) }}</button>
            </div>
        </form>
    </div>
</div>
