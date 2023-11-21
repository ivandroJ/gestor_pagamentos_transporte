<div class="pagetitle">
    @if (isset($header_title))
        <h1>{{ $header_title }}</h1>
    @endif


    @if (isset($header_path))
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url(request()->user() ? '/admin' : '/') }}">Início</a></li>

                @foreach ($header_path as $path)
                    <li class="breadcrumb-item {{ isset($path['is_active']) ? ' active' : '' }}">
                        @if (isset($path['url']))
                            <a href="{{ url($path['url']) }}">{{ $path['label'] }}</a>
                        @else
                            {{ $path['label'] }}
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    @endif
</div><!-- End Page Title -->

@include('inc.msg')
