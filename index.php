<?php 
if (isset($_GET['choice'])) { // IF THE CHOICE VARIABLE IS SET IN THE URL (IF THEY CHOOSE A STYLE)...
  $choice = $_GET['choice']; // GET THE URL VALUE AND STORE IT IN LOCAL VARIALBE $choice...
  
  // If $choice == any of the values provided in the $choice variable in includes/header.php then set cookie, else set default
  if ($choice == "slate" || $choice == "cosmo" || $choice == "cyborg" || $choice == "readable" || $choice == "simplex" || $choice == "cerulean" || 
  $choice == "united" || $choice == "superhero" || $choice == "slate" || $choice == "yeti" || $choice == "flatly" || $choice == "darkly"
  || $choice == "default" || $choice == "lumen" || $choice == "paper" || $choice == "sandstone" || $choice == "journal" || $choice == "spacelab") { 

      setcookie("sitestyle", $choice, time()+60*60*24*100, "/"); //Set Selected Theme as Cookie for use in includes/header.php file
      header("location: index.php"); // Send user to home page after theme is selected
      exit(); // End script
  }
  else{
     $Style = "flatly";
  }
}
?>
<?php include 'style/style.php';  // Check if the user has a style cookie set and access its value ?>


<!DOCTYPE html>
<html>
<head>
	<title>Aptitude Test Home Page</title>
</head>
<!-- Header for the page [Navbar, CSS Links] -->
<?php include 'includes/header.php';?>
<!-- End of the header -->
<body>
<div class="wrapper">

<!--Display the pie chart-->
    <center>
    <div id="chartContainer" style="width: 800px; height: 430px; padding-top:60px;"></div>
    </center>
<div class="push"></div>
</div>

</body>

<!-- Jquery -->
<script src="jquery/jquery-1.11.2.min.js"></script>

<!-- Bootstap js required for Bootstrap Framework-->
<script src="js/bootstrap.min.js"></script>

<!-- canvajs library required to create the charts -->
<script src="js/canvasjs.js"></script>

<!-- creating the chart using JSON object echoed out in database/aptitude_chart1.php file -->
    <script type="text/javascript">
        $(document).ready(function () {

            $.getJSON("database/aptitude_chart1.php", function (result) {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    exportEnabled: true,
                    exportFileName: "Aptitude Test",
                    title:{
                      text: "The Highest Stocking Level (Units) of Artesunate inj 60mg For Each Facility"
                    },
                    data: [
                        {
                            type: "pie",
                            dataPoints: result
                        }
                    ]
                });

                chart.render();
            });
        });
    </script>
<!-- Footer for the page [Footer, JS Links (Makes the page load faster since all CSS is loaded first) -->
<?php include('includes/footer.php');?>
<!-- End of the Footer -->
</html>
