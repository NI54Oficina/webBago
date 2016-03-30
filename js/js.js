$(function() {
    var boxClone;
	var showingBox=false;
    $(".openlink").click(function() {
		if(!showingBox){
			showingBox=true;
        //Clone Dialogbox
        boxClone = $("#boxes").find(".box:eq(0)").clone(true, true);

        var boxOffset = $("#boxes").find(".box:last").position();
        //Set Dialog Position
        if (boxOffset.top == 0) {
            boxOffset.top = 5;
        }
        if (boxOffset.left == 0) {
            boxOffset.left = 60;
        }
        $(boxClone).css('top', (boxOffset.top + 20));
        $(boxClone).css('left', (boxOffset.left + 20));
		
        $(boxClone).appendTo($("#boxes"));
        $(boxClone).show(500);
		}
    });

    //Close Dialogbox
    $(".closelink").click(function() {
		showingBox=false;
        $(this).closest(".box").remove();
    });

});

$(function(){
    $('.animate .btn').click(function(){
        				$(this).parent("div").toggleClass("after");
    });
});

(function (window, $) {
  
  $(function() {
    
    
    $('.ripple').on('click', function (event) {
      event.preventDefault();
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
  
})(window, jQuery);

				$("#noticias-trabajos").css('display','block'); 
				$("#seccion-mas").css('display','block'); 
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#opcion1").css('background','none');
				$("#opcion1").css('color','white');			
				$(function() {
				$("#noticias-trabajos").css('display','block'); 
				$("#seccion-mas").css('display','block'); 
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#opcion1").css('background','none');
				$("#opcion1").css('color','white');
				
				
				$("#opcion1").click(function() {
				console.log ('opcion1');
				$("#noticias-trabajos").fadeIn(); 
				$("#seccion-mas").css('display','block'); 				
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#opcion1").css('background','none');
				$("#opcion1").css('color','white');
				$("#opcion2").css('color','#2988AF;');
				$("#opcion2").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion3").css('color','#2988AF;');
				$("#opcion3").css('background','rgba(255, 255, 255, 0.3)');
});

				$("#opcion2").click(function() {
				console.log ('opcion2');
				$("#noticias-trabajos").css('display','none'); 
				$("#seccion-mas").css('display','none'); 
				$("#noticias-planillas").css('display','none'); 
				$("#noticias-planes").fadeIn();  
				$("#opcion1").css('color','#2988AF;');
				$("#opcion1").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion3").css('color','#2988AF;');
				$("#opcion3").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion2").css('background','none');
				$("#opcion2").css('color','white');
});

				$("#opcion3").click(function() {
				console.log ('opcion3');
				$("#noticias-trabajos").css('display','none'); 
				$("#noticias-planes").css('display','none'); 
				$("#noticias-planillas").fadeIn(); 
				$("#seccion-mas").css('display','none'); 
				$("#opcion3").css('background','none');
				$("#opcion3").css('color','white');
				$("#opcion1").css('color','#2988AF;');
				$("#opcion1").css('background','rgba(255, 255, 255, 0.3)');
				$("#opcion2").css('color','#2988AF;');
				$("#opcion2").css('background','rgba(255, 255, 255, 0.3)');
});

});

    $(document).ready(function(){
  
        $('#btnmenu').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
		
		
  
    });
	jQuery(window).load(function () {
		SameHeight();
		$("#vademecum-loading").hide();
		$("#vademecum-loading").css('right','initial');
		$.each($("#vademecum-loading .div-img-aft img"), function(index,value){
		
			var rightOffset = 100 + index *10;
			
			$("#vademecum-loading .div-img-aft").css('right', rightOffset + 'vw' );
			
		});
		$("#vademecum-loading .div-img-aft").css('position','relative');
		$("#vademecum-loading .div-img-aft").css('transition','all 0.8s ease');
		$("#vademecum-loading").show();

		setTimeout(function(){
			
			$("#vademecum-loading .div-img-aft").css('right', '0');
		
		},500);
		//$("#vademecum-loading").fadeIn(1000);
	});


	
	$( window ).resize(function() {
		ResetHeight();
		setTimeout(function(){
		SameHeight()},1000);
	});
	
	function ResetHeight(){
		var id=1;
		while($( "[hid="+id+"]" ).length){
			$("[hid="+id+"]").css("height","auto");
			id++;
		}
	}
	
	function SameHeight(){
		//console.log("entra same height");
		var auxId=1;
		while($( "[hid="+auxId+"]" ).length){
			var hidHeight=0;
			//ResetHeight();
			$("[hid="+auxId+"]").each(function(){
				if($(this).innerHeight()>hidHeight){
					hidHeight= $(this).innerHeight();
				}
				
			});
			//console.log(hidHeight);
			$("[hid="+auxId+"]").css("height",hidHeight+"px");
			auxId++;
		}
	}

   $(document).ready(function(){
				
					$("#mex").click(function() {
					
						$("#infoMexico").fadeIn(800);
						$("#infoCenAm").css('display','none');
						$("#infoBrasil").css('display','none');
						$("#infoBolivia").css('display','none');
						$("#infoUruguay").css('display','none');
						$("#infoArgentina").css('display','none');
					
					});
					
					$("#centroam").click(function() {
					
						$("#infoCenAm").fadeIn(800);
						$("#infoMexico").css('display','none');
						$("#infoBrasil").css('display','none');
						$("#infoBolivia").css('display','none');
						$("#infoUruguay").css('display','none');
						$("#infoArgentina").css('display','none');
					
					});
					
					$("#br").click(function() {
					
						$("#infoBrasil").fadeIn(800);
						$("#infoMexico").css('display','none');
						$("#infoCenAm").css('display','none');
						$("#infoBolivia").css('display','none');
						$("#infoUruguay").css('display','none');
						$("#infoArgentina").css('display','none');
					
					});
					
					$("#bol").click(function() {
					
						$("#infoBolivia").fadeIn(800);
						$("#infoMexico").css('display','none');
						$("#infoCenAm").css('display','none');
						$("#infoBrasil").css('display','none');
						$("#infoUruguay").css('display','none');
						$("#infoArgentina").css('display','none');
					
					});
					
					
					$("#uru").click(function() {
					
						$("#infoUruguay").fadeIn(800);
						$("#infoMexico").css('display','none');
						$("#infoCenAm").css('display','none');
						$("#infoBrasil").css('display','none');
						$("#infoBolivia").css('display','none');
						$("#infoArgentina").css('display','none');
					
					});
					
					$("#arg").click(function() {
					
						$("#infoArgentina").fadeIn(800);
						$("#infoMexico").css('display','none');
						$("#infoCenAm").css('display','none');
						$("#infoBrasil").css('display','none');
						$("#infoBolivia").css('display','none');
						$("#infoUruguay").css('display','none');
					
					});					
					
				});

				
jQuery(document).ready(function($) {
  
    // Fixa navbar ao ultrapassa-lo
    var navbar = $('#navbar-main'),
    		distance = navbar.offset().top,
        $window = $(window);
		if(distance>0){
			navbar.hide();
		}

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
			if(distance>0){
				navbar.fadeIn();
			}
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
          	$("body").css("padding-top", "70px");
        } else {
			if(distance>0){
				navbar.fadeOut();
			}
            navbar.removeClass('navbar-fixed-top');
            $("body").css("padding-top", "0px");
        }
    });
});