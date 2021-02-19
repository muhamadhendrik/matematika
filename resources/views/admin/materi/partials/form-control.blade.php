  <div class="card-body">
      {{-- <div class="form-group">
          <label for="kode_materi">Kode Materi</label>
          <input type="text" name="kode_materi" id="kode_materi" class="form-control"
              value="{{ old('kode_materi') ?? $materi->kode_materi }}">
      </div>
      @error('kode_materi')
          <span class=" text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror --}}
      <div class="form-group">
          <label for="exampleFormControlSelect1" class="bmd-label-floating">Kode Materi</label>
          <select class="form-control select-picker" data-style="btn btn-link" id="exampleFormControlSelect1"
              name="kode_materi">
              <option value="mat001" {{ $materi->kode_materi == 'mat001' ? 'selected="selected"' : '' }}>Bilangan
                  Pangkat &
                  Akar</option>
              <option value="mat002" {{ $materi->kode_materi == 'mat002' ? 'selected="selected"' : '' }}>Persamaan dan
                  Pertidaksamaan Linier</option>
              <option value="mat003" {{ $materi->kode_materi == 'mat003' ? 'selected="selected"' : '' }}>Matriks
              </option>
              <option value="mat004" {{ $materi->kode_materi == 'mat004' ? 'selected="selected"' : '' }}>Fungsi
              </option>
              <option value="mat005" {{ $materi->kode_materi == 'mat005' ? 'selected="selected"' : '' }}>Barisan &
                  Deret</option>
              <option value="mat006" {{ $materi->kode_materi == 'mat006' ? 'selected="selected"' : '' }}>Program
                  Linier</option>
              <option value="mat007" {{ $materi->kode_materi == 'mat007' ? 'selected="selected"' : '' }}>Trigonometri
              </option>
              <option value="mat008" {{ $materi->kode_materi == 'mat008' ? 'selected="selected"' : '' }}>Geometri
              </option>
              <option value="mat009" {{ $materi->kode_materi == 'mat009' ? 'selected="selected"' : '' }}>Transformasi
              </option>
              <option value="mat010" {{ $materi->kode_materi == 'mat010' ? 'selected="selected"' : '' }}>Lingkaran
              </option>
              <option value="mat011" {{ $materi->kode_materi == 'mat011' ? 'selected="selected"' : '' }}>Peluang
              </option>
              <option value="mat012" {{ $materi->kode_materi == 'mat012' ? 'selected="selected"' : '' }}>Statistika
              </option>
              <option value="mat013" {{ $materi->kode_materi == 'mat013' ? 'selected="selected"' : '' }}>Limit
              </option>
              <option value="mat014" {{ $materi->kode_materi == 'mat014' ? 'selected="selected"' : '' }}>Turunan
              </option>
              <option value="mat015" {{ $materi->kode_materi == 'mat015' ? 'selected="selected"' : '' }}>Integral
              </option>
          </select>
      </div>
      <div class="form-group">
          <label for="sub_materi">Sub Materi</label>
          <input type="text" name="sub_materi" id="sub_materi" class="form-control"
              value="{{ old('sub_materi') ?? $materi->sub_materi }}">
      </div>
      @error('sub_materi')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <div class="form-group">
          <label for="materi">Materi</label>
          <textarea id="materi" name="materi" class="form-control"
              style="height: 100px;">{{ old('materi') ?? $materi->materi }}</textarea>
      </div>
      @error('materi')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      @if ($materi)
          <img src="{{ $materi->TakeImage }}" width="200" alt="" srcset="">
      @endif
      <div class="form-grup">
          <label for="thumbnail">Thumbnail</label>
          <input type="file" name="thumbnail" class="form-control" id="thumbnail" />
      </div>
      @error('thumbnail')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>
  <div class="card-footer">
      <a href="{{ route('admin.materi.index') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
      <button type="submit" class="btn btn-success">{{ $submit ?? 'Update' }}</button>
  </div>
