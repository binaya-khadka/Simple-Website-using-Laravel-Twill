@extends('pong')

@section('content')
    <div class="wrapper section">
        <div class="navigation">
            @foreach ($pages as $page)
                <div class="navigation-link">
                    <a href="#{{ $page->slug }}">{{ $page->title }}</a>
                </div>
            @endforeach
        </div>
        <div class="section">
            @foreach ($pages as $pages)
                <div id="{{ $pages->slug }}" class="renderingBlock section">
                    <div style="margin-top: 8vh;">
                        {!! $pages->renderBlocks() !!}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection


<style>
    .navigation {
        position: sticky;
        top: 0;
        right: 0;
        background: #fff;
        z-index: 10;
    }

    a {
        text-decoration: none;
        color: black !important;
    }

    .wrapper {
        display: grid;
        max-width: 1000px;
        width: 1000px;
        margin: auto;
        justify-content: center;
        height: 100vh;
        height: 100dvh;
    }

    .navigation-link {
        height: 35px;
        line-height: 35px;
        text-align: center;
        display: inline-block;
        margin-left: 30px;
    }

    .renderingBlock {
        display: grid;
        gap: 2rem;
    }

    .section {
        margin-bottom: 45px;
    }
</style>
