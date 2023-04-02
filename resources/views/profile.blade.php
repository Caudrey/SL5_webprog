<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    {{-- Temanya (opsional) --}}
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
        </ul>
    </div>

    {{-- Icon (SVG) --}}
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="location" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
        <symbol id="education" viewBox="0 0 20 20">
            <path d="M3.33 8L10 12l10-6l-10-6L0 6h10v2H3.33zM0 8v8l2-2.22V9.2L0 8zm10 12l-5-3l-2-1.2v-6l7 4.2l7-4.2v6L10 20z"/>
        </symbol>
        <symbol id="skill" viewBox="0 0 512 512">
            <path fill="currentColor" d="m109.46 244.04l134.58-134.56l-44.12-44.12l-61.68 61.68a7.919 7.919 0 0 1-11.21 0l-11.21-11.21c-3.1-3.1-3.1-8.12 0-11.21l61.68-61.68l-33.64-33.65C131.47-3.1 111.39-3.1 99 9.29L9.29 99c-12.38 12.39-12.39 32.47 0 44.86l100.17 100.18zm388.47-116.8c18.76-18.76 18.75-49.17 0-67.93l-45.25-45.25c-18.76-18.76-49.18-18.76-67.95 0l-46.02 46.01l113.2 113.2l46.02-46.03zM316.08 82.71l-297 296.96L.32 487.11c-2.53 14.49 10.09 27.11 24.59 24.56l107.45-18.84L429.28 195.9L316.08 82.71zm186.63 285.43l-33.64-33.64l-61.68 61.68c-3.1 3.1-8.12 3.1-11.21 0l-11.21-11.21c-3.09-3.1-3.09-8.12 0-11.21l61.68-61.68l-44.14-44.14L267.93 402.5l100.21 100.2c12.39 12.39 32.47 12.39 44.86 0l89.71-89.7c12.39-12.39 12.39-32.47 0-44.86z"/>
        </symbol>
        <symbol id="contact" viewBox="0 0 24 24">
            <path d="M21 2H6a2 2 0 0 0-2 2v3H2v2h2v2H2v2h2v2H2v2h2v3a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-8 2.999c1.648 0 3 1.351 3 3A3.012 3.012 0 0 1 13 11c-1.647 0-3-1.353-3-3.001c0-1.649 1.353-3 3-3zM19 18H7v-.75c0-2.219 2.705-4.5 6-4.5s6 2.281 6 4.5V18z"/>
        </symbol>
        <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </symbol>
    </svg>
    {{-- End Of Icon --}}

    <main class="d-flex">
        {{-- Sidebar --}}
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar" style="width: 25vw;">
            <div class="d-flex flex-column align-items-center text-white text-decoration-none">
                <img id="img-cecil" src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle shadow-3-strong" alt="cecil" style="width: 100px">
                <span class="fs-4">Cecilia Audrey Herli</span>
                <span class="fw-light"><svg class="bi me-2" width="14" height="14"><use xlink:href="#location"/></svg>Indonesia</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                <a href="/profile" class="nav-link text-white fw-bold {{ Request::url() == url('/profile') ? 'active' : '' }}" aria-current="page" data-bs-toggle="collapse" data-bs-target="#profile-collapse" aria-expanded="true">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    Profile
                </a>
                <div class="collapse show" id="profile-collapse">
                    <ul class="btn-toggle-nav list-unstyled ms-3 fw-light pb-1 lh-sm small">
                        <li><a href="/profile#description" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Description</a></li>
                        <li><a href="/profile#motto" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Motto</a></li>
                        <li><a href="/profile#personality" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Personality</a></li>
                        <li><a href="/profile#interest" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded">Interest</a></li>
                    </ul>
                </div>
            </li>
            <li  class="nav-item">
                <a href="/education" class="nav-link text-white fw-bold {{ Request::url() == url('/education') ? 'active' : '' }}">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#education"/></svg>
                    Education
                </a>
            </li>
            <li  class="nav-item">
                <a href="/skills" class="nav-link text-white fw-bold {{ Request::url() == url('/skills') ? 'active' : '' }}">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#skill"/></svg>
                    Skills
                </a>
            </li>
            <li  class="nav-item">
                <a href="/contact" class="nav-link text-white fw-bold {{ Request::url() == url('/contact') ? 'active' : '' }}">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#contact"/></svg>
                    Contact
                </a>
            </li>
            </ul>
        </div>
        {{-- End Of Sidebar --}}
      
        {{-- <div class="b-divider b-example-vr"></div> --}}

        {{-- Content --}}
        <div class="d-flex flex-column align-items-center content">
            {{-- Header --}}
            <div class="container mt-1">
                <header class="py-3 mb-4 border-bottom">
                    <div class="container d-flex flex-wrap justify-content-center">
                        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                            <span class="fs-4 text-white">Profile</span>
                        </a>
                    </div>
                </header>
            </div>
            {{-- End Of Header --}}
            
            <div class="d-flex flex-column profile align-items-center">
                {{-- Description --}}
                <div id="description" class="rounded-top mt-3">
                    <div class="container py-4 px-5 d-flex flex-column">
                        <div class="d-flex my-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="shadow-3-strong p-2 mx-4" alt="cecil" style="width: 20%; height: inherit;">
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
                
                <div class="row align-items-md-stretch">
                    {{-- personality --}}
                    <div id="personality" class="col-md-6">
                        <div class="h-100 p-5 bg-body-tertiary border text-bg-light rounded-3">
                            <h2>Personality</h2>
                            <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                            <button class="btn btn-outline-secondary" type="button">Example button</button>
                        </div>
                    </div>
                    {{-- End Of personality --}}
                    
                    {{-- Interest --}}
                    <div id="interest" class="col-md-6">
                        <div class="h-100 p-5 text-bg-dark rounded-3">
                            <h2>Interest</h2>
                            <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                            <button class="btn btn-outline-light" type="button">Example button</button>
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

            {{-- Footer --}}
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                  <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                      <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-white text-body-secondary">&copy; 2023 Cecil's Profile</span>
                  </div>
              
                  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                  </ul>
                </footer>
            </div>
            {{-- End of Footer --}}
        </div>
        {{-- End of Content --}}

    </main>



    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebar.js"></script>
</body>
</html>