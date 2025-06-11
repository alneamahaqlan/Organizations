@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section id="standing-committees">
    <div class="container">
        <div class="row mb-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2>
                    اللجان الدائمة
                </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="annual-committees">
                <div class="row jus">
                    <div class="col-lg-9">
                        <div class="table-policies">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            م
                                        </th>
                                        <th scope="col">
                                            رقم الاجتماع
                                        </th>
                                        <th scope="col">
                                            تاريخ التكليف
                                        </th>
                                        <th scope="col">
                                            مسمى اللجنة
                                        </th>
                                        <th scope="col">
                                            مدة التكليف
                                        </th>
                                        <th scope="col">
                                            رئيس اللجنة
                                        </th>
                                        <th scope="col">
                                            أعضاء اللجنة
                                        </th>
                                        <th scope="col">
                                            المهمة المطلوبة
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">1</td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">1445/2
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            1445/10/11
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            لجنة التطوير
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            دائمة
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            بدر الحربي
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:right;">

                                            <ul>
                                                <li> بدر الحربي</li>
                                                <li> بدر الحربي</li>
                                                <li> بدر الحربي</li>
                                                <li> بدر الحربي</li>
                                            </ul>
                                        </td>
                                        <td rowspan="6">
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>
                                            <hr>
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>
                                            <hr>
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>
                                            <hr>
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>

                                    </tr>

                                </tbody>
                                <tbody>
                                    <tr>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">2</td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">1445/2
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            1445/10/11
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            لجنة الاستشارات
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            جزئي
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:center;">
                                            بدر الحربي
                                        </td>
                                        <td rowspan="6" style="vertical-align : middle;text-align:right;">

                                            <ul>
                                                <li> بدر الحربي</li>
                                                <li> بدر الحربي</li>
                                                <li> بدر الحربي</li>
                                                <li> بدر الحربي</li>
                                            </ul>
                                        </td>
                                        <td rowspan="6">
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>
                                            <hr>
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>
                                            <hr>
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>
                                            <hr>
                                            <p>ترشيح المراجع القانوني المناسب للجمعية.</p>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="{{ asset("{{ asset(") }}" ./images/lig.jpg") }}" alt="" class="w-100"
                            class="img-fluid">
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
