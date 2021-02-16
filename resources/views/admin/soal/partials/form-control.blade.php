
<div class="card-body">
    <div class="form-group">
        <label for="kode_soal">Kode Soal</label>
        <input type="text" name="kode_soal" id="kode_soal" class="form-control"
            value="{{ old('kode_soal') ?? $soal->kode_soal }}">
    </div>
    @error('kode_soal')
        <span class=" text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
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
=======
  <div class="card-body">
      <div class="form-group">
          <label for="kode_soal">Kode Soal</label>
          <input type="text" name="kode_soal" id="kode_soal" class="form-control"
              value="{{ old('kode_soal') ?? $soal->kode_soal }}">
      </div>
      @error('kode_soal')
          <span class=" text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
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
