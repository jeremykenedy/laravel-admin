  <div class="row">
    <div class="span12">
      <div id="weather"></div>
    </div>
  </div>



@if ($user->profile->location)

  <script type="text/javascript">

    setTimeout(function(){

      $.simpleWeather({
        woeid: '',
        location: '{{ $user->profile->location }}',   // PORTLAND 2475687
        unit: 'f',
        success: function(weather) {
          if(weather.temp > 75) {
            $('#weather').animate({backgroundColor: '#F7AC57'}, 1500);
            console.log('hot');
          } else {
            $('#weather').animate({backgroundColor: '#0091c2'}, 1500);
            console.log('cold');
          }
        html = '<h2><i class="wi wi-fw icon-'+weather.code+'"></i> '+weather.temp+'<sup><small>&deg;'+weather.units.temp+'</small></sup></h2>';
        html += '<ul><li><i class="fa fa-map-marker margin-r-5"></i>'+weather.city+', '+weather.region+'</li>';
        html += '<li class="currently"><i class="wi wi-fw icon-'+weather.code+'"></i>'+weather.currently+'</li>';
        html += '<li><i class="wi wi-wind wi-towards-'+weather.wind.direction.toLowerCase()+'"></i>  '+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
        $("#weather").html(html);
        },
        error: function(error) {
          $("#weather").html('<p>'+error+'</p>');
        }
      });

    }, 500);

  </script>

 @endif
