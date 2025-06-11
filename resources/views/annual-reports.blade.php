@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section id="annualreports">
    <div class="container">
        <div class="row mb-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2>
                    التقارير السنوية
                </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="annual-rep">
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"> التقرير السنوي</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">1455 هـ </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>إعداد :قسم المشاريع </li>
                                    <li> مراجعة : القسم الإداري </li>
                                    <li> اعتماد : لجنة المراجعات </li>
                                    <li> تنفيذ: قسم الاعلام</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-success">
                                    <a href="./images/1.pdf" lang="ar">تحميل</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"> التقرير السنوي</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">1455 هـ </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>إعداد :قسم المشاريع </li>
                                    <li> مراجعة : القسم الإداري </li>
                                    <li> اعتماد : لجنة المراجعات </li>
                                    <li> تنفيذ: قسم الاعلام</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-secondary disabled">
                                    <a href="./images/1.pdf">غير متاح</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"> التقرير السنوي</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">1455 هـ </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>إعداد :قسم المشاريع </li>
                                    <li> مراجعة : القسم الإداري </li>
                                    <li> اعتماد : لجنة المراجعات </li>
                                    <li> تنفيذ: قسم الاعلام</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-secondary disabled">
                                    <a href="./images/1.pdf">غير متاح</a>
                                </button>
                            </div>
                        </div>
                    </div>
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