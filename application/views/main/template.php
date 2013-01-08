<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title><?php echo $title ?></title>

<meta http-equiv="Content-type" content="text/html;charset=UTF-8"></meta>
<meta http-equiv="Expires" content="no-expire"></meta>
<meta name="Author" content="Pascal MUANG-KHOT"></meta>
<meta name="Publisher" content="Pascal MUANG-KHOT"></meta>
<meta name="Copyright" content="© Copyright 2010, Linkvee"></meta>
<meta name="Revisit-After" content="2 days"></meta>
<meta name="Keywords" content="linkvee, random, link, links, taskvee, fun"></meta>
<meta name="Description" content="Do you want a random link?"></meta>
<meta name="Audience" content="All"></meta>
<meta name="Robots" content="INDEX,FOLLOW"></meta>
<meta name="Content-Language" content="English"></meta>

<meta name="apple-mobile-web-app-capable" content="yes"></meta>
<meta name="viewport" content="width=device-width; initial-scale=0.6; user-scalable=0;"></meta>

<link rel="shortcut icon" type="image/x-icon" href="/media/images/favicon.ico" />
<link rel="icon" type="image/x-icon" href="/media/images/favicon.ico" />
 
<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
<?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
      

<!--[if lt IE 7]>
<script src="scripts/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
<script type="text/javascript">DD_belatedPNG.fix('img, .seperator, .content, h1');</script>
<![endif]-->

<style type="text/css">
<!--
#image {width:430px; outline:0; margin: 0 0 0 2px;}
-->
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12185823-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="wrapper">
	<!-- Here Goes Logo! -->
	<div id="logo-container">
    <h1>Linkvee</h1>
    </div>
    <!-- End of Logo! -->
    
    <div>
    

    <?php echo $content ?>



        <!-- Begin Footer and Copyright Informations -->
    	<div class="head-last">
            <span><a class="white" href="http://www.linkvee.com/page/api/">API</a> - <a class="white" href="http://www.linkvee.com/page/legal/">Legal Notice</a> - Linkvee &copy; 2010</span> <!-- Here goes your Copyright text! -->
        </div>
        <!-- End Footer and Copyright Informations -->
    </div>
</div>


    <script type="text/javascript">
    
$(document).ready(function(){
	
	$('#logo-container').click(function() {
		window.location = "http://www.linkvee.com/";
	});

	$.ajaxSetup({
		async:false
	});

	$("#gimme").click(function (){
		$.get("http://www.linkvee.com/ajax/" , function(data) {						    
			$('#anotherlink').html(data);			
			});
	});	
	
	$('#idform').submit(function() {
		$('.load').show();
	});
	
});

</script>
</body></html>