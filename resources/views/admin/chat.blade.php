@extends('layouts.main')

@section('content')
<meta name="userId" content="{{ $user->id }}">
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    {{ $user->name }} hello
                    <div class="contain is-pulled-right">
                        <a href="{{ url('/message') }}" class="is-link"><i class="fa fa-arrow-left"></i> Go Back</a>
                    </div>                
                    <chat v-bind:chats="chats" v-bind:adminid="{{ Auth::user()->id }}" v-bind:userid="{{ $user->id }}"></chat>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
