    /*Countdown JS*/
    (function($) { // Plugin start

        $.fn.countdown = function(options, callback) {

            //custom 'this' selector
            var thisEl = $(this);

            //array of custom settings
            var settings = {
                'date': null,
                'format': null
            };

            //append the settings array to options
            if (options) {
                $.extend(settings, options);
            }

            //main countdown function
            function countdown_proc() {

                var eventDate = Date.parse(settings['date']) / 1000;
                var currentDate = Math.floor($.now() / 1000);

                if (eventDate <= currentDate) {
                    callback.call(this);
                    clearInterval(interval);
                }

                var seconds = eventDate - currentDate;

                var days = Math.floor(seconds / (60 * 60 * 24)); //calculate the number of days
                seconds -= days * 60 * 60 * 24; //update the seconds variable with no. of days removed

                var hours = Math.floor(seconds / (60 * 60));
                seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed

                var minutes = Math.floor(seconds / 60);
                seconds -= minutes * 60; //update the seconds variable with no. of minutes removed

                if ( $( ".deadline-timer" ).hasClass( "arabic" ) ) {

                    //conditional Ss
                    if (days == 1) {
                        thisEl.find(".timeRefDays").text("يوم");
                    } else {
                        thisEl.find(".timeRefDays").text("أيام");
                    }
                    if (hours == 1) {
                        thisEl.find(".timeRefHours").text("ساعة");
                    } else {
                        thisEl.find(".timeRefHours").text("ساعات");
                    }
                    if (minutes == 1) {
                        thisEl.find(".timeRefMinutes").text("دقيقة");
                    } else {
                        thisEl.find(".timeRefMinutes").text("دقائق");
                    }
                    if (seconds == 1) {
                        thisEl.find(".timeRefSeconds").text("ثانية");
                    } else {
                        thisEl.find(".timeRefSeconds").text("ثواني");
                    }

                } else {

                    //conditional Ss
                    if (days == 1) {
                        thisEl.find(".timeRefDays").text("day");
                    } else {
                        thisEl.find(".timeRefDays").text("days");
                    }
                    if (hours == 1) {
                        thisEl.find(".timeRefHours").text("hour");
                    } else {
                        thisEl.find(".timeRefHours").text("hours");
                    }
                    if (minutes == 1) {
                        thisEl.find(".timeRefMinutes").text("min");
                    } else {
                        thisEl.find(".timeRefMinutes").text("mins");
                    }
                    if (seconds == 1) {
                        thisEl.find(".timeRefSeconds").text("sec");
                    } else {
                        thisEl.find(".timeRefSeconds").text("secs");
                    }

                } // If arabic version used 


                //logic for the two_digits ON setting
                if (settings['format'] == "on") {
                    days = (String(days).length >= 2) ? days : "0" + days;
                    hours = (String(hours).length >= 2) ? hours : "0" + hours;
                    minutes = (String(minutes).length >= 2) ? minutes : "0" + minutes;
                    seconds = (String(seconds).length >= 2) ? seconds : "0" + seconds;
                }

                //update the countdown's html values.
                if (!isNaN(eventDate)) {
                    thisEl.find(".days").text(days);
                    thisEl.find(".hours").text(hours);
                    thisEl.find(".minutes").text(minutes);
                    thisEl.find(".seconds").text(seconds);
                } else {
                    alert("Invalid date. Here's an example: 12 Tuesday 2016 17:30:00");
                    clearInterval(interval);
                }
            }

            //run the function
            countdown_proc();

            //loop the function
            var interval = setInterval(countdown_proc, 1000);

        }
    })(jQuery); // Plugin end
