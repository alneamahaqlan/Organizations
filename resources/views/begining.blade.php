@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section class="objective">
    <div class="container">
        <div class="row">
            <h2 class="title-object "> النشأة والبداية </h2>
            <hr>
            <div class="col-lg-5 img-objective">
                <img src="{{ asset('images/begin.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 cotainer-object">
                <h2>
                    الجمعية في سطور
                </h2>

                <p class="desc-sunan">
                    تأسست جمعية نمو السكني إيمانًا راسخًا بأن المسكن اللائق هو حجر الزاوية لبناء حياة كريمة ومستقبل
                    مزدهر. من قلب المحافظة، انطلقت "نمو" لتكون جسرًا للعطاء، متخصصة في تقديم حلول إسكانية وتنموية
                    مستدامة للأسر الأشد حاجة. لم تقتصر رؤيتنا على توفير أربعة جدران فحسب، بل امتدت لتشمل تنمية شاملة
                    تلامس حياة الأفراد والأسر، من خلال بناء منازل آمنة ومستقرة، وتأهيل بيئات سكنية صحية، والمساهمة في
                    تمكين الأسر اقتصاديًا واجتماعيًا. شعارنا "ننمي حياة ونبني أمل" يلخص جوهر عملنا: فكل لبنة نضعها هي
                    بذرة أمل نزرعها، وكل مشروع سكني هو خطوة نحو حياة أفضل وأكثر استقرارًا لأهالي محافظتنا.
                </p>


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