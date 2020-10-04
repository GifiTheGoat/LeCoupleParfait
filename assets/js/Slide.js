$("#slideshowauto > div:gt(0)").hide();

setInterval(function() {
  $('#slideshowauto > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshowauto');
}, 3000);
