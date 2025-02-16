@extends('layouts.app')
@push('title', 'Book Now | Yoga Center')

@push('style')
    <link rel="stylesheet" href="{{asset('/assets/css/booking.css')}}">
@endpush

@section('content')
<section class="page-top-section set-bg" data-setbg="assets/img/page-top-bg.jpg">
    <div class="container">
        <h2 class="p-0 m-0 fs-4 mt-4 text-white fw-bold">Book an Appointment</h2>
    </div>
</section>

<div class="clearfix">
    <div class="container-xxl py-4">
        <div class="booking-container">
            <div class="left-sidebar">
                <button type="button" title="Prev 7 Days" aria-pressed="false" class="btn btn-light rounded-0">back to booking</button>
            </div>
            <div class="right-sidebar">
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
