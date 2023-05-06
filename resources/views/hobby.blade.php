@extends('/layout/master')

@section('title', 'Hobby - Reading List')

@section('description')
    Cecil's Hobby - Reading List
    @foreach ($arrHobby as $hbby)
        {{ $hbby['name'] }} : {{ $hbby['desc'] }} <br>
    @endforeach
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/hobby.css') }}">
@endpush

@section('content')
    {{-- Content --}}
    <div class="p-3">
        <div class="row">
            @foreach ($arrHobby as $hbby)
                <div class="col-sm-4">
                    <a href="/hobby/{{ $hbby['name'] }}" class="text-decoration-none">
                        @if ($hbby['rarity'] == 'High')
                            <div class="card text-center text-white bg-danger mb-4">
                        @elseif ($hbby['rarity'] == 'Medium')
                            <div class="card text-center text-dark bg-warning mb-4">
                        @elseif ($hbby['rarity'] == 'Low')
                            <div class="card text-center text-dark bg-light mb-4">
                        @endif
                                <div class="position-absolute ms-2 mt-1 px-2 py-1 rounded text-white" style="background-color: rgba(0,0,0,0.7)">{{ $hbby['type'] }}</div>
                                <div class="card-header">Rating: {{ $hbby['rarity'] }}</div>
                                <div class="card-body d-flex align-items-center flex-column" style="max-width: 100%; height: 25vw;">
                                    <img class="card-img-top rounded" src="{{ asset('assets/' . $hbby['img']) }}" alt="{{ $hbby['name'] }}" style="width: auto; height: 60%;">
                                    <h5 class="card-title">{{ $hbby['name'] }}</h5>
                                    @if (strlen($hbby['name']) > 50)
                                        <p class="card-text text-start">{{ substr_replace($hbby['desc'], "...", 30) }}</p>
                                    @elseif (strlen($hbby['name']) > 30)
                                    {{-- @elseif (substr_count($hbby['name'], ' ') > 5) --}}
                                        <p class="card-text text-start">{{ substr_replace($hbby['desc'], "...", 50) }}</p>
                                    @else
                                        <p class="card-text text-start">{{ substr_replace($hbby['desc'], "...", 100) }}</p>
                                    @endif
                                </div>
                                <div class="card-footer">Rp{{ $hbby['price'] }}</div>
                            </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- End of Content --}}
@endsection
