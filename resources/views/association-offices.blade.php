@extends('layouts.app')

@section('title', 'نمو')

@section('content')


<section id="association-offices">
    <div class="container">
        <div class="row mb-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2>
                    مكاتب الجمعية
                </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="table-policies">
                <table class="table table-bordered text-center table-hover">
                    <thead>
                        <tr>
                            <th scope="col">اسم مسؤول المكتب </th>
                            <th scope="col">اسم المكتب </th>
                            <th scope="col">بيانات التواصل
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                بدر الحربي
                            </td>
                            <td>
                                امباري
                            </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone=966504269056">+966564269056
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بدر الحربي
                            </td>
                            <td>
                                امباري
                            </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone=966504269056">+966564269056
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بدر الحربي
                            </td>
                            <td>
                                امباري
                            </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone=966504269056">+966564269056
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بدر الحربي
                            </td>
                            <td>
                                امباري </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone=966504269056">+966564269056
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بندر الحربي
                            </td>
                            <td>
                                امباري
                            </td>
                            <td>
                                <a href="https://api.whatsapp.com/send?phone=966504269056">+966564269056
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
