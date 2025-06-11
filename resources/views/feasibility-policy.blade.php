@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section class="objective">
    <div class="container">
        <div class="row">
            <h2 class="title-object "> سياسة الجودة
            </h2>
            <hr>
            <div class="col-lg-5 img-plan">
                <img src="{{ asset('images/jawd.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 cotainer-policy ">
                <div class="row">
                    <p>
                        تلتزم جمعية “ نمو السكني ” بتقديم خدمات عالية الجودة لجميع فئات المتعاملين . من خلال تعليم السنة
                        النبوية والتربية عليه.
                        نؤكد ذلك عن طريق العمل المؤسسي ووضع أهداف للجودة يتم قياسها ومراجعتها دورياً لتحقيق التطوير
                        والتحسين المستمر وفق متطلبات المواصفة العالمية الأيزو 9001:2015
                        غايتنا ارضاء الله ثم ارضاء المتعاملين معنا بتحقيق وتجاوز متطلباتهم وتوقعاتم من خلال متابعة وقياس
                        الأداء باستمرار والالتزام بكافة القوانين والأنظمة بالمملكة العربية السعودية
                        تشجع الجمعية الابداع والإتقان في خدمة السنة النبوية واستخدام المنهجيات التعليمية والتربوية
                        المتميزة عبر شراكة فاعلة واتاحة باب التطوع للمجتمع لتحقيق الخيرية المنشودة
                    </p>
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