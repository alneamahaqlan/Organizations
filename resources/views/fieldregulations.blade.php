@extends('layouts.app')

@section('title', 'نمو')

@section('content')


<section id="adminregulations">
    <div class="container">
        <div class="row mb-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2>
                    لوائح وأنظمة الميدان
                </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="col-lg-8">
                <div class="table-policies">
                    <table class="table table-bordered text-center table-hover">
                        <thead>

                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="">
                                        ضوابط الصرف
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">
                                        لائحة القسم النسائي
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">
                                        دليل إنتاجية المعلم والمعلمة
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">
                                        الدورات المكثفة
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">
                                        مشروع الدورات الصيفية
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">
                                        مشروع الدورات الرمضانية
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">
                                        معايير قياس التميز للحلقات
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">
                                        معايير قياس التميز للقسم النسائي </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('images/reg.jpg') }}" alt="" class="img-fluid rounded img-fluid">
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