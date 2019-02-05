@extends('layouts.main')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Daftar User</h1>
            <p class="text-muted m-0 desc">User LBH - Payung Hitam Keadilan</p>
        </div>
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">
                <form>
                    @if($param != null)
                        <input type="search" id="cari" name="s" class="form-control d-inline-block" placeholder="Cari ..." value="{{ $param }}">
                    @else
                        <input type="search" id="cari" name="s" class="form-control d-inline-block" placeholder="Cari ...">
                    @endif
                    <input type="submit" style="display: none">
                </form>
            </div>
        </div>
    </div>

    @yield('result')

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            function delay(callback, ms) {
                var timer = 0;
                return function() {
                    var context = this, args = arguments;
                    clearTimeout(timer);
                    timer = setTimeout(function () {
                        callback.apply(context, args);
                    }, ms || 0);
                };
            }

            $(document).on('keyup', '#cari', delay(function(){
                var query = $(this).val();
                var url = query.replace(/ /g, "+");
                if(query){
                    window.location = '/admin/user?s='+url;
                }
            }, 500));
        })
    </script>
@endsection
