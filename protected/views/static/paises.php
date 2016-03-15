<?php include('head.php'); ?>
	<!-- VIDEO-->
		<!--JS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bower_components/BigVideo/css/bigvideo.css">
    <script src="bower_components/modernizr/modernizr-2.5.3.min.js"></script>
	
</head>
   <!-- BigVideo Dependencies -->
   
    <script src="bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="bower_components/video.js"></script>

    <!-- BigVideo -->
    <script src="bower_components/BigVideo/lib/bigvideo.js"></script>

    <!-- Demo -->

    <script>
	    $(function() {
            var BV = new $.BigVideo();
			BV.init();
		BV.show('video/home.mp4',{ambient:true});
	    });
    </script>