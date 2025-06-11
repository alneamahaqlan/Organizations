@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section id="bank-inf">
    <div class="container">
        <div class="row mb-5 mt-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2>
                    الحسابات البنكية
                </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="info-bank text-center">
                <img src="{{ asset("{{ asset(") }}" ./images/bankinformation/Screenshot 2025-05-26 073414.jpg") }}"
                    alt="" class="img-fluid">

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
