<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php if(!isset($impayment)){   ?>    
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <?php  } ?>
	<script>
    $(function() {
      function log(message) {
        $("<div>").text(message).prependTo("#log");
        $("#log").scrollTop(0);
      }
      $(".flight-from").autocomplete({
        source: function(request, response) {
          $.ajax({
            url: "https://api.sandbox.amadeus.com/v1.2/airports/autocomplete",
            dataType: "json",
            data: {
              apikey: "1xTOK9xsWeDTPptm8HGIoTjGrG5ckSVY",
              term: request.term
            },
            success: function(data) {
              response(data);
            }
          });
        },
        minLength: 3,
        select: function(event, ui) {
          log(ui.item ?
            "Selected: " + ui.item.label :
            "Nothing selected, input was " + this.value);
        },
        open: function() {
          $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
        },
        close: function() {
          $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
        }
      });
    });
  </script>
