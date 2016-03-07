@extends("base")

@section("tab_title")

    Prijavljeni

@endsection

@section("page_title")

    Prijavljeni - Šmarna gora

@endsection

@section("content")

    <div class="container">
        <div class="featurette" id="prijavljeni">
            <h2 class="featurette-heading">Spisek
                <span class="text-muted">prijavljenih:</span>
            </h2>

            <hr class="featurette-divider">

            @foreach($registrations as $registration)

                <p class="lead">{{ $registration->name }} {{ $registration->surname }} - <a href="/{{ $registration->id }}">Detajli</a></p>

            @endforeach
        </div>
    </div>

@endsection
