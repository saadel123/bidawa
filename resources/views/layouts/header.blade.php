<div class="container-fluid bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a href="/"> <img src="{{ asset('img/logo.png') }}" style="width: 300px;" /></a>
            </div>
            <div class="col-md-4 " style="margin-top: 20px;">
                <div class="row">
                    <div class="col-md-12 col-xs-12	suivez-nous ">
                        <div style="">
                            <span class="suivez-nous-text" style="display:none;">Suivez nous &nbsp;</span>
                            <a href="https://www.facebook.com/Bidawa--100287504970845/?modal=admin_todo_tour">
                                <img class="suivez-nous-img" src="{{ asset('img/fb-icon.png') }}" /></a>
                            <a href="#"><img class="suivez-nous-img" src="{{ asset('img/yt-icon.png') }}" /></a>
                            <span
                                style="border-left:2px solid rgb(128, 128, 128);margin-left:20px;margin-right:20px;"></span>
                            {{-- {{ app()->getLocale() }} --}}
                            @if (session()->get('locale') == 'fr' || session()->get('locale') == null)
                                <a style="color: black" href="{{ route('changeLang', ['lang' => 'ar']) }}"
                                    class="Langchange d-inline-block">العربية</a>
                            @else
                                <a style="color: black" href="{{ route('changeLang', ['lang' => 'fr']) }}"
                                    class="Langchange d-inline-block">Français</a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--navbar-fixed-top-->
<div class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">{{ __('header.accueil') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('header.qui-sommes-nous') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="/notre-vision">{{ __('header.notre-vision') }}</a></li>
                        <li><a class="dropdown-item" href="/notre-mission">{{ __('header.notre-mission') }}</a></li>
                        <li><a class="dropdown-item" href="/nos-objectifs">{{ __('header.nos-objectifs') }}</a></li>
                        <li><a class="dropdown-item" href="/nos-valeurs">{{ __('header.nos-valeurs') }}</a></li>
                        <li><a class="dropdown-item"
                                href="/notre-organisation">{{ __('header.notre-organisation') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/activites">{{ __('header.activite') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('header.dar-beida') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <li><a class="dropdown-item" href="/importance-enjeux">{{ __('header.importance-enjeux') }}</a>
                        </li>
                        <li><a class="dropdown-item" href="/patrimoine">{{ __('header.patrimoine') }}</a></li>
                        <li><a class="dropdown-item" href="/gouvernance-ville">{{ __('header.gouvernance-ville') }}</a>
                        </li>
                        <li><a class="dropdown-item" href="/carte-Interactive">{{ __('header.carte-Interactive') }}</a>
                        </li>
                        <li><a class="dropdown-item" href="/galerie-photos">{{ __('header.galerie-photos') }}</a></li>
                        <li><a class="dropdown-item" href="/liens-utiles">{{ __('header.liens-utiles') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('header.partenariat') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                        <li><a class="dropdown-item" href="/faire-don">{{ __('header.faire-don') }}</a></li>
                        <li><a class="dropdown-item" href="/devenir-membre">{{ __('header.devenir-membre') }}</a></li>
                        <li><a class="dropdown-item"
                                href="/soutenir-association">{{ __('header.soutenir-association') }}</a></li>
                        <li><a class="dropdown-item"
                                href="/partenariats-associatifs">{{ __('header.partenariats-associatifs') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">{{ __('header.contact') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/media">{{ __('header.media') }}</a>
                </li>

            </ul>
        </div>
    </div>
</div>
