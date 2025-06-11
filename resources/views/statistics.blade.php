@extends('layouts.app')

@section('title', 'نمو')

@section('content')



<section id="statics">
    <div class="container">
        <div class="row mb-5 mt-5 ">
            <h2 class="title-object ">
                الاحصائيات
            </h2>
            <hr>
            <div class="statics-rep">
                <div class="row">
                    <div class="col-lg-4 title-stat">
                        <h2>
                            نمو في أرقام :

                        </h2>
                        <hr>
                    </div>
                    <div class="col-lg-8 contain-stat ">
                        <button type="button" class="btn btn-secondary text-center ">
                            <i class="fa-solid fa-chart-simple" style="color: #ffffff;"></i>
                            <a href=""> لعــام 2023</a>
                        </button>
                        <button type="button" class="btn btn-secondary text-center ">
                            <i class="fa-solid fa-chart-simple" style="color: #ffffff;"></i>
                            <a href=""> لعــام 2024</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mb-5 mt-5 stat-y">
            <div class="col-lg-6">
                <h2 class="title-object ">
                    إحصائيات الخاتمون
                </h2>
                <hr>
                <table class="table table-bordered text-center table-hover">
                    <thead>
                        <tr>
                            <th scope="col">العام
                            </th>
                            <th scope="col">عدد المستفيدين
                            </th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                185
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                145
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                458
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                789
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                589
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <h2 class="title-object ">
                    إحصائيات الخاتمات
                </h2>
                <hr>
                <table class="table table-bordered text-center table-hover">
                    <thead>
                        <tr>
                            <th scope="col">العام
                            </th>
                            <th scope="col">عدد المستفيدين
                            </th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                185
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                145
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                458
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                789
                            </td>

                        </tr>
                        <tr>
                            <td>
                                1440 هـ
                            </td>
                            <td>
                                589
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
