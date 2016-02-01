<!DOCTYPE html>
<html lang="n">
<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <title>Contact BMUNE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- attach CSS styles-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
</head
<body>
<!-- BODY PAGE CONTENT-->

<!-- navigation panel -->
  <?php include("header.html"); ?>
<!-- navigation panel END -->

<!-- FIRST SECTION-->
    <div id="contactSiteTop">
      <div class="container-fluid">
        <div class="row"></div>
      </div>
    </div>
    <div id="contactSite" class="pad-sectiontop">
      <div class="container">
        <div style="margin-bottom:20px;" class="holderBoxSec">
            <h3 style="color:#002768;" class="textFooter">BMUNE SOCIAL MEDIA</h3>
            <div id="imageHolder">
                <a href="https://www.facebook.com/bmune.supplement" target="_blank"><img style="max-width:30px;" src="images/facebook.png"></a>
                <a href="https://www.instagram.com/bmune.supplement" target="_blank"><img style="max-width:30px;" src="images/instagram.png"></a>
                <a href="https://twitter.com/bmune1"><img style="max-width:30px;" src="images/twitter.png"></a>
                <a href="https://www.youtube.com/channel/UCadxsLWtE6u1IPbxZ2wjeUg" target="_blank"><img style="max-width:30px;" src="images/youtube.png"></a>
            </div>
        </div>
        <header>
            <h1><span style="color:#002768">CONTACT</span><span style="color:#54B948;">BMUNE</span></h1>
        </header>
        <section>
          <div class="arrow-up"></div>
            <form id="contact" action="form.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="name" placeholder="Name *" required>
                        <br>
                        <hr>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input class="form-control" type="email" name="email" placeholder="Email *" required>
                        <hr>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input class="form-control" type="phone" name="phone" placeholder="Phone">
                        <hr>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
	                   <textarea class="form-control" name="message" placeholder="Message *" required></textarea>                          <hr>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LcABxETAAAAABrUWaLzIRhEuzOYE1QJTmDKpl9p"></div>
                    <input class="btn btn-block" type="submit" value="Submit" onclick="myFunction()">
                    <p style="margin-top:10px; color:red;">Fields with * are required</p>
            </form>
        </section>
      </div>
    </div>

    <!-- footer panel -->
      <?php include("footer.html"); ?>
    <!-- footer panel END-->

    <!-- attach JavaScripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/contact.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  </body>
</html>
