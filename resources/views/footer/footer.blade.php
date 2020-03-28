<footer>
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset("dist/js/adminlte.js") }}"></script>
  <script src="{{ asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="{{ asset("plugins/select2/js/select2.full.min.js") }}"></script>
  <script src="{{ asset("plugins/moment/moment.min.js") }}"></script>
  <script src="{{ asset("plugins/daterangepicker/daterangepicker.js") }}"></script>
  <script>
    //multiselect
$('.select2').select2()
   //Date range picker
   $('#startdate').daterangepicker({
     singleDatePicker:true,
     locale: {
      format:'YY-MM-DD'
        }
   })
   $('#enddate').daterangepicker({
     singleDatePicker:true,
     locale: {
      format:'YY-MM-DD'
        }
   })
   $('.article-filter').submit(function(){
    $(this).find('.filter-item').each(function() {
        var inp = $(this);
        if (!inp.val()) {
            inp.attr("disabled", "disabled");
        }
    });
});
  </script>
</footer>
</html>