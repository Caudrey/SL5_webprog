@extends('/layout/master')

@section('title', 'Education')

@section('description', 'Education - Profile Cecil')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/education.css') }}">
@endpush

@section('content')
    {{-- Content --}}
    {{-- Timeline --}}
    <div class="education container px-4 mt-3">
        <div id="timeline" class="row rounded-3 py-5 m-auto">
            <h3 class="text-white ms-1 py-2 text-center">Timeline</h3>
            <div class="px-5 py-3">
                <ul class="timeline-1 text-white">
                <li class="event fs-5" data-date="2007 - 2009">
                    <h4 class="mb-3">SD Tarakanita Gading Serpong</h4>
                    <p>Kindergarten</p>
                </li>
                <li class="event  fs-5" data-date="2009 - 2011">
                    <h4 class="mb-3">SD Perguruan Buddhi</h4>
                    <p>Elementary school</p>
                </li>
                <li class="event  fs-5" data-date="2011 - 2015">
                    <h4 class="mb-3">SD Tarakanita Gading Serpong</h4>
                    <p>Elementary school</p>
                </li>
                <li class="event  fs-5" data-date="2015 - 2018">
                    <h4 class="mb-3">SMP Tarakanita Gading Serpong</h4>
                    <p>Junior high school</p>
                </li>
                <li class="event  fs-5" data-date="2018 - 2021">
                    <h4 class="mb-3">SMA Tarakanita Gading Serpong</h4>
                    <p>Senior High School</p>
                </li>
                <li class="event  fs-5" data-date="2021 - Now">
                    <h4 class="mb-3">Binus University (PPTI BCA)</h4>
                    <p class="mb-0">College</p>
                </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- End of Timeline --}}
    {{-- End of Content --}}
@endsection
