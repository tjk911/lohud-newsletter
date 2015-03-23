<?php

require ('authentication.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Rockland Angle | Lohud.com | The Journal News</title>
<meta name="apple-mobile-web-app-title" content="The Rockland Angle"> <!-- sets the bookmark title for iOS -->
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta name="keywords" content="lohud.com,Westchester, Rockland, Putnam,New York,News,local news,headlines,stories,world news" />
<!-- <meta name="description" content="THIS IS MY PLACEHOLDER TEXT. THERE ARE MANY PLACEHOLDER TEXTS BUT THIS IS MINE." /> -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="expires" content="0"/>
<meta http-equiv="cache-control" content="no-cache"/>
<link rel="shortcut icon" href="http://www.gannett-cdn.com/sites/lohud/images/favicon.png">
<link rel="stylesheet" href="css/foundation.min.css" />
<link rel="stylesheet" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script src="js/vendor/modernizr.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
</head>
<body>
    <form name="postform" action="submit.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="large-4 columns">
          <label>Headline
            <input type="text" placeholder="Headline" name="headline" />
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Input Label
            <input type="text" placeholder="paragraph1" name="p1" />
          </label>
        </div>
        <div class="large-12 columns">
          <label>Input Label
            <input type="text" placeholder="paragraph2" name="p2" />
          </label>
        </div>
        <div class="large-12 columns">
          <div class="row collapse">
            <label>Input Label</label>
            <input type="text" placeholder="paragraph3" name="p3" />
          </div>
        </div>
      </div>
      <button type="submit" value="Submit Entry">Submit entry</button>
      <a href="logout.php"><button>Sign out</button></a>
    </form>
      
    <script>
    // var headline = $("#headline").val();
    // var p1 = $("#p1").val();
    // var p2 = $("#p2").val();
    // var p3 = $("#p3").val();
    // $.ajax({type:"POST",
    //     url:"wjson.php",
    //     data:"headline="+headline+"&p1="+p1+"&p2="+p2+"&p3="+p3,
    //     success:function(data) {

    //     }
    // });
    </script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>
        
	
