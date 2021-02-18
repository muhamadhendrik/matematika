<div class="card-body">
    {{-- <div class="form-group">
        <label for="kode_soal">Kode Soal</label>
        <input type="text" name="kode_soal" id="kode_soal" class="form-control"
            value="{{ old('kode_soal') ?? $soal->kode_soal }}">
    </div>
    @error('kode_soal')
        <span class=" text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror --}}
    <div class="form-group">
        <label for="exampleFormControlSelect1" class="bmd-label-floating">Kode Soal</label>
        <select class="form-control select-picker" data-style="btn btn-link" id="exampleFormControlSelect1"
            name="kode_soal">
            <option value="soal001" {{ $soal->kode_soal == 'soal001' ? 'selected="selected"' : '' }}>Bilangan
                Pangkat &
                Akar</option>
            <option value="soal002" {{ $soal->kode_soal == 'soal002' ? 'selected="selected"' : '' }}>Persamaan dan
                Pertidaksamaan Linier</option>
            <option value="soal003" {{ $soal->kode_soal == 'soal003' ? 'selected="selected"' : '' }}>Matriks
            </option>
            <option value="soal004" {{ $soal->kode_soal == 'soal004' ? 'selected="selected"' : '' }}>Fungsi
            </option>
            <option value="soal005" {{ $soal->kode_soal == 'soal005' ? 'selected="selected"' : '' }}>Barisan &
                Deret</option>
            <option value="soal006" {{ $soal->kode_soal == 'soal006' ? 'selected="selected"' : '' }}>Program
                Linier</option>
            <option value="soal007" {{ $soal->kode_soal == 'soal007' ? 'selected="selected"' : '' }}>Trigonometri
            </option>
            <option value="soal008" {{ $soal->kode_soal == 'soal008' ? 'selected="selected"' : '' }}>Geometri
            </option>
            <option value="soal009" {{ $soal->kode_soal == 'soal009' ? 'selected="selected"' : '' }}>Transformasi
            </option>
            <option value="soal010" {{ $soal->kode_soal == 'soal010' ? 'selected="selected"' : '' }}>Lingkaran
            </option>
            <option value="soal011" {{ $soal->kode_soal == 'soal011' ? 'selected="selected"' : '' }}>Peluang
            </option>
            <option value="soal012" {{ $soal->kode_soal == 'soal012' ? 'selected="selected"' : '' }}>Statistika
            </option>
            <option value="soal013" {{ $soal->kode_soal == 'soal013' ? 'selected="selected"' : '' }}>Limit
            </option>
            <option value="soal014" {{ $soal->kode_soal == 'soal014' ? 'selected="selected"' : '' }}>Turunan
            </option>
            <option value="soal015" {{ $soal->kode_soal == 'soal015' ? 'selected="selected"' : '' }}>Integral
            </option>
        </select>
    </div>
    <div class="form-group">
        <label for="soal">Soal</label>
        <textarea id="soal" name="soal" class="form-control"
            style="height: 100px;">{{ old('soal') ?? $soal->soal }}</textarea>
    </div>
    @error('soal')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-group">
        <label for="pilihan_a">pilihan_a</label>
        <textarea id="pilihan_a" name="pilihan_a" class="form-control"
            style="height: 100px;">{{ old('pilihan_a') ?? $soal->pilihan_a }}</textarea>
    </div>
    @error('pilihan_a')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-group">
        <label for="pilihan_b">pilihan_b</label>
        <textarea id="pilihan_b" name="pilihan_b" class="form-control"
            style="height: 100px;">{{ old('pilihan_b') ?? $soal->pilihan_b }}</textarea>
    </div>
    @error('pilihan_b')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-group">
        <label for="pilihan_c">pilihan_c</label>
        <textarea id="pilihan_c" name="pilihan_c" class="form-control"
            style="height: 100px;">{{ old('pilihan_c') ?? $soal->pilihan_c }}</textarea>
    </div>
    @error('pilihan_c')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-group">
        <label for="pilihan_d">pilihan_d</label>
        <textarea id="pilihan_d" name="pilihan_d" class="form-control"
            style="height: 100px;">{{ old('pilihan_d') ?? $soal->pilihan_d }}</textarea>
    </div>
    @error('pilihan_d')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-group">
        <label for="pilihan_e">pilihan_e</label>
        <textarea id="pilihan_e" name="pilihan_e" class="form-control"
            style="height: 100px;">{{ old('pilihan_e') ?? $soal->pilihan_e }}</textarea>
    </div>
    @error('pilihan_e')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-group">
        <label for="jawaban_benar">jawaban_benar</label>
        <textarea id="jawaban_benar" name="jawaban_benar" class="form-control"
            style="height: 100px;">{{ old('jawaban_benar') ?? $soal->jawaban_benar }}</textarea>
    </div>
    @error('jawaban_benar')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-grup">
        <label for="thumbnail1">Thumbnail 1</label>
        <input type="file" name="thumbnail1" class="form-control" id="thumbnail1" />
    </div>
    @error('thumbnail1')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-grup">
        <label for="thumbnail2">Thumbnail 2</label>
        <input type="file" name="thumbnail2" class="form-control" id="thumbnail2" />
    </div>
    @error('thumbnail2')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-grup">
        <label for="thumbnail3">Thumbnail 3</label>
        <input type="file" name="thumbnail3" class="form-control" id="thumbnail3" />
    </div>
    @error('thumbnail3')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="card-footer">
    <a href="{{ route('admin.soal.index') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
    <button type="submit" class="btn btn-success">{{ $submit ?? 'Update' }}</button>
</div>
