var isHome=false;
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
		Header();
		SameHeight();
		$(".fadder").css('opacity',1);
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
		Header();
		ResetHeight();
		SetDistanceHeader();
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
	
	var headerHeight=0;
	var distanceHeader=0;
	SetDistanceHeader();
	
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
	
	function Header(){
		if(!isHome){
			
			$("body").css("padding-top",$("#navbar-main").height()+"px");
		}
	}
	
	function SetDistanceHeader(){
		distanceHeader= $(window).height()*0.85;
		
		//console.log(distanceHeader);
	}
	
	$(window).scroll(function() {
		if(isHome){
			if ($(window).scrollTop() >= distanceHeader) {
					$("#navbar-main").fadeIn();
					//console.log("aparece");
			   
			} else {
					$("#navbar-main").fadeOut();
					//console.log("se oculta");
			}
		}
    });

   $(document).ready(function(){

   					
   					$("body").on("mousedown",".btn-mapa",function(){
   						console.log(this);
   						$(".info-mapa").hide();
   						console.log("#"+ $("this").attr("idInfo"));
   						$("#"+ $("this").attr("idInfo")).show();
   					});
					
					
				});

				
jQuery(document).ready(function($) {
	
  /*
    // Fixa navbar ao ultrapassa-lo
    var navbar = $('#navbar-main'),
    		distance = navbar.offset().top,
        $window = $(window);
		if(distance>0){
			navbar.css("opacity",1);
			navbar.hide();
		}else{
			//$("body").css("padding-top", navbar.height()+"px");
		}

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
			if(distance>0){
				navbar.fadeIn();
			}
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
          	//$("body").css("padding-top", navbar.height()+"px");
        } else {
			if(distance>0){
				navbar.fadeOut();
			}
            navbar.removeClass('navbar-fixed-top');
            //	$("body").css("padding-top", "0px");
        }
    });*/
});


(function() {
  var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
                              window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  window.requestAnimationFrame = requestAnimationFrame;
})();
 
function hoverElement(canvas,widthParent){
	
	this.canvas = canvas;
    this.context = this.canvas.getContext('2d');
	this.x = this.canvas.width / 2;
	this.y = this.canvas.height / 2-3;
	this.radius = widthParent;
	this.endPercent = 110;
	this.curPerc = 0;
	this.counterClockwise = false;
	this.circ = Math.PI * 2;
	this.quart = Math.PI / 2;

	this.context.lineWidth = 1;
	this.context.strokeStyle = '#666';
	this.context.shadowOffsetX = 0;
	this.context.shadowOffsetY = 0;
	this.context.shadowBlur = 0;
	this.context.shadowColor = 'transparent';

	this.direction=-1;
	this.speed=5;

};

var hover= [];

 function animate(current,id) {
		 hover[id].context.clearRect(0, 0, hover[id].canvas.width, hover[id].canvas.height);
		 hover[id].context.beginPath();
		 hover[id].context.arc(hover[id].x, hover[id].y, hover[id].radius, -(hover[id].quart), ((hover[id].circ) *current) - hover[id].quart, false);
		 hover[id].context.stroke();
		 hover[id].curPerc+=hover[id].direction;
		 if(hover[id].curPerc>100){
			hover[id].curPerc=100;
		 }else if(hover[id].curPerc<0){
			hover[id].curPerc=0;
		 }
		 if (hover[id].curPerc < hover[id].endPercent) {
			 requestAnimationFrame(function () {
				 animate(hover[id].curPerc / 100,id)
			 });
		 }
 }


$(document).ready(function(){
	var auxId=0;
	$(".item-institucional canvas").each(function(){
		
		$(this).attr("canvasid",auxId);
		hover.push(new hoverElement(this,45));
		auxId++;
	});
	
	var id=0;
	while($( "[canvasid="+id+"]" ).length){
		animate(0,id);
		id++;
	}
	
	$(".item-institucional").on("mouseover",function(){
	
		hover[$(this).find('canvas').attr("canvasid")].direction=hover[$(this).find('canvas').attr("canvasid")].speed;
		
	});
	$(".item-institucional").on("mouseout",function(){
		
		hover[$(this).find('canvas').attr("canvasid")].direction=-1*hover[$(this).find('canvas').attr("canvasid")].speed;
		
	});
});
 //this is where we apply opacity to the arrow
$(window).scroll( function(){

  //get scroll position
  var topWindow = $(window).scrollTop();
  //multipl by 1.5 so the arrow will become transparent half-way up the page
  var topWindow = topWindow * 1.5;
  
  //get height of window
  var windowHeight = $(window).height();
      
  //set position as percentage of how far the user has scrolled 
  var position = topWindow / windowHeight;
  //invert the percentage
  position = 1 - position;

  //define arrow opacity as based on how far up the page the user has scrolled
  //no scrolling = 1, half-way up the page = 0
  $('.scroll-down').css('opacity', position);

});






//Code stolen from css-tricks for smooth scrolling:
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function(){
	$("body").on("mousedown",".animateCollapse .btn",function(){
		
		var hasClass=false;
		if($(this).parent().hasClass("after")){
			$(this).parent().removeClass("after");
		}else{
			$(".after").each(function(){
			if(!$(this).parent().hasClass("noRemove")){
				$(this).parent().removeClass("after");
				}
			});
			$(this).parent().addClass("after");
		}
		/*if($(this).hasClass("after")){
			hasClass=true;
		}
		$(".after").each(function(){
			if(!$(this).hasClass("noRemove")){
			$(this).removeClass("after");
			}
		});
		
		if(hasClass){
			$(this).addClass("after");
		}
		*/
	});
});