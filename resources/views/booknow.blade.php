@extends('layouts.app')
@push('title', 'Book Now | Yoga Center')

@push('style')

    <style>
        .page-top-section{
            padding-top: 150px;
            height: 300px;
        }
    </style>
@endpush

@section('content')
<section class="page-top-section set-bg" data-setbg="assets/img/page-top-bg.jpg">
    <div class="container">
        <h2 class="p-0 m-0 fs-4 mt-4 text-white fw-bold">Book an Appointment</h2>
    </div>
</section>
<div class="clearfix">
    <div class="container">
        <div id="calendar"></div>

        <button id="confirmBooking" style="display: none;">Confirm Booking</button>
    </div>
</div>
@endsection

@push('script')
<script src="{{asset('/assets/js/vendor/fullcalender-premium.js')}}"></script>
<script>
    $(document).ready(function () {
        var selectedEvent = null;
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'resourceTimelineWeek',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'timeGridWeek,timeGridDay'
            },
            defaultView: 'timeGridWeek',
            selectable: true,
            selectHelper: true,
            allDaySlot: false,
            slotDuration: '00:30:00', // 30-minute slots
            events: [
                { id: '1', title: 'Available', start: '2025-02-13T09:00:00', end: '2025-02-13T10:00:00', color: '#00BFFF' },
                { id: '2', title: 'Available', start: '2025-02-13T11:30:00', end: '2025-02-13T12:30:00', color: '#00BFFF' },
                { id: '3', title: 'Booked', start: '2025-02-13T14:00:00', end: '2025-02-13T15:00:00', color: '#FFA500', editable: false }
            ],
            eventClick: function (event) {
                if (event.color === '#00BFFF') { // Check if the slot is available
                    if (selectedEvent) {
                        selectedEvent.color = '#00BFFF'; // Reset previous selection
                    }
                    event.color = '#FFA500'; // Mark as selected
                    selectedEvent = event;
                    $('#calendar').fullCalendar('updateEvent', event);
                    $('#confirmBooking').show();
                }
            }
        });

        calendar.render();

        $('#confirmBooking').on('click', function () {
            if (selectedEvent) {
                alert('Booking Confirmed: ' + selectedEvent.start.format('YYYY-MM-DD HH:mm'));
            }
        });
    });
</script>

@endpush
