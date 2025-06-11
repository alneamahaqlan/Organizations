@php
use App\Models\member;

$members = member::all();
@endphp

<section id="about-us">
    <div class="container">
        <div class="row title-about text-center">
            <h2 class="my-5">اعضاء مجلس الادارة</h2>

            @foreach ($members as $member)
            <div class="col">
                <div class="card">
                    <div class="face front-face">
                        <img src="{{ $member->getFirstMediaUrl('members') ?: asset('images/default-member.jpg') }}"
                            alt="{{ $member->name }}" class="profile">
                        <div class="pt-3 text-uppercase name">{{ $member->name }}</div>
                        <div class="designation">{{ $member->position }}</div>
                    </div>
                    <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <div class="testimonial">{{ $member->description }}</div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
