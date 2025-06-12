<section id="sunan-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 title-ex">
                <h2>اخبار الجمعية</h2>
                <hr />
            </div>
            <div class="col-lg-2 more-ex-btn">
                <a href="#" class="btn btn-secondary">
                    <i class="fa-solid fa-globe"></i>
                    المزيد من الأخبار
                </a>
            </div>
        </div>

        @php
        use App\Models\News;
        $newsItems = News::latest()->take(6)->get();
        @endphp

        <div class="row featurette">
            <div class="col-md-2">
                <img src="{{ asset('images/news.png') }}" alt="News Image">
            </div>

            <div class="col-md-10 content-news">
                <div class="row justify-content-center">
                    @foreach($newsItems->chunk(2) as $chunk)
                    @foreach($chunk as $item)
                    <div class="col-lg-5 mb-4 mt-3">

                        {{ $item->title }}

                        <p>{{ $item->short_description }}</p>
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
