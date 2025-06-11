@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section class="objective">
    <div class="container">
        <div class="row">
            <h2 class="title-object "> الرؤية والرسالة
            </h2>
            <hr>
            <div class="col-lg-5 img-plan">
                <img src="{{ asset('images/visionsandmessage.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 cotainer-vision ">
                <div class="row">
                    <div class="vision">
                        <h3>رؤيـتـنا:
                        </h3>
                        <p>
                            "أن نكون الرائدة في تحقيق الاستقرار السكني والتنمية المجتمعية الشاملة في المحافظة، لنرسم
                            البسمة على الوجوه، ونبني أملًا راسخًا لحياة كريمة ومستقبل مزدهر للجميع."

                        </p>
                    </div>
                    <div class="message">
                        <h3>رسالتنا :
                        </h3>
                        <p>
                            في كل بيت نبنيه، وفي كل حل سكني نقدمه، ننمّي حياة ونبني أملًا في محافظتنا. نعمل لنوفر للأسر
                            المستحقة مأوىً كريمًا ومستقبلًا أكثر استقرارًا وازدهارًا.
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