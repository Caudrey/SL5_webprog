@extends('/layout/master')

@section('title', 'Contact')

@section('description', 'Contact - Profile Cecil')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
@endpush

@section('content')
    {{-- Content --}}
    <div class="d-flex flex-column contact align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info text-bg-dark m-auto">
                        <svg class="bi me-2" width="80" height="80"><use xlink:href="#email2"/></svg>
                        <h3 class="text-white text-center">Contact Me</h3>
                        <h5 class="text-white text-center">I would love to hear from you!</h5>
                        <ul class="list-unstyled d-flex flex-column pt-4">
                            <li><p class="text-white fs-6 text-start"><span><svg class="bi" width="20" height="20"><use xlink:href="#email"/></svg></span> cecilia.herli@gmail.com</p></li>
                            <li><p class="text-white fs-6 text-start"><span><svg class="bi" width="20" height="20"><use xlink:href="#WA"/></svg></span> 081319363809</p></li>
                            <li><p class="text-white fs-6 text-start"><span><svg class="bi" width="20" height="20"><use xlink:href="#line"/></svg></span> cecilia_audrey</p></li>
                            <li><p class="text-white fs-6 text-start"><span><svg class="bi" width="16" height="16"><use xlink:href="#instagram"/></svg></span> audrey9468</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 ps-5">
                    <form class="contact-form" action="https://formspree.io/f/mnqyggpq" method="POST">
                        <div class="form-group pt-3">
                            <label class="control-label col-sm-2" for="Name">Full Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Name" placeholder="Enter your Full Name" name="Name" required>
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <label class="control-label col-sm-2" for="From">From:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="From" placeholder="Enter your Country" name="From">
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <label class="control-label col-sm-2" for="Email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="Email" placeholder="Enter your email" name="Email" required>
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <label class="control-label col-sm-2" for="Message">Message:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="Message" placeholder="Enter your Message" name="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group pt-4 py-1">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-dark">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Content --}}
@endsection
