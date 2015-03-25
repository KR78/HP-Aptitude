<!--- 
|| Bootstrap Framework Theme Chosen By User [GET $Style variable from Cookie in User's Browser] ||
|| [If $Style variable is not set then  $Style is set to -> 'flatly' from style.php file in Style folder] 
|| load CSS from /bootswatch/flatly/bootstrap.min.css" else if cookie is set, get variable and return selected theme/css
-->
<link href="./bootswatch/<?php echo $Style;?>/bootstrap.min.css" rel="stylesheet">
<!--- Fontawesome Icons -->
<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.min.css">

   <style>
.navbar-brand{
  position: relative;
  right: 2em;
}
/* css to push footer to the bottom of the page*/
* {
margin: 0;
}
html, body {
height: 100%;
}
.wrapper {
min-height: 100%;
height: auto !important;
height: 100%;
margin: 0 auto -4em;
}
.footer, .push {
height: 4em;
}
   </style>
       <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">HP-Aptitude Test</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php"> Chart 1 (Facility)</a></li>
          <li><a href="chart2.php">Chart 2 (District)</a></li>
        </ul>
      
      <!-- Bootstrap Theme Options From Bootswatch -->
        <ul class="nav navbar-nav navbar-right">
            <li><a href="https://github.com/KR78/HP-Aptitude">Github</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Download <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="data/Aptitude.pdf" download="aptitude.pdf">PDF</a></li>
              <li><a href="data/Aptitude - data.csv" download="aptitude.csv">CSV</a></li>
              <li><a href="data/Aptitude.xlsx" download="aptitude.xls">XLS</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Themes <b class="caret"></b></a>
            <ul class="dropdown-menu">
<!-- Send GET variable $choice to index.php to set COOKIE variable 'sitestyle' and provide selected theme (CSS File) to page -->
              <li><a href="index.php?choice=flatly"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Default</a></li>
              <li><a href="index.php?choice=default"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Flat</a></li>
              <li><a href="index.php?choice=cyborg"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Cyborg</a></li>
              <li><a href="index.php?choice=cosmo"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Cosmo</a></li>
              <li><a href="index.php?choice=united"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;United</a></li>
              <li><a href="index.php?choice=readable"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Readable</a></li>
              <li><a href="index.php?choice=sandstone"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Sandstone</a></li>
              <li><a href="index.php?choice=superhero"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Superhero</a></li>
              <li><a href="index.php?choice=simplex"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Simplex</a></li>
              <li><a href="index.php?choice=journal"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Journal</a></li>
              <li><a href="index.php?choice=lumen"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Lumen</a></li>
              <li><a href="index.php?choice=slate"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Slate</a></li>
              <li><a href="index.php?choice=spacelab"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Spacelab</a></li>
              <li><a href="index.php?choice=darkly"><i class="fa fa-arrow-circle-right"></i></i>&nbsp;Darkly</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<br><br>

