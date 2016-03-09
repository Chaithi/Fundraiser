<?php 
    include 'mysql.php';
    include 'header.php';
    getInfo();
?>
  <body>
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
	<div class="jumbotron">
      <div class="container">
        <h1>Katrina Burchett & Alec Kudrna need your support!</h1>
        <p>Kat and Alec are getting married at Lake Tahoe and need your help to make their special day even better!</p>
          <h2>Total amount gifted: <?php echo "$" . $amount; ?></h2>
          <form action="incontext.php" method="post">
            <button class="btn btn-primary btn-lg" type="submit">Help Fund the Wedding!
            </button>
          </form>
      </div>
    </div>
    <div class="container">
        
	  <h1>Goals</h1>
	  <div class="row">
        <div class="col-md-3">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                    <img src="img/chips.jpg" class="img-responsive">
                    <div class="carousel-caption">
                        <h2>Casino Night</h2>
                        <h3>$100</h3>
                    </div>
                </div>
              </div>
            </div>
          <p>You can help Kat & Alec win millions, or more likely just share the dream of winning millions. Kat & Alec plan on spending only one night in the casino with no more the $50.00 a piece.</p>
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo getPercentage(100) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo getPercentage(100); ?>%;">
					<?php echo getPercentage(100); ?>%
				</div>
			</div>
        </div>
        <div class="col-md-3">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                    <img src="img/boat.jpg" class="img-responsive">
                    <div class="carousel-caption">
                        <h2>Scenic Boat Tour</h2>
                        <h3>$200</h3>
                    </div>
                </div>
              </div>
            </div>
          <p>A beautiful afternoon sail on the jewel of the Sierra - Lake Tahoe! Alec did a tour like this the last time he visited Tahoe and loved it. This time he wants to share it with Kat and show her the true beauty of Tahoe.</p>
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo getPercentage(200) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo getPercentage(200); ?>%;">
					<?php echo getPercentage(200); ?>%
				</div>
			</div>
       </div>
        <div class="col-md-3">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                    <img src="img/camera.jpg" class="img-responsive">
                    <div class="carousel-caption">
                        <h4>Ultimate 1/2 Day Tahoe Photo Tour</h4>
                        <h4>$300</h4>
                    </div>
                </div>
              </div>
            </div>
          <p>The Ultimate Half Day Tour departs at 9:00 am, and focuses on the best of Tahoe’s South and Shore areas. Our journey would begin at a beautiful secluded Tahoe beach, shadowed by spectacular Mt. Tallac. Across the river is an Eagle sanctuary, and we wwould be able to view and photograph different species of local birds, and possibly even a bear.</p>
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo getPercentage(300) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo getPercentage(300); ?>%;">
					<?php echo getPercentage(300); ?>%
				</div>
			</div>
        </div>
        <div class="col-md-3">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                    <img src="img/balloon.jpg" class="img-responsive">
                    <div class="carousel-caption">
                        <h3>Balloon Ride Over Tahoe</h3>
                        <h4>$600</h4>
                    </div>
                </div>
              </div>
            </div>
          <p>This is a once in a lifetime opportunity and on our bucket list.<br><br> We would be able to experience views high above Lake Tahoe in the fresh alpine air. We would enjoy views of Emerald Bay, the second most photographed spot in the U.S., Fallen Leaf Lake, Cascade Lake and the Desolation Wilderness. On many days, visibility even allow for views of peaks in Yosemite and the coastal foothills over 150 miles away!</p>
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo getPercentage(600) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo getPercentage(600); ?>%;">
					<?php echo getPercentage(600); ?>%
				</div>
			</div>
        </div>
        <div class="row">
        <p>Please note that due to time restraints we will only be able to do 1 or 2 of these activities. Whatever is left of the raised funds will go to moving expenses and furniture purchases when Kat and I get our own place in October. Thank you so much to all our friends and family who help make this Wedding weekend unique and extremely memorable. We love you all.</p>  
        </div>
      </div>
      <hr>
    <h3>Share this page on Social Media</h3>
        <div class="fb-share-button" data-href="http://www.gamergadgets.net/katandalec/" data-layout="button_count"></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.gamergadgets.net/katandalec" data-size="large" data-hashtags="KatAndAlecTahoe">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
<?php include 'footer.php'; ?>
      
</body>
</html>