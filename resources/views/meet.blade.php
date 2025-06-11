@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<section id="meet">
    <div class="container">
        <div class="row mb-5 mt-5 ">
            <h2 class="title-object ">
                محاضر الاجتماعات
            </h2>
            <hr>
            <div class="statics-rep mb-5">
                <div class="row">
                    <div class="col-lg-4 title-stat">
                        <h2>
                            محاضر اجتماع الجمعية العمومية العادية :
                            <hr>
                        </h2>

                    </div>
                    <div class="col-lg-8 meet-stat row ">
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statics-rep mb-5">
                <div class="row">
                    <div class="col-lg-4 title-stat">
                        <h2>
                            محاضر فرز الأصوات :
                            <hr>
                        </h2>

                    </div>
                    <div class="col-lg-8 meet-stat-c row ">
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statics-rep mb-5">
                <div class="row">
                    <div class="col-lg-4 title-stat">
                        <h2>
                            محاضر اجتماع الجمعية العمومية غير العادية :
                            <hr>
                        </h2>

                    </div>
                    <div class="col-lg-8 meet-stat row ">
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statics-rep ">
                <div class="row">
                    <div class="col-lg-4 title-stat">
                        <h2>
                            محاضر فرز الأصوات :
                            <hr>
                        </h2>

                    </div>
                    <div class="col-lg-8 meet-stat-c row ">
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn  text-center rounded">
                                <a href=""> محضر اجتماع الجمعية العمومية العادية الأول</a>
                            </button>
                        </div>
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
