@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section id="adminregulations">
    <div class="container">
        <div class="row mb-5 ">
            <div class="head-daw mt-4 mb-5">
                <h2> لوائح وأنظمة الإدارة العامة
                </h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <div class="table-policies">
                <table class="table table-bordered text-center table-hover">
                    <thead>

                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="">
                                    اللائحة الأساسية لجمعية نمو بعقلة الصقور
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    الهيكل التنظيمي
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    الوصف الوظيفي
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    الإجراءات والنماذج
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    الصلاحيات
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    النظام المالي
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    حقوق وأجور العاملين
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    سلم الرواتب والمكافآت
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    الرقابة والجودة
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">
                                    لائحة التطوع
                                </a>
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
