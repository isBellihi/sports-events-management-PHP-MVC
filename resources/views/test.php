<!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="/PFA/js/jquery.js"></script>
        <script type="text/javascript" src="/PFA/js/jquery.min.js"></script>
        <script type="text/javascript" src="/PFA/public/js/moment.js"></script>
<script type="text/javascript" src="/PFA/public/js/date.js"></script>
<link rel="stylesheet" type="text/css" href="/PFA/public/css/date.css">

</head>

<body>
                            <input type="text" name="birthday" value="10/24/1984" />

<script>
$(function() {
  $('input[name="birthday"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
    alert("You are " + years + " years old!");
  });
});
</script>
</body>
</html>