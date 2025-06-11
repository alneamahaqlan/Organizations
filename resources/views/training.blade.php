@extends('layouts.app')

@section('title', 'نمو')

@section('content')

<div class="container-fluid train-bck">

    <section class="training ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-training ">
                        <h3>
                            قسم المشاريع
                        </h3>
                        <p>للإطلاع على جديد المشاريع
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <a href="#">اضغط هنا</a>
                            </button>

                            <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> الدورات المتاحة</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('images/programming/1.jpg') }}" class="img-fluid" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">إغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </p>


                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#calendar">
                            <a href="#"> التقويم الدراسي</a>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="calendar" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> التقويم الدراسي </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('images/calendar/img2.png') }}" class="img-fluid" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">إغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#programming">
                            <a href="#"> التقرير الشامل للدورات العلمية </a>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="programming" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> التقرير الشامل </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <embed src="#" width="1000px" height="2100px" frameborder="0" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">إغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-lg-6 img-training text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="static-training">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="static-training ">
                        <h3> إحصائيات وأرقام المشاريع في نمو</h3>
                        <p>
                            ي جمعية نمو السكني، نؤمن بأن الشفافية هي حجر الزاوية لبناء الثقة وتحقيق التنمية المستدامة.
                            لذا، نفخر بتقديم تقاريرنا الدورية التي تعرض بوضوح كامل كيفية استغلال تبرعاتكم في تقديم حلول
                            إسكانية وتنموية فعالة في المحافظة. كل ريال تبرعت به يساهم مباشرة في تحقيق رؤيتنا: "ننمي حياة
                            ونبني أمل"

                        </p>
                    </div>
                    <div class="static-number">
                        <div class="container">
                            <div class="row ">
                                <div class="col  text-center">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                    <h2 data-toggle="counterUp">9240</h2>
                                    <h6>
                                        عدد المستفدين
                                    </h6>
                                </div>
                                <div class="col  text-center">
                                    <i class="fa-solid fa-users-line"></i>
                                    <h2 data-toggle="counterUp">12123</h2>
                                    <h6>
                                        عدد المشاريع
                                    </h6>
                                </div>
                                <div class="col  text-center">
                                    <i class="fa-regular fa-newspaper"></i>
                                    <h2 data-toggle="counterUp">9</h2>
                                    <h6>
                                        عدد المنتسبين
                                    </h6>
                                </div>
                                <div class="col  text-center">
                                    <i class="fa-solid fa-users"></i>
                                    <h2 data-toggle="counterUp">1570</h2>
                                    <h6>
                                        عدد المنتسبين
                                    </h6>
                                </div>
                                <div class="col  text-center">
                                    <i class="fa-solid fa-users-gear"></i>
                                    <h2 data-toggle="counterUp">2560</h2>
                                    <h6>
                                        اجمالي التبرعات


                                    </h6>
                                </div>
                                <div class="col  text-center">
                                    <i class="fa-solid fa-earth-americas"></i>
                                    <h2 data-toggle="counterUp">1478951</h2>
                                    <h6>
                                        عدد زوار الموقع
                                    </h6>
                                </div>
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide mb-5 mt-5 "
                                data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/bankinformation/561182_500.jpeg') }}"
                                            class="d-block w-100 img-fluid" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/bankinformation/561188_500.jpeg') }}"
                                            class="d-block w-100 img-fluid" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/bankinformation/561188_500.jpeg') }}"
                                            class="d-block w-100 img-fluid" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 register-news  text-center">
                    <img src="{{ asset('images/static.svg') }}" alt="" class="img-fluid">
                    <form class="row g-3">
                        <div class="input-group  mt-5 mb-3">
                            <input type="text" class="form-control" placeholder="ادخلك اميلك لتصلك جديد المشاريع"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">اشترك </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
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