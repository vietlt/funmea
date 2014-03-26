<div id="content_sec">

   <p>Content here. <a class="alert" href='javascript:void(0)'>Alert!</a></p>

        <link href="<?=js_url()?>/bootbox/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="<?=js_url()?>/bootbox/bootbox.js"></script>
        
        <script>
                $(document).on("click", ".alert", function(e) {
                    bootbox.alert("Hello world!", function() {
                        console.log("Alert Callback");
                    });
                });
        </script>
        <script src="<?=js_url()?>/bootbox/bootstrap.min.js"></script>

</div>