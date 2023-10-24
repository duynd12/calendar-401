

<!DOCTYPE html>
<html>
 <head>
  <title>Jquery Fullcalandar Integration with PHP and Mysql</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
  $(document).ready(function() {
    var persons = JSON.parse($('.persons').html());
    var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next',
     center:'title',
     right:''
    },
    events:persons,
    selectable:true,
    selectHelper:true,
   });
  });

  </script>
 </head>
 <style>
    th{
        background-color:#886ab5;
        height: 100px;
        text-align: center;
        line-height: 100px;
    }
    .fc-day-number{
        font-size:20px;
        padding-right:10px !important;
    }
    .fc-row{
        /* border: solid black !important; */
    }
    .fc-other-month .fc-day-number{
        font-size: 20px;
        color:rgb(13, 12, 12);
    }
    .fc-content{
        text-align: center;
        background-color:#1dc9b7;
        font-size:25px;
        color:white;
    }
    .fc-day-grid-event{
        border-radius:10px;
        widows: 50%;
    }

 </style>
 <body>

  <div class="container">
   <div id="calendar">
    <span class="persons" style="display: none">{{$data}}</span>
   </div>
  </div>
 </body>
</html>
