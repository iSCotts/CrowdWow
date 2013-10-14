<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Render awesome pie charts from PHP arrays using Dojo charting - techchorus.net</title>
        <link rel="stylesheet" type="text/css" href="css/tundra.css">
 
    <script type="text/javascript" src="js/dojo.xd.js"
    djConfig="parseOnLoad: true">
    </script>
    <script type="text/javascript">
        dojo.require("dojox.charting.Chart2D");
        dojo.require("dojox.charting.plot2d.Pie");
        dojo.require("dojox.charting.action2d.Highlight");
        dojo.require("dojox.charting.action2d.MoveSlice");
        dojo.require("dojox.charting.action2d.Tooltip");
        dojo.require("dojox.charting.themes.MiamiNice");
        dojo.require("dojox.charting.widget.Legend");
 
        dojo.addOnLoad(function() {
            var dc = dojox.charting;
            var programmersChart = new dc.Chart2D("programmersChart");
            programmersChart.setTheme(dc.themes.MiamiNice).addPlot("default", {
                type: "Pie",
                font: "normal normal 8pt Tahoma",
                fontColor: "black",
                labelOffset: -30,
                radius: 80
            });
<?php
    $programmers = array(
        'PHP'=>10,
        'JavaScript'=>6,
        'Python'=>12,
        'Java'=>4,
        'Others'=>3
    );
 
    function array_to_chart_json($array) {
        $toReturn = array();
        foreach ($array as $key=>$value) {
            $toReturn[] = array(
                'y'=>$value,
                'text'=>$key,
                'stroke'=>'black',
                'tooltip'=>$key
            );
        }
        return json_encode($toReturn);
    }
 
?>
            programmersChart.addSeries("Series A", <?php echo array_to_chart_json($programmers); ?>);
            var anim_a = new dc.action2d.MoveSlice(programmersChart, "default");
            var anim_b = new dc.action2d.Highlight(programmersChart, "default");
            var anim_c = new dc.action2d.Tooltip(programmersChart, "default");
            programmersChart.render();
            var programmersLegend = new dojox.charting.widget.Legend({
                chart: programmersChart
            },
            "programmersLegend");
        });
    </script>
 
 
 
    </head>
 
    <body class="tundra">
        <div id="programmersChart" style="width: 300px; height: 300px;">
        </div>
        <div id="programmersLegend">
        </div>
    <p>This is a demo page to illustrate how to create awesome pie charts from PHP arrays using the Dojo Toolkit JavaScript library. Visit the orignial article at http://techchorus.net/create-awesome-pie-charts-php-arrays-using-dojo-charting
    </p>
    </body>
</html>