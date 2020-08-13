<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>
<body>



 @include('header')

 @yield('content')

 @include('footer')



 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
 <script src="{{ asset('js/popper.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
 <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
 <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('js/aos.js') }}"></script>
 <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
 <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
 <script src="{{ asset('js/scrollax.min.js') }}"></script>
 <script src="{{ asset('js/main.js') }}"></script>
 <!-- JavaScript -->
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

 <!-- CSS -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
 <!-- Default theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
 <!-- Semantic UI theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
 <!-- Bootstrap theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

 <script>
  function AddCart(id) {
            //console.log(id);

            $.ajax({  
              url: 'Add-Cart/'+id,
              type: 'GET',
            }).done(function(response){
             //console.log(response);
             RenderCart(response);
             alertify.success('Add products success !!!');
           });
          }

          $("#change-item-cart").on("click", ".si-close i" ,function(){
            $.ajax({
              url: 'Delete-Item-Cart/' + $(this).data("id"),
              type: 'GET',
            }).done(function(response){
              RenderCart(response);
              alertify.success('Delete products success !!!');
            });
          });

          function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            //console.log($("#total-quanty-cart").val());
            $("#total-quanty-show").text($("#total-quanty-cart").val());
          }


          function DeleteItemListCart(id) {
            //console.log(id);

            $.ajax({
              url: 'Delete-Item-List-Cart/'+id,
              type: 'GET',
            }).done(function(response){
              RenderListCart(response);
              //alertify.success('Delete products success !!!');
            });
          }

          function RenderListCart(response) {
            $("#list-cart").empty();
            $("#list-cart").html(response);

            var proQty = $('.pro-qty');
            proQty.prepend('<span class="dec qtybtn">-</span>');
            proQty.append('<span class="inc qtybtn">+</span>');
            proQty.on('click', '.qtybtn', function () {
              var $button = $(this);
              var oldValue = $button.parent().find('input').val();
              if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
              } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
              var newVal = parseFloat(oldValue) - 1;
            } else {
              newVal = 0;
            }
          }
          $button.parent().find('input').val(newVal);
        });

    }

    function SaveItemListCart(id) {
      //console.log(id);
        //console.log($("#quanty-item-"+id).val());
        $("#quanty-item-"+id).val();
         $.ajax({
                url: 'Save-Item-List-Cart/'+id+'/'+$("#quanty-item-"+id).val(),
                type: 'GET',
            }).done(function(response){
                RenderListCart(response);
                alertify.success('Cap nhap products success !!!');
            });
    }
  </script>

</body>
</html>

