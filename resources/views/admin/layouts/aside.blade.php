<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link {{ Str::startsWith(request()->url(), route('home')) ? '' : 'collapsed' }}" href="{{route('home')}}">
            <i class="bi bi-grid"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('users.index')) ? '' : 'collapsed' }}"
            data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
            <i class="ri-account-box-fill"></i><span>users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav"
            class="nav-content collapse {{ Str::startsWith(request()->url(), route('users.index')) ? 'show' : '' }}"
            data-bs-parent="#users-nav">
            <li>
                <a href="{{ route('users.index') }}"
                    class="{{ Str::startsWith(request()->url(), route('users.index')) ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>List users</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('evenements.index')) ? '' : 'collapsed' }}"
            data-bs-target="#evenements-nav" data-bs-toggle="collapse" href="#">
            <i class="ri-calendar-fill"></i><span>événements</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="evenements-nav"
            class="nav-content collapse {{ Str::startsWith(request()->url(), route('evenements.index')) ? 'show' : '' }}"
            data-bs-parent="#evenements-nav">
            <li>
                <a href="{{ route('evenements.index') }}"
                    class="{{ Str::startsWith(request()->url(), route('evenements.index')) ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>List événements</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('contacts.index')) ? '' : 'collapsed' }}"
            data-bs-target="#contacts-nav" data-bs-toggle="collapse" href="#">
            <i class="ri-contacts-book-2-fill"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contacts-nav"
            class="nav-content collapse {{ Str::startsWith(request()->url(), route('contacts.index')) ? 'show' : '' }}"
            data-bs-parent="#contacts-nav">
            <li>
                <a href="{{ route('contacts.index') }}"
                    class="{{ Str::startsWith(request()->url(), route('contacts.index')) ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>List contacts</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('membres.index')) ? '' : 'collapsed' }}"
            data-bs-target="#membres-nav" data-bs-toggle="collapse" href="#">
            <i class="ri-file-list-fill"></i><span>Membres</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="membres-nav"
            class="nav-content collapse {{ Str::startsWith(request()->url(), route('membres.index')) ? 'show' : '' }}"
            data-bs-parent="#membres-nav">
            <li>
                <a href="{{ route('membres.index') }}"
                    class="{{ Str::startsWith(request()->url(), route('membres.index')) ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>List membres</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('presses.index')) ? '' : 'collapsed' }}"
            data-bs-target="#presses-nav" data-bs-toggle="collapse" href="#">
            <i class="ri-file-list-fill"></i><span>Média</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="presses-nav"
            class="nav-content collapse {{ Str::startsWith(request()->url(), route('presses.index')) ? 'show' : '' }}"
            data-bs-parent="#presses-nav">
            <li>
                <a href="{{ route('presses.index') }}"
                    class="{{ Str::startsWith(request()->url(), route('presses.index')) ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>List Média</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ Str::startsWith(request()->url(), route('slides.index')) ? '' : 'collapsed' }}"
            data-bs-target="#slides-nav" data-bs-toggle="collapse" href="#">
            <i class="ri-file-list-fill"></i><span>Slides</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="slides-nav"
            class="nav-content collapse {{ Str::startsWith(request()->url(), route('slides.index')) ? 'show' : '' }}"
            data-bs-parent="#slides-nav">
            <li>
                <a href="{{ route('slides.index') }}"
                    class="{{ Str::startsWith(request()->url(), route('slides.index')) ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>List Slides</span>
                </a>
            </li>
        </ul>
    </li>
    

</ul>
