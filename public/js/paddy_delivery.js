$(document).ready(function() {
  $('.show-hide').hide();
  $('#1').show();
  $('.article').click(function() {
    $('.show-hide').hide();
    $(this).closest('.show-hide').hide().next('.show-hide').show();
    return false;
  });


(function( $ ){

 $.fn.lazyMapLoad = function(opts) {
    var defaults={
                  center:{lat:0,lng:0},
                  zoom:1,
                  'style':{background:"url('http://ressio.github.io/lazy-load-xt/dist/loading.gif') center center no-repeat" }
                          
                 },
      maps=this;
      
    //callback for API-load
    window.lazyMapLoadInit=function(){
    
      $.each($.unique($('head').data('maps')),function(i,o){
        $(o).trigger('lazyMapLoad.load');
      });
      delete window.lazyMapLoadInit;
    };
  
    maps.each(function() {
      var that=$(this),
        //collect properties for Maps-instance
        props=$.extend({},defaults,opts,that.data('map'));
        
        //create map-container
        that.empty().css(props.style).append($('<div></div>').css({height:'100%',opacity:0}))
        
        //when the map should be loaded
        that.on('lazyMapLoad.load',function(){
            
            //API not available yet, push the map to the stack
            if(!window.google || !window.google.maps || !window.google.maps.Map){
              var maps=$('head').data('maps')||[];
              maps.push(this);
              $('head').data('maps',$.unique(maps))
            } 
            
            //load the API
            if(!window.google || !window.google.maps){             
              window.google={maps:{}};
              $('<script/>',
                {src:'https://maps.googleapis.com/maps/api/js?v=3&callback=lazyMapLoadInit'})
                .appendTo('head');
            }
            //API available, load the map
            if(window.google && window.google.maps && window.google.maps.Map){
             that.off('lazyMapLoad.load');
             var data=that.data('map')||{};
                 data.map=new google.maps.Map(this.firstChild,props);
                 that.data('map',data);
                 google.maps.event.addListener(data.map,'tilesloaded',function(){
                  $(this.getDiv()).animate({opacity:1});
                 });
            }
        });
  });
  
  //observe scroll
  $(window).on('scroll',function (){
      //no maps to proceed
      if(!maps.length)return;
       
      var _maps=maps,
          offset=$(this).scrollTop()+$(this).height();
      
      //compare the position of each map
      maps.each(function(i,o){
        if(offset>=$(o).offset().top){
          $(o).trigger('lazyMapLoad.load');
          _maps=_maps.not(o);
        }
      });
     
      maps=_maps;
     
     
  }).trigger('scroll');
  
  return this;
}

$(function(){$('.map').lazyMapLoad();})
$(function(){$('#map').lazyMapLoad({zoom:20,mapTypeId:'terrain',center:{lat:45.976,lng: 7.658}});})



} ( jQuery ));

	var divMapa = document.getElementById('mapa');

    navigator.geolocation.getCurrentPosition( fn_ok, fn_mal );
    function fn_mal(){ }
  	
  	function fn_ok( rta ){
	    var geocoder = new google.maps.Geocoder;

	    var directionsService = new google.maps.DirectionsService;
	    var directionsDisplay = new google.maps.DirectionsRenderer(
	      { draggable: true,
	      });

	    var lat = rta.coords.latitude;
	    var lon = rta.coords.longitude;
	    var gLatLon = new google.maps.LatLng( lat, lon );
	    var objConfig = {
	        zoom: 15,
	        center: gLatLon,
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	      }

	    var gMapa = new google.maps.Map( divMapa, objConfig );
  	}
});

