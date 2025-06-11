@extends('layouts.app')

@section('title', 'نمو')

@section('content')


<section id="annual-budget">
    <div class="container">
        <div class="row mb-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2>
                    الميزانية السنوية
                </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="annual-list">
                <div class="row">
                    <div class="col-lg-4 ">
                        <ul>
                            <li>
                                <a href="">
                                    ميزانية 1443
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1445
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1446
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1447
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1448
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul>
                            <li>
                                <a href="">
                                    ميزانية 1449
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1450
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1451
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1452
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1453
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul>
                            <li>
                                <a href="">
                                    ميزانية 1454
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1455
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1456
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1457
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    ميزانية 1458
                                </a>
                            </li>
                        </ul>
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
