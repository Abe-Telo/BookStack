@extends('layouts.simple')

@section('head')
    <link rel=stylesheet href="https://prosemirror.net/css/editor.css">
@endsection

@section('body')
    <div class="container">

        <div>
            <input id="markdown-toggle" type="checkbox">
        </div>

        <div id=editor style="margin-bottom: 23px"></div>

        <div id="content" style="display: none;">
            <h2>This is an editable block</h2>
            <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit. Asperiores?</p>
            <p><img src="/user_avatar.png" alt="Logo"></p>
            <ul>
                <li>Item A</li>
                <li>Item B</li>
                <li>Item C</li>
            </ul>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

    </div>
@endsection


@section('scripts')
    <script src="{{ versioned_asset('dist/editor.js') }}" nonce="{{ $cspNonce }}"></script>
@stop