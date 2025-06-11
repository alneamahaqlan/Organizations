@extends('layouts.app')

@section('title', 'نمو')

@section('content')


<section id="policies">
    <div class="container">
        <div class="row mb-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2> سياسات الجمعية </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="table-policies">
                <table class="table table-bordered table-hover">
                    <thead>

                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                سياسة الابلاغ عن المخالفات وحماية مقدمي البلاغات</td>
                            <td>
                                للاطلاع اضغط -
                                <a href="#">هنا</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                سياسة تعارض المصالح
                            <td>
                                للاطلاع اضغط -
                                <a href="#">هنا</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                سياسة جمع التبرعات
                            </td>
                            <td>
                                للاطلاع اضغط -
                                <a href="#">هنا</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                سياسة حفظ الوثائق وإتلافها
                            </td>
                            <td>
                                للاطلاع اضغط -
                                <a href="#">هنا</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                سياسة خصوصية البيانات
                            </td>
                            <td>
                                للاطلاع اضغط -
                                <a href="#">هنا</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                سياسة التطوع
                            </td>
                            <td>
                                للاطلاع اضغط -
                                <a href="#">هنا</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                سياسة تنظيم العلاقة مع المستفيدين
                            <td>
                                للاطلاع اضغط -
                                <a href="#">هنا</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
