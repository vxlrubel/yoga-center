@extends('layouts.app')
@push('title', 'Enrolled Classes | Yoga Center')

@push('style')
    <link rel="stylesheet" href="{{asset('/assets/css/enrolled-classes.css')}}">
@endpush

@section('content')
<section class="page-top-section set-bg" data-setbg="assets/img/page-top-bg.jpg">
    <div class="container">
        <h2 class="p-0 m-0 fs-4 text-white fw-bold">Enrolled Classes</h2>
    </div>
</section>

<div class="clearfix bg-light">
    <div class="container py-4 py-lg-5">
        <div class="row" style="--bs-gutter-x:1rem;--bs-gutter-y:1rem;">
            <div class="col-md-6 col-xl-3">
                <div class="border bg-white pb-2">
                    <div class="ratio ratio-16x9 oveflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/classes/1.jpg')}}" alt="enrolled classes" class="enrolled-image">
                        </div>
                    </div>
                    <h4 class="fs-5 m-0 py-2 px-3 border-bottom text-truncate">Artistic Yoga</h4>
                    <div class="px-3 py-2 small border-bottom">
                        <div class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia accusantium consequatur repellat illo nam possimus.
                        </div>
                    </div>
                    <div class="px-3 py-2 small">
                        <div class="info-field">
                            <span>Enrolled</span> <span>: 21 Feb 2025</span>
                        </div>
                        <div class="info-field">
                            <span>Instructor</span> <span>: John doe</span>
                        </div>
                        <div class="info-field">
                            <span>Status</span> <span class="text-success">: Completed</span>
                        </div>
                        <div class="info-field mb-2">
                            <span>Progress</span> <span class="fw-bold">: 100%</span>
                        </div>
                        <div class="progress-range">
                            <div class="progress-complete" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="border bg-white pb-2">
                    <div class="ratio ratio-16x9 oveflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/classes/big.jpg')}}" alt="enrolled classes" class="enrolled-image">
                        </div>
                    </div>
                    <h4 class="fs-5 m-0 py-2 px-3 border-bottom text-truncate">Traditional Hatha</h4>
                    <div class="px-3 py-2 small border-bottom">
                        <div class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia accusantium consequatur repellat illo nam possimus.
                        </div>
                    </div>
                    <div class="px-3 py-2 small">
                        <div class="info-field">
                            <span>Enrolled</span> <span>: 14 Feb 2025</span>
                        </div>
                        <div class="info-field">
                            <span>Instructor</span> <span>: John doe</span>
                        </div>
                        <div class="info-field">
                            <span>Status</span> <span class="text-primary">: Ongoing</span>
                        </div>
                        <div class="info-field mb-2">
                            <span>Progress</span> <span class="fw-bold">: 30%</span>
                        </div>
                        <div class="progress-range">
                            <div class="progress-complete" style="width: 30%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="border bg-white pb-2">
                    <div class="ratio ratio-16x9 oveflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/classes/1.jpg')}}" alt="enrolled classes" class="enrolled-image">
                        </div>
                    </div>
                    <h4 class="fs-5 m-0 py-2 px-3 border-bottom text-truncate">Yoga Therapy</h4>
                    <div class="px-3 py-2 small border-bottom">
                        <div class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia accusantium consequatur repellat illo nam possimus.
                        </div>
                    </div>
                    <div class="px-3 py-2 small">
                        <div class="info-field">
                            <span>Enrolled</span> <span>: 14 Feb 2025</span>
                        </div>
                        <div class="info-field">
                            <span>Instructor</span> <span>: John doe</span>
                        </div>
                        <div class="info-field">
                            <span>Status</span> <span class="text-primary">: Ongoing</span>
                        </div>
                        <div class="info-field mb-2">
                            <span>Progress</span> <span class="fw-bold">: 40%</span>
                        </div>
                        <div class="progress-range">
                            <div class="progress-complete" style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="border bg-white pb-2">
                    <div class="ratio ratio-16x9 oveflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/classes/big.jpg')}}" alt="enrolled classes" class="enrolled-image">
                        </div>
                    </div>
                    <h4 class="fs-5 m-0 py-2 px-3 border-bottom text-truncate">Traditional Hatha</h4>
                    <div class="px-3 py-2 small border-bottom">
                        <div class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia accusantium consequatur repellat illo nam possimus.
                        </div>
                    </div>
                    <div class="px-3 py-2 small">
                        <div class="info-field">
                            <span>Enrolled</span> <span>: 14 Feb 2025</span>
                        </div>
                        <div class="info-field">
                            <span>Instructor</span> <span>: John doe</span>
                        </div>
                        <div class="info-field">
                            <span>Status</span> <span class="text-primary">: Ongoing</span>
                        </div>
                        <div class="info-field mb-2">
                            <span>Progress</span> <span class="fw-bold">: 60%</span>
                        </div>
                        <div class="progress-range">
                            <div class="progress-complete" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
