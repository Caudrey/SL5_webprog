@extends('/layout/master')

@section('title', 'List Product')

@section('description')
    List Product Genshin Impact Card
    @foreach ($arrProduct as $prdct)
        {{ $prdct['name'] }} : {{ $prdct['desc'] }} <br>
    @endforeach
@endsection

@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('/css/???.css') }}"> --}}
@endpush

@section('content')
    {{-- Content --}}
    <div class="row">
        @foreach ($arrProduct as $prdct)
            <div class="col-sm-3">
                <a href="/hobby/{{ $prdct['name'] }}" class="text-decoration-none">
                    @if ($prdct['rarity'] == 'SSR')
                        <div class="card text-center text-white bg-danger mb-3" style="max-width: 100%; height: 25vw;">
                    @elseif ($prdct['rarity'] == 'R')
                        <div class="card text-center text-dark bg-light mb-3" style="max-width: 100%; height: 25vw;">
                    @elseif ($prdct['rarity'] == 'SR')
                        <div class="card text-center text-dark bg-warning mb-3" style="max-width: 100%; height: 25vw;">
                    @endif
                            <div class="card-header">Rarity: {{ $prdct['rarity'] }}</div>
                            <div class="card-body">
                                <img class="card-img-top" src="{{ asset('assets/' . $prdct['img']) }}" alt="{{ $prdct['name'] }}" style="width: 50%; height: 60%;">
                                <h5 class="card-title">{{ $prdct['name'] }}</h5>
                                <p class="card-text text-start">{{ substr_replace($prdct['desc'], "...", 50) }}</p>
                            </div>
                            <div class="card-footer">Rp{{ $prdct['price'] }}</div>
                        </div>
                </a>
            </div>
        @endforeach
    </div>
    {{-- End of Content --}}
@endsection
