@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section id="news-sunan">
    <div class="container">
        <div class="row mb-5 mt-5 ">
            <h2 class="title-object "> أخبار الجمعية </h2>
            <hr>
            <div class="col-lg-8">
                <div class="new-b">
                    <div class="content-news">
                        <h1>اكمال بناء منزل ام و 9 أيتام</h1>
                    </div>
                    <div class="news-date">
                        <p>14/12/2025</p>
                    </div>
                    <div class="news-cont">
                        <p>
                            بحمد الله وتوفيقه، تم الانتهاء بنجاح من بناء منزل الأرملة، ليصبح ملاذاً دافئاً آمناً
                            لأسرتها.
                        </p>
                    </div>
                </div>
                <div class="new-b">
                    <div class="content-news">
                        <h1>اكمال بناء منزل ام و 9 أيتام</h1>
                    </div>
                    <div class="news-date">
                        <p>14/12/2025</p>
                    </div>
                    <div class="news-cont">
                        <p>
                            بحمد الله وتوفيقه، تم الانتهاء بنجاح من بناء منزل الأرملة، ليصبح ملاذاً دافئاً آمناً
                            لأسرتها.

                        </p>
                    </div>
                </div>
                <div class="new-b">
                    <div class="content-news">
                        <h1>اكمال بناء منزل ام و 9 أيتام</h1>
                    </div>
                    <div class="news-date">
                        <p>14/12/2025</p>
                    </div>
                    <div class="news-cont">
                        <p>
                            بحمد الله وتوفيقه، تم الانتهاء بنجاح من بناء منزل الأرملة، ليصبح ملاذاً دافئاً آمناً
                            لأسرتها.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <img style="width: 100%" src="{{ asset('images/155.jpg') }}" alt="" class="rounded img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script>
$('[data-toggle="counterUp"]').counterUp({
    delay: 15,
    time: 1500
});
</script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection