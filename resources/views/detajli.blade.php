@extends("base")

@section("tab_title")

    Detajli

@endsection

@section("page_title")

    Prijavljen

@endsection

@section("content")

    <div class="container">
        <div class="featurette" id="prijavljeni">
            <h2 class="featurette-heading">Prijavljeni
                <span class="text-muted">detajli:</span>
            </h2>

            <hr class="featurette-divider">

            @foreach($registrations as $registration)

                <p class="lead">Prijavljen: {{ $registration->name }} {{ $registration->surname }}</p>
                <p class="lead">Email: {{ $registration->email }}</p>
                <p class="lead">Naslov: {{ $registration->address }}</p>
                <p class="lead">Kraj: {{ $registration->city }}</p>
                <p class="lead">Država: {{ $registration->country }}</p>

            @endforeach
        </div>
    </div>

@endsection
