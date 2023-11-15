<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="/admin/home">
            <i class="bi bi-grid"></i>
            <span>Home</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link  {{ request()->is('evenements*') ? 'active' : '' }}" data-bs-target="#evenements-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>événements</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="evenements-nav" class="nav-content  {{ request()->is('evenements*') ? 'show' : '' }}"
            data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('evenements.index') }}" class="{{ request()->is('evenements*') ? 'show' : '' }}">
                    <i class="bi bi-circle"></i><span>List événements</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ request()->is('contacts*') ? 'active' : '' }}" data-bs-target="#contacts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contacts-nav" class="nav-content  {{ request()->is('contacts*') ? 'show' : '' }}"
            data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('contacts.index') }}" class="{{ request()->is('contacts*') ? 'show' : '' }}">
                    <i class="bi bi-circle"></i><span>List contacts</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ request()->is('membres*') ? 'active' : '' }}" data-bs-target="#membres-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Membres</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="membres-nav" class="nav-content  {{ request()->is('membres*') ? 'show' : '' }}"
            data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('membres.index') }}" class="{{ request()->is('membres*') ? 'show' : '' }}">
                    <i class="bi bi-circle"></i><span>List membres</span>
                </a>
            </li>
        </ul>
    </li>

</ul>
