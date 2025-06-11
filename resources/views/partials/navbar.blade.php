<section id="navbar">
    <div class="container-fluid mt-2">
        <div class="row align-items-center al-nav">
            <!-- Logo -->
            <div class="col-lg-2 col-md-3 col-4 logo text-center text-lg-start mb-2 mb-lg-0">
                <a class="navbar-brand logo-nav" href="{{ route('home') }}">
                    <img src="./images/logo.png" alt="Logo" class="img-fluid" style="width: 80px; height: 80px;" />
                </a>
            </div>

            <!-- Navigation -->
            <div class="col-lg-8 col-md-6 col-8 navbar-con">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <!-- الرئيسية -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">الرئيسية</a>
                            </li>

                            <!-- نمو -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="numoDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">نمو</a>
                                <ul class="dropdown-menu" aria-labelledby="numoDropdown">
                                    <li><a class="dropdown-item" href="{{ route('objectif') }}"><i
                                                class="fa-solid fa-bullseye"></i> أهداف الجمعية</a></li>
                                    <li><a class="dropdown-item" href="{{ route('begining') }}"><i
                                                class="fa-solid fa-flag-checkered"></i> النشأة والبداية</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user-tie"></i>
                                            المؤسس</a></li>
                                    <li><a class="dropdown-item" href="{{ route('board-of-directors') }}"><i
                                                class="fa-solid fa-users-line"></i> أعضاء مجلس الإدارة</a></li>
                                    <li><a class="dropdown-item" href="{{ route('administrative-structure') }}"><i
                                                class="fa-solid fa-users-gear"></i> الهيكل الإداري</a></li>
                                    <li><a class="dropdown-item" href="{{ route('operational-plans') }}"><i
                                                class="fa-solid fa-newspaper"></i> خطط الجمعية</a></li>
                                    <li><a class="dropdown-item" href="{{ route('measu-benefi') }}"><i
                                                class="fa-solid fa-chart-line"></i> قياس رضا المستفيدين</a></li>
                                    <li><a class="dropdown-item" href="{{ route('feasibility-policy') }}"><i
                                                class="fa-solid fa-check"></i> سياسة الجودة</a></li>
                                    <li><a class="dropdown-item" href="{{ route('vision-message') }}"><i
                                                class="fa-solid fa-eye"></i> الرؤية والرسالة</a></li>
                                </ul>
                            </li>

                            <!-- الخدمات -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">الخدمات</a>
                                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-file-lines"></i> نظام
                                            نمو</a></li>
                                    <li><a class="dropdown-item" href="{{ route('setup-loop') }}"><i
                                                class="fa-solid fa-user-plus"></i> طلب إقامة برنامج</a></li>
                                    <li><a class="dropdown-item" href="{{ route('initiative') }}"><i
                                                class="fa-solid fa-handshake-angle"></i> المبادرات</a></li>
                                    <li><a class="dropdown-item" href="{{ route('email') }}"><i
                                                class="fa-regular fa-envelope"></i> البريد الإلكتروني</a></li>
                                    <li><a class="dropdown-item" href="{{ route('training') }}"><i
                                                class="fa-solid fa-gears"></i> نظام إدارة التدريب</a></li>
                                    <li><a class="dropdown-item" href="{{ route('hoffadh') }}"><i
                                                class="fa-solid fa-mobile-screen-button"></i> منصة نمو التعليمية</a>
                                    </li>
                                    <li><a class="dropdown-item" href="https://maps.app.goo.gl/mnxYorDidK3eU1L77"><i
                                                class="fa-solid fa-location-dot"></i> موقع القسم الرجالي</a></li>
                                    <li><a class="dropdown-item" href="https://maps.app.goo.gl/mnxYorDidK3eU1L77"><i
                                                class="fa-solid fa-map-location-dot"></i> موقع القسم النسائي</a></li>
                                </ul>
                            </li>

                            <!-- الحوكمة -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="govDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">الحوكمة</a>
                                <ul class="dropdown-menu" aria-labelledby="govDropdown">
                                    <li><a class="dropdown-item" href="{{ route('policies') }}"><i
                                                class="fa-regular fa-newspaper"></i> سياسات الجمعية</a></li>
                                    <li><a class="dropdown-item" href="{{ route('adminregulations') }}"><i
                                                class="fa-regular fa-newspaper"></i> لوائح الإدارة العامة</a></li>
                                    <li><a class="dropdown-item" href="{{ route('fieldregulations') }}"><i
                                                class="fa-regular fa-newspaper"></i> لوائح الميدان</a></li>
                                    <li><a class="dropdown-item" href="{{ route('associations-leaders') }}"><i
                                                class="fa-solid fa-users"></i> القائمين على الجمعية</a></li>
                                    <li><a class="dropdown-item" href="{{ route('annual-budget') }}"><i
                                                class="fa-solid fa-coins"></i> الميزانية السنوية</a></li>
                                    <li><a class="dropdown-item" href="{{ route('standing-committees') }}"><i
                                                class="fa-solid fa-user-group"></i> اللجان الدائمة</a></li>
                                    <li><a class="dropdown-item" href="{{ route('association-offices') }}"><i
                                                class="fa-solid fa-briefcase"></i> مكاتب الجمعية</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-credit-card"></i>
                                            قرارات التملك</a></li>
                                    <li><a class="dropdown-item" href="{{ route('annual-reports') }}"><i
                                                class="fa-regular fa-file-pdf"></i> التقارير السنوية</a></li>
                                    <li><a class="dropdown-item" href="{{ route('statistics') }}"><i
                                                class="fa-solid fa-chart-simple"></i> الإحصائيات</a></li>
                                </ul>
                            </li>

                            <!-- الجمعية العمومية -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="assemblyDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">الجمعية العمومية</a>
                                <ul class="dropdown-menu" aria-labelledby="assemblyDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-address-card"></i>
                                            الترشح</a></li>
                                    <li><a class="dropdown-item" href="{{ route('meet') }}"><i
                                                class="fa-regular fa-file-pdf"></i> محاضر الاجتماعات</a></li>
                                    <li><a class="dropdown-item" href="{{ route('member-general') }}"><i
                                                class="fa-solid fa-users-viewfinder"></i> الأعضاء</a></li>
                                </ul>
                            </li>

                            <!-- التبرعات -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="donateDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">التبرعات</a>
                                <ul class="dropdown-menu" aria-labelledby="donateDropdown">
                                    <li><a class="dropdown-item" href="https://store.sonan.sa/"><i
                                                class="fa-solid fa-cart-shopping"></i> المتجر الإلكتروني</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://api.whatsapp.com/send?phone=966508092323"><i
                                                class="fa-solid fa-check"></i> الاستقطاع الشهري</a></li>
                                    <li><a class="dropdown-item" href="{{ route('bank-info') }}"><i
                                                class="fa-brands fa-cc-visa"></i> الحسابات البنكية</a></li>
                                </ul>
                            </li>

                            <!-- المناقصات -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">المناقصات</a>
                            </li>

                            <!-- المركز الإعلامي -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-video"></i> المركز الإعلامي
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="mediaDropdown">
                                    <li><a class="dropdown-item" href="{{ route('news') }}"><i
                                                class="fa-solid fa-rss"></i> أخبار الجمعية</a></li>
                                    <li><a class="dropdown-item" href="https://www.youtube.com/@Jm_snn"><i
                                                class="fa-solid fa-video"></i> القناة المرئية</a></li>
                                    <li><a class="dropdown-item" href="https://soundcloud.com/andlrozksmej"><i
                                                class="fa-solid fa-headphones"></i> القناة الصوتية</a></li>
                                    <li><a class="dropdown-item" href="https://www.youtube.com/@Jm_snn/shorts"><i
                                                class="fa-solid fa-chalkboard-user"></i> نماذج من الطلاب</a></li>
                                </ul>
                            </li>

                            <!-- التوظيف والتطوع -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="volunteerDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-address-book"></i> التوظيف والتطوع
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="volunteerDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-briefcase"></i> بوابة
                                            التوظيف</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-hand-holding-hand"></i>
                                            استمارة التطوع</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Donate button -->
            <div class="col-lg-2 col-md-3 text-center text-lg-end mt-3 mt-lg-0">
                <a href="https://numo-uqlat.sa/" class="btn btn-success">
                    <i class="fa-solid fa-cart-shopping"></i> للتبرع
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</section>
