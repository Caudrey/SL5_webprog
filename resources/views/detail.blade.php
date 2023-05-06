@extends('/layout/master')

@section('title', "Character: " . $singleHobby['name'])
@section('description', $singleHobby['desc'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endpush

@section('svg')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="back" viewBox="0 0 24 24">
        <path fill="currentColor" d="M12 9.059V6.5a1.001 1.001 0 0 0-1.707-.708L4 12l6.293 6.207a.997.997 0 0 0 1.414 0A.999.999 0 0 0 12 17.5v-2.489c2.75.068 5.755.566 8 3.989v-1c0-4.633-3.5-8.443-8-8.941z"/>
    </symbol>
</svg>
@endsection

@section('content')
    <div>
        <a href="/hobby" class="text-white ms-3"><svg class="bi me-2" width="34" height="34"><use xlink:href="#back"/></svg></a>
        <div class="p-3">
            @if ($singleHobby['rarity'] == 'High')
                <div class="card text-center rounded px-5 py-4 text-white bg-danger" style="width: 100%">
            @elseif ($singleHobby['rarity'] == 'Medium')
                <div class="card text-center rounded px-5 py-4 text-dark bg-warning" style="width: 100%">
            @elseif ($singleHobby['rarity'] == 'Low')
                <div class="card text-center rounded px-5 py-4 text-light bg-secondary" style="width: 100%">
            @endif
                    <div class="d-flex flex-row">
                        <div class="d-flex flex-column ms-4 d-flex align-items-center">
                            <img class="card-img-top me-2 rounded" src="{{ asset('/assets' . '/' . $singleHobby['img']) }}" alt="{{ $singleHobby['name'] }}" style="width: auto; height: 16vw;">
                            <div class="d-flex flex-row mt-2 justify-content-center">
                                <span class="badge rounded-pill bg-dark border border-light border-2 p-2 me-2" style="width: 80px">{{ $singleHobby['rarity'] }}</span>
                                <span class="badge rounded-pill bg-dark border border-light border-2 p-2 me-2" style="width: 80px">{{ $singleHobby['type'] }}</span>
                            </div>
                            <span class="badge rounded-pill bg-dark border border-light border-2 p-2 mt-1" style="width: 100px">Rp{{ $singleHobby['price'] }}</span>
                        </div>
                        <div class="d-flex flex-column align-self-center ms-2">
                            <p style="width: 90%">{{ $singleHobby['desc'] }}</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
