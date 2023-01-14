@extends('layouts.home')


@section(container)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Portofoliu</h1>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                    class="fancybox" rel="ligthbox">
                    <img src="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                        class="zoom img-fluid " alt="">

                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                    class="fancybox" rel="ligthbox">
                    <img src="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                        class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    class="fancybox" rel="ligthbox">
                    <img src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        class="zoom img-fluid " alt="">
                </a>
            </div>
        </div>
    </div>
    $(document).ready(function(){
        $(".fancybox").fancybox({
              openEffect: "none",
              closeEffect: "none"
          });
          
          $(".zoom").hover(function(){
              
              $(this).addClass('transition');
          }, function(){
              
              $(this).removeClass('transition');
          });
      });

@endsection
