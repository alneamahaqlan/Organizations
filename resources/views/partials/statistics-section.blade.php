@php
use App\Models\Statistic;

$statistics = Statistic::all();
@endphp

<section class="counts-section">
    <h2 class="mx-auto d-table my-5">أرقام الجمعية</h2>
    <div class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($statistics as $stat)
                <div class="col text-center">
                    @php
                    $img = $stat->getFirstMediaUrl('statistics');
                    @endphp
                    @if ($img)
                    <img src="{{ $img }}" alt="{{ $stat->title }}" width="60" height="60">
                    @else
                    <img src="{{ asset('images/default-stat.png') }}" alt="No Image" width="60" height="60">
                    @endif
                    <h2 data-toggle="counterUp">{{ $stat->value }}</h2>
                    <h6>{{ $stat->title }}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
