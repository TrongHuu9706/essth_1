<!DOCTYPE html>
<html lang="en-US">
<?php include('includes/header.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>APPSHOP</title>
<meta name="description" content="Tiny HTML5 Music Player by Themistokle Benetatos: http://mrt-prodz.com">
<link rel="stylesheet" media="all" type="text/css" href="../assets/css/tinyplayer.css">
<script src="../assets/js/tinyplayer.js"></script>
<script>
 
	/* Tiny HTML5 Music Player by Themistokle Benetatos */
	TrackList = 
		[
            <?php
        if (!empty($record_array)) { 
		      foreach($record_array as $key=>$value){
	      ?> 
			{
				url:'../assets/records/<?php echo $record_array[$key]["recordname"];?>',
				title:'<?php echo $record_array[$key]["title"]; ?>',
				year:'<?php echo "&nbsp".$record_array[$key]["datetime"]?>'
			},	
            <?php
	        	}
           	 }
	        ?>
		];
		
	//Make a player and display help
	//player([tracklist], [show waveform?], [show help?])
	tinyplayer(TrackList, true, true);
</script>

<style>
pre{
    white-space: pre-wrap;       /* css-3 */
    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
}
</style>
</head>
<body>
<?php include('includes/navigation.php'); ?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <?php include('includes/sidebar-rec.php'); ?>
    </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="row">	
		   <div id="all_tracks"></div>
	    </div>
      </div>
</div>
        <!-- /.row -->      
    <!-- /.row -->
  </div>
  <!-- /.container -->
     
    <?php include('includes/footer.php'); ?>
</body>
</html>