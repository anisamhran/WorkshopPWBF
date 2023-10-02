@extends('admin.partials.main')

@section('content')
<h3>Form Data Pekerja Baru</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('pekerja') }}'">
         Kembali
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('pekerja') }}">
        @csrf
        <form>
            <div class="row mb-3">
              <label for="txtid" class="col-sm-2 col-form-label">ID Pekerja</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror" id="txtid" name="txtid" value="{{ old('txtid') }}">
                @error('txtid')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
            @enderror
            </div>
            </div>
            <div class="row mb-3">
              <label for="txtnama" class="col-sm-2 col-form-label">Nama lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('txtnama') is-invalid @enderror" id="txtnama" name="txtnama">
                @error('txtnama')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
            @enderror
            </div>
            </div>
            <div class="row mb-3">
            <label for="txttgl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="date" class="form-control form-control-sm @error('txttgl') is-invalid @enderror" id="txttgl" name="txttgl">
              
                @error('txttgl')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
            @enderror</div>
            </div>
            <div class="row mb-3">
                <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="txtalamat" name="txtalamat @error('txtalamat') is-invalid @enderror" cols="5" rows="3">
                         </textarea>
                         @error('txtalamat')
                         <div class="invalid-feedback">
                             {{ $message }}
                           </div>
                     @enderror 
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnohp" class="col-sm-2 col-form-label">No. Telepon</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtnohp') is-invalid @enderror" id="txtnohp" name="txtnohp">
                        @error('txtnohp')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                    @enderror  
                    </div>
                    </div>
                      <div class="mb-3">
                        <label for="formfoto" class="form-label">Foto</label>
                        <input class="form-control form-control-sm @error('formfoto') is-invalid @enderror" id="formfoto" type="file">
                      
                        @error('formfoto')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                    @enderror</div>
                      <div class="mb-3">
                        <label for="formktp" class="form-label">KTP</label>
                        <input class="form-control form-control-sm @error('formktp') is-invalid @enderror" id="formktp" type="file">
                      
                        @error('formktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                    @enderror</div>
                      <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-success">
                            Save
                        </button>
                      </div>
                    </div>
              </div>
            </div>
          </form>

@endsection