@extends('frontend.partials.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Profil') }}</div>

                <div class="card-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">{{ __('Nama') }} : {{ $user->nama }}</label>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('E-Mail Address') }} : {{ $user->email }}</label>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">{{ __('Home Address') }} : {{ $user->alamat }}</label>
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label">{{ __('Phone Address') }} : {{ $user->no_hp }}</label>
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">{{ __('Birth') }} : {{ $user->tgl_lahir }}</label>
                        </div>

                        <button type="submit" class="btn btn-primary float-end" onclick="window.location='{{ route('edit-profil', $user->id) }}'" >
                            {{ __('Edit') }}
                        </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection