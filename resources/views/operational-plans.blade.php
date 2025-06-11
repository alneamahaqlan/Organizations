@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section class="objective">
    <div class="container">
        <div class="row">
            <h2 class="title-object "> خطط نمو
            </h2>
            <hr>
            <div class="col-lg-5 img-plan">
                <img src="{{ asset('images/plan.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 cotainer-object">
                <div class="row plan-su">
                    <div class="col ">
                        <h3>الخطة التشغيلية لجمعية نمو
                        </h3>
                        <button type="button" class="btn btn-success">
                            <a href="#">الخطة التشغيلية</a>
                        </button>

                    </div>
                    <div class="col">
                        <h3>الخطة التشغيلية لجمعية نمو
                        </h3>
                        <button type="button" class="btn btn-success">
                            <a href="#">الخطة التشغيلية</a>
                        </button>

                    </div>
                    <div class="col">
                        <h3>الخطة التشغيلية لجمعية نمو
                        </h3>
                        <button type="button" class="btn btn-success">
                            <a href="#">الخطة التشغيلية</a>
                        </button>

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