@extends('layouts.app')

@section('content')

    <div class="contact-block">
        <div class="section-header">
            <h2 class="section-title">REGISTER <span>HERE</span></h2>
            <hr class="lines">
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required data-error="Silahkan masukkan nama lengkap anda!">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required data-error="Silahkan masukkan email!">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Nomor Handphone" required data-error="Silahkan masukkan nomor handphone!">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required data-error="Silahkan masukkan kata sandi!">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Ulangi Kata Sandi" required data-error="Silahkan masukkan kata sandi kembali!">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Register</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
