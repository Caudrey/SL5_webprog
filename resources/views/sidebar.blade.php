{{-- Sidebar --}}
<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar" style="width: 25vw;">
    <div class="d-flex flex-column align-items-center text-white text-decoration-none">
        <img id="img-cecil" src="assets/IMG-20230402-WA0007.jpg" class="rounded-circle shadow-3-strong" alt="cecil" style="width: 150px; height:150px">
        <span class="fs-4">Cecilia Audrey Herli</span>
        <span class="fw-light"><svg class="bi me-2" width="14" height="14"><use xlink:href="#location"/></svg>Indonesia</span>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <div class="rounded d-flex flex-row profile-nav {{ Request::url() == url('/profile') ? 'active' : '' }}">
                <a href="/profile" class="nav-link text-white fw-bold link-body-emphasis" style="width: 85%">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    Profile
                </a>
                <div class="py-1 ">
                    <button type="button" class="btn btn-outline-light dropdown-toggle" aria-current="page" data-bs-toggle="collapse" data-bs-target="#profile-collapse" aria-expanded="true"></button>
                </div>
            </div>
            <div class="collapse show" id="profile-collapse">
                <ul class="btn-toggle-nav list-unstyled ms-3 fw-light pb-1 lh-sm small">
                    <li><a href="/profile#description" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Description</a></li>
                    <li><a href="/profile#motto" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Motto</a></li>
                    <li><a href="/profile#personality" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Personality</a></li>
                    <li><a href="/profile#interest" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Interest</a></li>
                </ul>
            </div>
        </li>
        <li  class="nav-item btn-nav">
            <a href="/education" class="nav-link text-white fw-bold link-body-emphasis {{ Request::url() == url('/education') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#education"/></svg>
                Education
            </a>
        </li>
        <li  class="nav-item btn-nav">
            <a href="/skills" class="nav-link text-white fw-bold link-body-emphasis {{ Request::url() == url('/skills') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#skill"/></svg>
                Skills
            </a>
        </li>
        <li  class="nav-item btn-nav">
            <a href="/contact" class="nav-link text-white fw-bold link-body-emphasis {{ Request::url() == url('/contact') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#contact"/></svg>
                Contact
            </a>
        </li>
    </ul>
</div>
{{-- End Of Sidebar --}}
