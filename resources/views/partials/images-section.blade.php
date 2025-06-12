<section class="img-sunan mb-5">
    <div class="container">
        <h2 class="mx-auto d-table my-5"> صور الجمعية </h2>
        <div class="row">
            <div class="col-lg-5">
                @php
                use App\Models\ContentSection;
                $section = ContentSection::with(['items'])->first();
                @endphp

                @if ($section)
                <h5>{{ $section->description }}</h5>
                <div class="row">
                    @foreach ($section->items->groupBy('sort_order') as $group)
                    <div class="col-lg-6 apprtm">
                        <dl>
                            @foreach ($group as $item)
                            @if ($item->type === 'dt')
                            <dt>
                                @if($item->icon)
                                <x-dynamic-component :component="$item->icon" class="w-5 h-5 inline-block me-1" />
                                @endif
                                {{ $item->label }}
                            </dt>
                            @else
                            <dd>{{ $item->label }}</dd>
                            @endif
                            @endforeach
                        </dl>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="col-lg-7">
                @php
                use App\Models\Gallery;
                $galleryItems = Gallery::with('media')->orderBy('sort_order')->get();
                @endphp

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($galleryItems as $index => $item)
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                            class="{{ $index === 0 ? 'active' : '' }}"
                            aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}">
                        </button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($galleryItems as $index => $item)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ $item->getFirstMediaUrl('gallery') }}" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->subtitle }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
