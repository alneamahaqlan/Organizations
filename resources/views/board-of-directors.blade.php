@extends('layouts.app')

@section('title', 'نمو')

@section('content')



<section class="objective">
    <div class="container">
        <div class="row">
            <h2 class="title-object "> أعضاء مجلس الادارة </h2>
            <hr class="str">
            <div class="director row">
                <div class="col-lg-4 direct-block  ">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">رئيس المجلس</p>
                </div>
                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct"> نائب رئيس المجلس</p>
                </div>
                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">المشرف المالي
                    </p>
                </div>
                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">عضواً </p>
                </div>
                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">عضواً </p>
                </div>

                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">عضواً </p>
                </div>
                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">عضواً </p>
                </div>
                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">عضواً </p>
                </div>
                <div class="col-lg-4 direct-block">
                    <h3 class="name-direct">فضيلة الشيخ / بدر الحربي</h3>
                    <p class="title-direct">عضواً </p>
                </div>
            </div>
            <div class="sou-direct text-center">
                <p class=" mb-3">
                    مدة دورة المجلس أربع سنوات
                </p>
                <p>
                    المدة المتاحة للأعضاء من تاريخ 1447/09/17هـ حتى تاريخ 1450/09/17هـ
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
