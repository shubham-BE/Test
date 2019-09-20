$(function ()
{
   $('body').on('focus', ".date-picker", function()
   {
      var value = $(this).val();
      $(this).datepicker({
          format: 'dd-mm-yyyy'
      });
   });
});
