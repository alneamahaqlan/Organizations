@extends('layouts.app')

@section('title', 'نمو')

@section('content')
<section class="objective">
    <div class="container">
        <div class="row">
            <h2 class="title-object "> أهداف الجمعية</h2>
            <hr>
            <div class="col-lg-5 img-objective">
                <img src="{{ asset('images/object.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 cotainer-object">
                <h2>أهداف جمعية نمو السكني في منطقة القصيم
                </h2>
                <p>تسعى الجمعية لتحقيق الأهداف التالية:
                </p>
                <ol>
                    <li>
                        بناء وتأهيل المنازل: توفير وحدات سكنية جديدة للأسر الأكثر احتياجًا، وإعادة تأهيل المنازل القائمة
                        لضمان بيئة صحية وآمنة للعيش.
                    </li>
                    <li>
                        تخفيف الأعباء الإيجارية: مساعدة الأسر غير القادرة على تحمل أعباء الإيجار من خلال برامج دعم
                        الإيجار المؤقتة أو الدائمة.
                    </li>
                    <li>
                        برامج التنمية الاقتصادية: ربط المستفيدين بفرص التدريب المهني والبرامج التي تساعدهم على توليد
                        الدخل، لضمان استدامة المعيشة بعد توفير السكن.
                    </li>
                    التوعية والإرشاد الأسري: تقديم برامج توعوية حول الإدارة المالية، التربية الأسرية، وأهمية الحفاظ على
                    البيئة السكنية.
                    </li>
                </ol>
                <div class="dawnload-object ">
                    <button type="button" class="btn btn-success">
                        <a href="">الأهداف الاستراتيجية</a>
                    </button>
                    <button type="button" class="btn btn-success">
                        <a href="">الأهداف التشغيلية</a>
                    </button>

                </div>
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