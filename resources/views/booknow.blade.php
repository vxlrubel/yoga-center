@extends('layouts.app')
@push('title', 'Book Now | Yoga Center')

@push('style')

    <style>
        .page-top-section{
            padding-top: 150px;
            height: 300px;
        }
        .fc .fc-timeline-slot-cushion {
            color: var(--bs-dark);
            font-weight: 400;
            font-size: .975rem;
        }
        .fc .fc-button-primary {
            background-color: hsl(0, 0%, 90%) !important;
            border: 0 !important;
            outline: 0 !important;
            box-shadow: none !important;
            color: var(--bs-dark) !important;
            border-radius: 0;
            min-width: 120px;
        }
        .fc .fc-button-primary:hover {
            background-color: hsl(0, 0%, 85%) !important;
        }
        .fc .fc-toolbar-title {
            --font-size-tile: .875rem;
            font-size: var(--font-size-tile);
        }

        @media(width >= 768px){
            .fc .fc-toolbar-title{
                --font-size-tile: 1rem;
            }
        }
        @media(width >= 992px){
            .fc .fc-toolbar-title{
                --font-size-tile: 1.225rem;
            }
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
    <div class="container pt-4">
        <div id="calendar"></div>

        <button id="confirmBooking" style="display: none;">Confirm Booking</button>
    </div>
</div>
@endsection

@push('script')
<script src="{{asset('/assets/js/vendor/fullcalender.js')}}"></script>
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
            headerToolbar: {
                left: 'prev7Days',
                center: 'title',
                right: 'next7Days'
            },
            defaultView: 'resourceTimelineWeek',
            selectable: true,
            selectHelper: true,
            allDaySlot: false,
            slotDuration: { days: 1 },
            slotLabelFormat: {
                weekday: 'short',
                month: 'short',
                day: 'numeric'
            },
            titleFormat: {
                weekday: 'long',
                month: 'short',
                day: 'numeric'
            },
            customButtons: {
                prev7Days: {
                    text: 'Prev 7 Days',
                    click: function() {
                        var currentDate = calendar.getDate();
                        calendar.gotoDate(new Date(currentDate.setDate(currentDate.getDate() - 7)));
                    }
                },
                next7Days: {
                    text: 'Next 7 Days',
                    click: function() {
                        var currentDate = calendar.getDate();
                        calendar.gotoDate(new Date(currentDate.setDate(currentDate.getDate() + 7)));
                    }
                }
            },
            events: [
                { id: '1', title: 'Available', start: '2025-02-13T09:00:00', end: '2025-02-13T10:00:00', color: '#00BFFF' },
                { id: '2', title: 'Available', start: '2025-02-13T11:30:00', end: '2025-02-13T12:30:00', color: '#00BFFF' },
                { id: '3', title: 'Booked', start: '2025-02-13T14:00:00', end: '2025-02-13T15:00:00', color: '#FFA500', editable: false }
            ],
            eventClick: function (event) {
                if (event.color === '#00BFFF') {
                    if (selectedEvent) {
                        selectedEvent.color = '#00BFFF';
                    }
                    event.color = '#FFA500';
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
