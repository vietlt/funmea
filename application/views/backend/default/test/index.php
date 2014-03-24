
  <link rel="stylesheet" href="<?=backend_css_url()?>/modal/alertify.core.css" />
  <link rel="stylesheet" href="<?=backend_css_url()?>/modal/alertify.default.css" id="toggleCSS" />

  <a href="#" id="alert" class="button">Alert Dialog</a><br>
  <script src="<?=backend_js_url()?>/modal/alertify.min.js"></script>

  <script type="text/javascript">
    
    function reset () {
      alertify.set({
        labels : {
          ok     : "OK",
          cancel : "Cancel"
        },
        delay : 5000,
        buttonReverse : false,
        buttonFocus   : "ok"
      });
    }

    // ==============================
    // Standard Dialogs
    $("#alert").on( 'click', function () {
      reset();
      alertify.alert("This is an alert dialog");
      return false;
    });
  </script>
