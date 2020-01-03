$(document).ready(function(){
      map = new GMaps({
        div: '#map',
        lat:12.9968877,
        lng:80.2574881,
        enableNewStyle: true,
		scrollwheel: false,
		zoom: 19,
		
      });
	  

	   map.addMarker({
        lat:12.9968877,
        lng:80.2574881,
		icon : 'img/contact-logo.png',
        title: 'Satin Skin Laser Clinics Chennai',
        infoWindow: {
         content: '<div class="overlay5"><a href="https://www.google.co.in/maps/place/Satin+Skin+Laser+Clinics+Chennai/@12.9970225,80.2574729,18.08z/data=!4m5!3m4!1s0x3a5267f39d437209:0xaf6a4f6982ac48b5!8m2!3d12.996885!4d80.257464?hl=en" target="_blank"></a></div>'
        }
		
      });
	
	
	
	
	
    });
	
	
