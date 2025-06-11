@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section id="description">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-8">
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex d-app">
                    <button>
                        <a href="https://play.google.com/store/apps/details?id=com.arabdt.hoffaz&hl=ar&gl=US">
                            <img src="{{ asset('images/android_03.png') }}" alt="" class="img-fluid">
                        </a>
                    </button>
                    <button>
                        <a
                            href="https://apps.apple.com/sa/app/%D8%AD%D9%81%D8%A7%D8%B8-%D8%A7%D9%84%D8%B7%D8%A7%D9%84%D8%A8/id1604822853?l=ar">
                            <img src="{{ asset('images/apple_03.png') }}" alt="" class="img-fluid">
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="static-minasa">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="head-daw mt-4 mb-5">
                    <h2>إحصائيات وأرقام التعليم في منصة حفاظ</h2>
                    <hr class="first">
                    <hr class="second">
                </div>
                <div class="static-number">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <h2 data-toggle="counterUp">12</h2>
                                <h6>عدد المعلمين</h6>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-users-line"></i>
                                <h2 data-toggle="counterUp">19000</h2>
                                <h6>عدد الطلاب</h6>
                            </div>
                            <div class="col">
                                <i class="fa-regular fa-newspaper"></i>
                                <h2 data-toggle="counterUp">9</h2>
                                <h6>عدد الدورات</h6>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-users"></i>
                                <h2 data-toggle="counterUp">1570</h2>
                                <h6>عدد المسجلين</h6>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-users-gear"></i>
                                <h2 data-toggle="counterUp">2560</h2>
                                <h6>عدد المستفيدين</h6>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-earth-americas"></i>
                                <h2 data-toggle="counterUp">1478951</h2>
                                <h6>عدد زوار الموقع</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('images/minasadesc/static.png') }}" class="rounded img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section id="desc-minasa" style="margin-bottom: 60px;">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-sm-between flex-wrap">
            <div class="head-daw mt-4 mb-5">
                <h2>المنصة في سطور</h2>
                <hr class="first">
                <hr class="second">
            </div>

            <div class="card">
                <img src="{{ asset('images/minasadesc/about_03.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">من نحن</h5>
                    <hr>
                    <p class="card-text">
                        منصة نمو التعليمية: نزرع المعرفة لبناء مستقبل مشرق...
                    </p>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('images/minasadesc/vision_03.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">رؤيتنا</h5>
                    <hr>
                    <p class="card-text">في جمعية نمو السكني، تتجسد رؤيتنا...</p>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('images/minasadesc/message_03.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">رسالتنا</h5>
                    <hr>
                    <p class="card-text">في منصة "نمو" التعليمية التربوية...</p>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('images/minasadesc/goal_03.png') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">أهدافنا</h5>
                    <hr>
                    <p class="card-text">تطمح منصة "نمو التعليمية"، التابعة لجمعية نمو...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="static-minas">
    <div class="container">
        <div class="row">
            <div class="head-daw mt-4 mb-5">
                <h2>برامج المنصة</h2>
                <hr class="first">
                <hr class="second">
            </div>
            <div class="col-lg">
                <div class="row justify-content-center">

                    @for ($i = 0; $i < 6; $i++) <div class="col-lg-3 row">
                        <div class="title-prg">
                            <h3>برنامج {{$i+1}}</h3>
                        </div>
                        <div class="block-prg text-center">
                            <img style="border-radius: 5%;" src="{{ asset('images/minasadesc/9c888be9c6c1cda.jpg') }}"
                                alt="" class="img-fluid">
                            <p>
                                منهج منظم يهدف إلى تنمية الجوانب الأخلاقية، الاجتماعية، والنفسية لدى الأفراد...
                            </p>
                        </div>
                </div>
                @endfor

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
