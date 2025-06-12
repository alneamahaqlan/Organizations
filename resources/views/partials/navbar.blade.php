<?php
use App\Models\Menu;

$menus = Menu::with(['children.page', 'page'])
    ->where('status', \App\Enums\PageStatus::Published)
    ->orderBy('sort_order')
    ->get()
    ->groupBy('parent_id');
?>

<section id="navbar">
    <div class="container-fluid mt-2">
        <div class="row align-items-center al-nav">
            <div class="col-lg-2 col-md-3 col-4 logo text-center text-lg-start mb-2 mb-lg-0">
                <a class="navbar-brand logo-nav" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid"
                        style="width: 80px; height: 80px;" />
                </a>
            </div>

            <div class="col-lg-8 col-md-6 col-8 navbar-con">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">الرئيسية</a>
                            </li>

                            @foreach ($menus[null] ?? [] as $menu)
                            @php
                            $hasChildren = isset($menus[$menu->id]);
                            $icon = $menu->icon ? "<i class=\"{$menu->icon}\"></i>" : '';
                            $url = $menu->page ? url('/' . $menu->page->slug) : '#';
                            @endphp

                            <li class="nav-item {{ $hasChildren ? 'dropdown' : '' }}">
                                <a class="nav-link {{ $hasChildren ? 'dropdown-toggle' : '' }}"
                                    href="{{ $hasChildren ? '#' : $url }}"
                                    {{ $hasChildren ? 'data-bs-toggle=dropdown aria-expanded=false' : '' }}>
                                    {!! $icon !!} {{ $menu->title }}
                                </a>

                                @if ($hasChildren)
                                <ul class="dropdown-menu">
                                    @foreach ($menus[$menu->id] as $child)
                                    @php
                                    $childUrl = $child->page ? url('/' . $child->page->slug) : '#';
                                    $childIcon = $child->icon ? "<i class=\"{$child->icon}\"></i>" : '';
                                    @endphp
                                    <li>
                                        <a class="dropdown-item" href="{{ $childUrl }}">{!! $childIcon !!}
                                            {{ $child->title }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-lg-2 col-md-3 text-center text-lg-end mt-3 mt-lg-0">
                <a href="https://numo-uqlat.sa/" class="btn btn-success">
                    <i class="fa-solid fa-cart-shopping"></i> للتبرع
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</section>