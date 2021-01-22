@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Profile') }}</div>
                <div class="card-body">

                    <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                        <div class="col-md-6">
                            <input id="lastname"  disabled="1" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ auth()->user()->lastname }}" required autocomplete="lastname" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" disabled="1" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" required autocomplete="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Middlename') }}</label>

                        <div class="col-md-6">
                            <input id="middlename" disabled="1" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ auth()->user()->middlename }}" autocomplete="middlename">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" disabled="1" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" required autocomplete="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" disabled="1" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" disabled="1" type="tel" data-inputmask="'mask': '99-9999999'" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ auth()->user()->phone }}" autocomplete="phone">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
