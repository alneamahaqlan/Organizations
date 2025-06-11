@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section class="objective">
    <div class="container">
        <div class="row">
            <div class="head-daw mt-4">
                <h2> المبادرة</h2>
                <hr class="first">
                <hr class="second ">
            </div>
            <hr>
            <div class="col-lg-5 img-plan">
                <img src="{{ asset('images/initiative.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7  programme-loop">
                <div class="content-dawrat">
                    <form onsubmit="sendEmail(); reset(); return false;" class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label"> الإسم واللقب </label>
                            <input type="text" class="form-control" id="name" placeholder="..." required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label"> الإيميل</label>
                            <input type="email" class="form-control" id="email" placeholder="..." required>
                        </div>
                        <div class="col-md-6">
                            <label for="titleinitiative" class="form-label">عنوان المبادرة</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="titleinitiative"
                                    aria-describedby="inputGroupPrepend2" placeholder="..." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="optioninitiative" class="form-label">نوع المبادرة</label>
                            <select class="form-select" id="optioninitiative" required>
                                <option value="">اختر...</option>
                                <option>دائم</option>
                                <option>جزئي</option>
                                <option>دورات</option>
                                <option>إداري</option>
                                <option>تعليمي</option>
                                <option>تقني</option>
                            </select>
                        </div>
                        <div class="col-lg-12 ">
                            <label for="bodyinitiative" class="form-label">ادخل نص المبادرة</label>
                            <textarea class="form-control" id="bodyinitiative" placeholder="  ..." rows="4" cols="50"
                                required></textarea>
                        </div>

                        <div class="col-lg-12 mt-3 ">
                            <button class="btn btn-primary" type="submit"> إرسال</button>
                        </div>
                    </form>
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