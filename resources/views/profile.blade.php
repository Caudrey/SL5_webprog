@extends('/layout/master')

@section('title', 'Profile')

@section('description', 'Profile Cecil')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endpush

@section('content')
    {{-- Content --}}
    <div class="d-flex flex-column profile align-items-center">
        {{-- Description --}}
        <div id="description" class="rounded-top mt-3">
            <div class="container py-4 px-5 d-flex flex-column">
                <div class="d-flex my-4">
                    <img src="{{ asset('assets/IrD40uzsJ_hv1BOLJu2r2llhCmv_Z0YYIevJthP18Ak=_plaintext_638160376042792162.jpg') }}" class="shadow-3-strong p-2 mx-4" alt="cecil" style="width: 16%; height: inherit;">
                    <div class="container">
                        <h3>Description</h3>
                        <div class="row">
                            <div class="col lh-sm">
                                <p><span>Full Name </span>: Cecilia Audrey Herli</p>
                                <p><span>Nickname </span>: Cecil</p>
                                <p><span>Country </span>: Indonesia</p>
                                <p><span>Residence </span>: Sentul</p>
                            </div>
                            <div class="col lh-sm">
                                <p><span>Age</span>: 19</p>
                                <p><span>Occupation </span>: College Student</p>
                                <p><span>University </span>: Binus University (PPTI BCA)</p>
                                <p><span>Major </span>: Computer Science</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 text-center rounded-3">
                    <p class="lead">
                        Hello, I am Cecil, a 19-year-old girl living in Indonesia. Currently, I am pursuing an undergraduate degree in Computer Science major through PPTI BCA. I am in the 5th semester now and trying my best so I can graduate!
                    </p>
                </div>
            </div>
        </div>
        {{-- End Of Description --}}

        {{-- Motto --}}
        <div id="motto" class="text-bg-dark p-5 mb-4">
            <figure class="text-center quote m-auto lg-sm pt-3">
                <blockquote class="blockquote">
                    <p>Nobody can go back and start a new beginning, but anyone can start today and make a new ending.</p>
                </blockquote>
                <figcaption class="blockquote-footer mt-1">
                    <cite title="Source Title">Maria Robinson</cite>
                </figcaption>
            </figure>
        </div>

        <div id="PnI" class="row pt-3 pb-5">
            {{-- personality --}}
            <div id="personality" class="col-6">
                <div class="p-5 bg-body-tertiary border text-bg-light rounded-3">
                    <h2 class="pb-2">Personality</h2>
                    <div class="row">
                        <div class="col lh-lg">
                            <li>Diligent</li>
                            <li>Discipline</li>
                            <li>Communicative</li>
                        </div>
                        <div class="col lh-lg">
                            <li>Hardworking</li>
                            <li>Responsible</li>
                            <li>Target oriented</li>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Of personality --}}

            {{-- Interest --}}
            <div id="interest" class="col-6">
                <div class="p-5 text-bg-dark rounded-3">
                    <h2 class="pb-2">Interest</h2>
                    <div class="row">
                        <div class="col lh-lg">
                            <li>Reading (Hobby)</li>
                            <li>Cyber Security</li>
                            <li>Full Stack Developer</li>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Of Interest --}}
        </div>

        {{-- <div id="personality" class="rounded-top">
            <div class="container mt-2 p-4 d-flex ">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="shadow-3-strong" alt="cecil" style="width: 40%; height: inherit;">
                <div class="px-5 text-center rounded-3">
                    <h1 class="text-body-emphasis">Basic jumbotron</h1>
                    <p class="lead">
                        Hello, I am Cecil, a 19-year-old girl living in Indonesia. Currently, I am pursuing an undergraduate degree in Computer Science major through PPTI BCA. I am in the 5th semester now and trying my best to graduate!
                    </p>
                </div>
            </div>
        </div>
        <div id="Interest" class="rounded-top">
            <div class="container mt-2 p-4 d-flex ">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="shadow-3-strong" alt="cecil" style="width: 40%; height: inherit;">
                <div class="px-5 text-center rounded-3">
                    <h1 class="text-body-emphasis">Basic jumbotron</h1>
                    <p class="lead">
                        Hello, I am Cecil, a 19-year-old girl living in Indonesia. Currently, I am pursuing an undergraduate degree in Computer Science major through PPTI BCA. I am in the 5th semester now and trying my best to graduate!
                    </p>
                </div>
            </div>
        </div>  --}}
    </div>
    {{-- End of Content --}}
@endsection

