@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section class="objective">
    <div class="container">
        <div class="row">
            <h2 class="title-object "> قياس رضا المستفيدين
            </h2>
            <hr>
            <div class="col-lg-5 img-plan">
                <img src="{{ asset("{{ asset(") }}" ./images/plan.jpg") }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 cotainer-benif">
                <div class="row">
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-success btn-lg">
                            <a href="">قياس رضا الداعمين</a>
                        </button>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-success btn-lg">
                            <a href="">قياس رضا المعلمين</a>
                        </button>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-success btn-lg">
                            <a href="">قياس رضا العاملين</a>
                        </button>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-success btn-lg">
                            <a href="">قياس رضا المعلمات</a>
                        </button>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-success btn-lg">
                            <a href="">قياس رضا المشرفين</a>
                        </button>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-success btn-lg">
                            <a href="">قياس رضا الطلاب</a>
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
