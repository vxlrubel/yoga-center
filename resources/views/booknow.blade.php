@extends('layouts.app')
@push('title', 'Book Now | Yoga Center')

@push('style')
    <link rel="stylesheet" href="{{asset('/assets/css/booking.css')}}">
@endpush

@section('content')
<section class="page-top-section set-bg" data-setbg="assets/img/page-top-bg.jpg">
    <div class="container">
        <h2 class="p-0 m-0 fs-4 text-white fw-bold">Book an Appointment</h2>
    </div>
</section>

<div class="clearfix">
    <div class="container-xxl py-4">
        <div class="booking-container">
            <div class="left-sidebar">
                <button type="button" title="Prev 7 Days" aria-pressed="false" class="btn btn-light rounded-0 mb-2">back to booking</button>
                <div class="d-flex flex-wrap author-details">
                    <div class="image">
                        <div>
                            <img src="https://cdn.pixabay.com/photo/2022/04/06/11/30/girl-7115394_1280.jpg" alt="">
                        </div>
                    </div>
                    <div class="author-info">
                        <div class="px-2">
                            <h4 class="mb-1 text-capitalize fs-5 text-truncate">Catharina Anderson</h4>
                            <strong>PHD</strong>
                            <p class="m-0 info-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque atque dolorem aliquid, ut eveniet aut illo rem eligendi, iste voluptate, harum libero quae unde perferendis expedita ipsum optio quas! Quidem?
                            </p>
                        </div>

                    </div>
                </div>

                <h3 class="my-3 fs-4">Select A treatment</h3>

                <ul class="list-group">
                    <li class="list-group-item">
                        <div>Initial Visit</div>
                        <div>60 min - $100.00</div>
                        <div>Please contact us to book this</div>
                        <div>Treatment. 844-DISTRICT</div>
                        <div>demo@jane.clinic</div>
                    </li>
                    <li class="list-group-item active">
                        <div>Subsequent Visit</div>
                        <div>60 min - $100.00</div>
                    </li>
                    <li class="list-group-item">
                        <div>Online Video Session</div>
                        <div>60 min - $100.00 A remote video session</div>
                    </li>
                  </ul>
            </div>
            <div class="border-bottom border-2 d-block w-100 my-3 d-md-none"></div>
            <div class="right-sidebar ps-md-3">
                <div id="calendar"></div>
            </div>
        </div>
        <button id="confirmBooking" style="display: none;">Confirm Booking</button>
    </div>
</div>
@endsection

@push('script')
    <script src="{{asset('/assets/js/vendor/fullcalender.js')}}"></script>
    <script src="{{asset('/assets/js/booking-calender.js')}}"></script>
@endpush
