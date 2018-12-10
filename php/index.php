<!DOCTYPE html>
<html>
<head>
    <!DOCTYPE html>
<html dir="ltr" lang="tr-TR">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="IGUANA IGT" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />

    <!-- Business Demo Specific Stylesheet -->
    <link rel="stylesheet" href="demos/business/business.css" type="text/css" />
    <link rel="stylesheet" href="demos/business/css/fonts.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="one-page/css/et-line.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Charts</title>
</head>
<body>
<div class="col-md-5">
    <canvas id="myChart" ></canvas>
</div>
    <?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// We have included includes/fusioncharts.php, which contains functions
// to help us easily embed the charts.
include("fusioncharts.php");
// Create the chart - Column 2D Chart with data given in constructor parameter 
// Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
$columnChart = new FusionCharts("column2d", "ex1", "100%", 400, "chart-1", "json", '{  
                "chart":{  
                  "caption":"Harry\'s SuperMart",
                  "subCaption":"Top 5 stores in last month by revenue",
                  "numberPrefix":"$",
                  "theme":"ocean"
                },
                "data":[  
                  {  
                     "label":"Bakersfield Central",
                     "value":"880000"
                  },
                  {  
                     "label":"Garden Groove harbour",
                     "value":"730000"
                  },
                  {  
                     "label":"Los Angeles Topanga",
                     "value":"590000"
                  },
                  {  
                     "label":"Compton-Rancho Dom",
                     "value":"520000"
                  },
                  {  
                     "label":"Daly City Serramonte",
                     "value":"330000"
                  }
                ]
            }');
// Render the chart
$columnChart->render();
?>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

    <script>
        // Owl Carousel Scripts
        $('#oc-features').owlCarousel({
            items: 1,
            margin: 60,
            nav: true,
            navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
            dots: false,
            stagePadding: 30,
            responsive:{
                768: { items: 2 },
                1200: { stagePadding: 200 }
            },
        });
    </script>
</body>
</html>
