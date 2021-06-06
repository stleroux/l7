{{-- @if(count(config('app.languages')) > 1)
    <li class="nav-item dropdown pb-0 mb-0">

        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            {{ strtoupper(app()->getLocale()) }}
        </a>

        <ul class="dropdown-menu dropdown-menu-md dropdown-menu-right pb-0 mb-0">
            @foreach(config('app.languages') as $langLocale => $langName)
                <a class="dropdown-item" href="{{ url()->current() }}?lang={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
            @endforeach
        </ul>

    </li>
@endif --}}
