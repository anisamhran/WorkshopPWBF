@extends('frontend.partials.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Edit Profil') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-profil', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label">{{ __('Name') }}</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="{{$user->nama}}" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">{{ __('Home Address') }}</label>
                            <input id="alamat" type="text" class="form-control" name="alamat" value="{{$user->alamat}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label">{{ __('Phone Address') }}</label>
                            <input id="no_hp" type="number" class="form-control" name="no_hp" value="{{$user->no_hp}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">{{ __('Birth') }}</label>
                            <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{$user->tgl_lahir}}" max="2000-12-31" required>
                        </div>

                        <button type="submit" class="btn btn-primary float-end">
                            {{ __('Save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection