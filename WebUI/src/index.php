<html>
<head>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
  <script src="https://cdn.anychart.com/themes/2.0.0/coffee.min.js"></script>
  <script src="https://cdn.anychart.com/themes/2.0.0/dark_blue.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      background-color: #2b2b2b;
    }
    #container {
    }
    h1 {
      margin: 0;
      padding: 10px;
      text-align: center;
      color: #ffffffd6;
      background-color: #2b2b2b;
    }
  
</style>
</head>
<body>
    <h1>Apache Spark Word Cloud</h1>
  <div id="container"></div>
  <script>
  anychart.onDocumentReady(function () {
    anychart.theme(anychart.themes.darkBlue);
    anychart.data.loadJsonFile(
      //'https://cdn.anychart.com/samples/tag-cloud/most-frequently-words-wikipedia/data.json',
	  'http://bdyu.me/twiter/',
      function(data) {
        var dataset = anychart.data.set(data);
        var mapping = dataset.mapAs({x: 'name', value: 'count'});
        var chart = anychart.tagCloud(mapping);
        chart.angles([10]);
        chart.normal().fill("#ffffffd6");
        chart.hovered().fill('#1f66ad');
        chart.selected().fill('#1f66ad');
        chart.normal().stroke('#ffffffd6');
        chart.hovered().stroke('#1f66ad');
        chart.selected().stroke('#1f66ad');
        chart.container('container').draw();
      }
    );
  });
</script>
</body>
</html>

