<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Page specific script -->

<script>
    //   function serviceChange(){
    //        $("#doctorFormGroup").show();
    //   }



        $(function () {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    };

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject);

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag
                    });

                });
            }

            ini_events($('#external-events div.external-event'));

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date();
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'امروز',
                    month: 'ماه',
                    week: 'هفته',
                    day: 'روز'
                },
                //Random default events
                events: [
    //                {
    //                    title: 'All Day Event',
    //                    start: new Date(y, m, 1),
    //                    backgroundColor: "#f56954", //red
    //                    borderColor: "#f56954" //red
    //                },
    //                {
    //                    title: 'Long Event',
    //                    start: new Date(y, m, d - 5),
    //                    end: new Date(y, m, d - 2),
    //                    backgroundColor: "#f39c12", //yellow
    //                    borderColor: "#f39c12" //yellow
    //                },
                    {
                        title: 'ثبت نام در سایت آتیه و تشکیل پرونده',
                        start: new Date(y, m, d - 5, 10, 30),
                        allDay: false,
                        backgroundColor: "#f56954", //red
                        borderColor: "#f56954", //red
                    },
                    {
                        title: 'گذراندن آزمون ورودی',
                        start: new Date(y, m, d - 5, 15, 47),
                        end: new Date(y, m, d - 5, 16, 23),
                        allDay: false,
                        backgroundColor: "#f39c12", //yellow
                        borderColor: "#f39c12", //yellow
                    },
                    {
                        title: 'انجام ارزیابی توسط مدیر',
                        start: new Date(y, m, d - 3, 17, 45),
                        allDay: false,
                        backgroundColor: "#0073b7", //Blue
                        borderColor: "#0073b7" //Blue
                    },
                    {
                        title: 'مراجعه ی حضوری به آتیه برای انجام آزمون',
                        start: new Date(y, m, d - 1, 8, 30),
                        end: new Date(y, m, d-1, 12),
                        allDay: false,
                        backgroundColor: "#00c0ef", //Info (aqua)
                        borderColor: "#00c0ef", //Info (aqua)
                    },
                    {
                        title: 'رواندرمانی',
                        start: new Date(y, m, d+2, 10, 30),
                        allDay: false,
                        backgroundColor: "#00a65a", //Success (green)
                        borderColor: "#00a65a", //Success (green)
                    },
    //                {
    //                    title: 'Lunch',
    //                    start: new Date(y, m, d, 12, 0),
    //                    end: new Date(y, m, d, 14, 0),
    //                    allDay: false,
    //                    backgroundColor: "#00c0ef", //Info (aqua)
    //                    borderColor: "#00c0ef" //Info (aqua)
    //                },
    //                {
    //                    title: 'Birthday Party',
    //                    start: new Date(y, m, d + 1, 19, 0),
    //                    end: new Date(y, m, d + 1, 22, 30),
    //                    allDay: false,
    //                    backgroundColor: "#00a65a", //Success (green)
    //                    borderColor: "#00a65a" //Success (green)
    //                },
    //                {
    //                    title: 'Click for Google',
    //                    start: new Date(y, m, 28),
    //                    end: new Date(y, m, 29),
    //                    url: 'http://google.com/',
    //                    backgroundColor: "#3c8dbc", //Primary (light-blue)
    //                    borderColor: "#3c8dbc" //Primary (light-blue)
    //                }
                ],
                editable: false,
                droppable: false, // this allows things to be dropped onto the calendar !!!
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    copiedEventObject.backgroundColor = $(this).css("background-color");
                    copiedEventObject.borderColor = $(this).css("border-color");

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }

                }
            });

            /* ADDING EVENTS */
            var currColor = "#3c8dbc"; //Red by default
            //Color chooser button
            var colorChooser = $("#color-chooser-btn");
            $("#color-chooser > li > a").click(function (e) {
                e.preventDefault();
                //Save color
                currColor = $(this).css("color");
                //Add color effect to button
                $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
            });
            $("#add-new-event").click(function (e) {
                e.preventDefault();
                //Get value and make sure it is not null
                var val = $("#new-event").val();
                if (val.length == 0) {
                    return;
                }

                //Create events
                var event = $("<div />");
                event.css({
                    "background-color": currColor,
                    "border-color": currColor,
                    "color": "#fff"
                }).addClass("external-event");
                event.html(val);
                $('#external-events').prepend(event);

                //Add draggable funtionality
                ini_events(event);

                //Remove event from text input
                $("#new-event").val("");
            });
        });
    $(document).ready(function () {
        $("#service").change(function () {
            $("#doctorFormGroup").show();
        });
        $("#doctor").change(function () {
            $("#footer").show();
        });
        $("#submit").click(function(){
            $("#calendarWrapper").show();
        });
        $("#calendarWrapper").hide();
    });
</script>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">نوبت گیری</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">خدمات</label>
                            <select class="form-control" id="service" style="height: auto;">
                                <option value="1">خدمت 1</option>
                                <option value="2">خدمت 2</option>
                                <option value="3">خدمت 3</option>
                            </select>
                        </div>
                        <div class="form-group" id="doctorFormGroup" style="display: none;">
                            <label for="exampleInputEmail1">پزشک</label>
                            <select class="form-control" id="doctor" style="height: auto;">
                                <option>پزشک 1</option>
                                <option>پزشک 2</option>
                                <option>پزشک 3</option>
                            </select>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer" id="footer" style="display: none;">
                        <button type="button" id="submit" class="btn btn-primary">نوبت گرفتن</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12" id="calendarWrapper">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div><!-- /.box-body -->
            </div><!-- /. box -->
        </div>
    </div><!-- /.row -->
</section><!-- /.content -->