@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section class="objective">
    <div class="container">
        <div class="row">
            <div class="head-daw mt-4">
                <h2> الإيميلات الرسمية للجمعية</h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <hr>
            <div class="col-lg-5 img-plan">
                <img src="{{ asset('images/email.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7  programme-loop">
                <div class="row" style="margin-right:50px;">
                    <div class="col-lg-6 vision ">
                        <h5>الإيميل الرئيسي للجمعية:
                        </h5>
                        <p>
                            <a style="text-decoration: none;" href="mailto:numosa2023@gmail.com"> numosa2023@gmail.com

                            </a>
                        </p>
                    </div>
                    <div class=" col-lg-6 vision mb-5">
                        <h5>قسم المشاريع :
                        </h5>
                        <p>
                            <a style="text-decoration: none;" href="mailto:numosa2023@gmail.com"> numosa2023@gmail.com

                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 vision mb-5">
                        <h5> الاستشارات :
                        </h5>
                        <p>
                            <a style="text-decoration: none;" href="mailto:numosa2023@gmail.com"> numosa2023@gmail.com

                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 vision">
                        <h5> القسم الإداري :
                        </h5>
                        <p>
                            <a style="text-decoration: none;" href="mailto:numosa2023@gmail.com"> numosa2023@gmail.com

                            </a>
                        </p>
                    </div>
                    <div class=" col-lg-6 vision">
                        <h5> الدعم الفني :
                        </h5>
                        <p>
                            <a style="text-decoration: none;" href="mailto:numosa2023@gmail.com"> numosa2023@gmail.com

                            </a>
                        </p>
                    </div>
                    <div class=" col-lg-6 vision">
                        <h5> القسم التقني :
                        </h5>
                        <p>
                            <a style="text-decoration: none;" href="mailto:numosa2023@gmail.com"> numosa2023@gmail.com

                            </a>
                        </p>
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