@extends('layouts.app')

@section('title', 'نمو')

@section('content')


<section id="admin-structure">
    <div class="container">
        <div class="title-admin text-center my-5">
            <h2>الهيكل الاداري نمو
            </h2>
        </div>
        <div class="row">
            <div class="img-struc">
                <img src="{{ asset('images/haykal.png') }}" alt="" class="img-fluid">
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