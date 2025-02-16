document.addEventListener('DOMContentLoaded', function () {
    const getCalendar = document.getElementById('calendar');

    const calendar = new FullCalendar.Calendar(getCalendar, {
        initialView: 'timeGridWeek',
        slotMinTime: '09:00:00',
        editable: true,
        eventResizableFromStart: true,
        eventDurationEditable: true,
        eventStartEditable: true,
        allDaySlot: false,
        headerToolbar: {
            left: 'prev7Days',
            center: 'title',
            right: 'next7Days'
        },
        selectable: true,
        select: function(info) {
            let eventTitle = prompt("Create New Event: Please write event title:");
            if (eventTitle) {
                calendar.addEvent({
                    title: eventTitle,
                    start: info.start,
                    end: info.end,
                    allDay: false,
                    color: "#007bff"
                });
            }
            calendar.unselect();
        },
        customButtons: {
            prev7Days: {
                text: 'Prev 7 Days',
                click: function () {
                    let currentDate = calendar.getDate();
                    currentDate.setDate(currentDate.getDate() - 7);
                    calendar.gotoDate(currentDate);
                    updateCustomTitle();
                }
            },
            next7Days: {
                text: 'Next 7 Days',
                click: function () {
                    let currentDate = calendar.getDate();
                    currentDate.setDate(currentDate.getDate() + 7);
                    calendar.gotoDate(currentDate);
                    updateCustomTitle();
                }
            }
        },
        aspectRatio: 1.6,
        datesSet: function () {
            updateCustomTitle();
        },
        expandRows: true,
        stickyHeaderDates: true,
        events: Array.from({ length: 10 }, (_, i) => {
            const today = new Date();
            const eventDate = new Date(today);
            eventDate.setDate(today.getDate() + i);

            const getRandomHour = () => Math.floor(Math.random() * (23 - 9) + 9);
            const startHour = getRandomHour();
            const endHour = startHour + 1;

            return {
                title: `Event ${i + 1}`,
                start: `${eventDate.getFullYear()}-${String(eventDate.getMonth() + 1).padStart(2, '0')}-${String(eventDate.getDate()).padStart(2, '0')}T${String(startHour).padStart(2, '0')}:00:00`,
                end: `${eventDate.getFullYear()}-${String(eventDate.getMonth() + 1).padStart(2, '0')}-${String(eventDate.getDate()).padStart(2, '0')}T${String(endHour).padStart(2, '0')}:00:00`,
                color: ['#28a745', '#007bff', '#dc3545', '#ffc107', '#17a2b8', '#6f42c1', '#fd7e14'][i % 7] // Cycle colors
            };
        })

    });

    calendar.render();

    function updateCustomTitle() {
        let view = calendar.view;
        let start = view.currentStart;
        let end = new Date(view.currentEnd);
        end.setDate(end.getDate() - 1); // Adjust end date correctly

        let options = { month: 'long', day: 'numeric', year: 'numeric' };
        let formattedTitle = `${start.toLocaleDateString('en-US', options)} - ${end.toLocaleDateString('en-US', options)}`;

        document.querySelector('.fc-toolbar-title').textContent = formattedTitle; // Update title
    }
});
