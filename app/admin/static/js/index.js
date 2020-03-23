$(() => {
  $('label').on('click',function() {
    if($('input[name="ch"]:checked')) {
      // Do that
      $('body, nav').toggleClass('dark');
      $(this).toggleClass('switchbtn');
    }
  })
})
