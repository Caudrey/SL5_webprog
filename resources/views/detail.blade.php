@extends('/layout/master')

@section('title', "Character: " . $singleProduct['name'])
@section('description', $singleProduct['desc'])

@section('content')
    @if ($singleProduct['rarity'] == 'SSR')
        <div class="card text-center rounded px-5 py-4 text-white bg-danger" style="width: 100%">
    @elseif ($singleProduct['rarity'] == 'SR')
        <div class="card text-center rounded px-5 py-4 text-dark bg-warning" style="width: 100%">
    @elseif ($singleProduct['rarity'] == 'R')
        <div class="card text-center rounded px-5 py-4 text-light bg-secondary" style="width: 100%">
    @endif
            <div class="d-flex flex-row">
                <img class="card-img-top me-2" src="{{ asset('/assets/' . $singleProduct['img']) }}" alt="{{ $singleProduct['name'] }}" style="width: 20%; height: 30%;">
                <div class="d-flex flex-column align-self-center">
                    <div class="d-flex flex-row mb-2">
                        <span class="badge rounded-pill bg-dark border border-light border-2 p-2 me-2" style="width: 70px">{{ $singleProduct['rarity'] }}</span>
                        <span class="badge rounded-pill bg-dark border border-light border-2 p-2" style="width: 100px">Rp{{ $singleProduct['price'] }}</span>
                    </div>
                    <p style="width: 50%">{{ $singleProduct['desc'] }}</p>
                </div>
            </div>
        </div>
@endsection
