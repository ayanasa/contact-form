<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contant Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/thanks.css) }}" />
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    @extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    @endsection

        @section('content')
        <div class="thanks_content">
            <div class="thanks_heading">
                <h2>お問い合わせありがとうございます</h2>
            </div>
        </div>
        @endsection
</body>

</html>