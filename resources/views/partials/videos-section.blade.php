<section id="youtube">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 title-ex">
                <h2>قناة جمعية نمو</h2>
                <hr />
            </div>
            <div class="col-lg-2 more-ex-btn">
                <a href="https://www.youtube.com/@Jm_snn/shorts" class="btn btn-secondary" role="button">
                    <i class="fa-solid fa-circle-play"></i>
                    شاهد أكثر
                </a>
            </div>
        </div>

        @php
        use App\Models\YouTube;
        $videos = YouTube::latest()->take(6)->get();
        @endphp

        <div class="row vid mt-4">
            @foreach ($videos as $video)
            @php
            $videoId = Str::afterLast($video->url, 'v=');
            if (Str::contains($videoId, '&')) {
            $videoId = Str::before($videoId, '&');
            }
            if (!Str::contains($video->url, 'v=')) {
            $videoId = Str::afterLast($video->url, '/');
            }
            @endphp

            <div class="col mb-3">
                <iframe width="311" height="175" src="https://www.youtube.com/embed/{{ $videoId }}"
                    title="{{ $video->title }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
            @endforeach
        </div>
    </div>
</section>
