<section id="example">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 title-ex">
                <h2>{{ __('نماذج من أعمال الجمعية') }}</h2>
                <hr />
            </div>
            <div class="col-lg-2 more-ex-btn">
                <a href="https://numo-uqlat.sa/" class="btn btn-secondary" role="button">
                    {{ __('المزيد من النماذج') }}
                    <i class="fa-solid fa-angles-left"></i>
                </a>
            </div>
        </div>

        @php
        use App\Models\Video;
        $videos = Video::with('media')->latest()->take(5)->get();
        @endphp

        <div class="row vid mt-4">
            @foreach ($videos as $video)
            @php $src = $video->getFirstMediaUrl('videos'); @endphp
            @if ($src)
            <div class="col">
                <video controls width="100%">
                    <source src="{{ $src }}" type="video/mp4">
                    {{ __('Your browser does not support the video tag.') }}
                </video>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
