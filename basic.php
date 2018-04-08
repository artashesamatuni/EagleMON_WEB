<?php
function start()
{
  echo "<!DOCTYPE html>\n";
}
function language()
{
  echo "<html lang=\"en\">\n";
}

function headline()
{
  echo "<head>
          <title>EagleMON</title>
          <meta charset=\"utf-8\">
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
          <link rel=\"icon\" type=\"image/x-icon\" href=\"images/logo.svg\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
          <link rel=\"stylesheet\" href=\"blue.css\">
          <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\" type=\"text/css\">
          <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
          <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
          <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
      </head>\n";
}

function footer()
{
  echo "<footer class=\"container-fluid text-center\">
          <a href=\"#myPage\" title=\"To Top\"><span class=\"glyphicon glyphicon-chevron-up\"></span></a>
          <p>©2016-".date("Y")." eaglemon. All Rights Reserved</p>
        </footer>\n";
}


function menu($disable)
{
echo "<ul class=\"nav navbar-nav navbar-left\">\n";
if ($disable!="HOME"){
echo "<li><a href=\"index.php\">HOME</a></li>\n";
}
if ($disable!="ABOUT US"){
echo "<li><a href=\"about.html\">ABOUT US</a></li>\n";
}
if ($disable!="PRODUCTS"){
echo "<li><a href=\"products.php\">PRODUCTS</a></li>\n";
}
if ($disable!="SERVICES"){
    echo "<li><a href=\"#services\">SERVICES</a></li>\n";
  }
if ($disable!="PORTFOLIO"){
    echo "<li><a href=\"#portfolio\">PORTFOLIO</a></li>\n";
  }
if ($disable!="PRICING"){
    echo "<li><a href=\"#pricing\">PRICING</a></li>\n";
  }
if ($disable!="CONTACT"){
    echo "<li><a href=\"#contact\">CONTACT</a></li>\n";
  }
    echo "</ul>\n";
    }
 ?>
