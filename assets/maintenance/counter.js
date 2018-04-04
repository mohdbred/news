$("#counter")
  .countdown("2018/04/09", function(event) {
  var $this = $(this).html(event.strftime(''
    + '<span>%d <em>days</em></span> '
    + '<span>%H <em>hours</em></span> '
    + '<span>%M <em>minutes</em></span> '
    + '<span>%S <em>seconds</em></span>'));
 });