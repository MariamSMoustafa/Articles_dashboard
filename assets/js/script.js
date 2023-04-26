
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";  
  document.getElementById("main-content").style.marginLeft = "250px";
  document.getElementById("main").style.display="none";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";  
  document.getElementById("main").style.display="block";  
}

var pieChartValues = [{
  y: 39.16,
  exploded: true,
  indexLabel: "Mariam",
  color: "#1f77b4"
}, {
  y: 21.8,
  indexLabel: "Sara",
  color: "#ff7f0e"
}, {
  y: 21.45,
  indexLabel: "Ahmed",
  color: " #ffbb78"
}, {
  y: 5.56,
  indexLabel: "Bakry",
  color: "#d62728"
}, {
  y: 5.38,
  indexLabel: "Esraa",
  color: "#98df8a"
}, {
  y: 3.73,
  indexLabel: "user1",
  color: "#bcbd22"
}, {
  y: 2.92,
  indexLabel: "user2",
  color: "#f7b6d2"
}];
renderPieChart(pieChartValues);

function renderPieChart(values) {

  var chart = new CanvasJS.Chart("pieChart", {
    backgroundColor: "white",
    colorSet: "colorSet2",

    title: {
      text: "Users Pie Chart",
      fontFamily: "Verdana",
      fontSize: 25,
      fontWeight: "normal",
    },
    animationEnabled: true,
    data: [{
      indexLabelFontSize: 15,
      indexLabelFontFamily: "Monospace",
      indexLabelFontColor: "darkgrey",
      indexLabelLineColor: "darkgrey",
      indexLabelPlacement: "outside",
      type: "pie",
      showInLegend: false,
      toolTipContent: "<strong>#percent%</strong>",
      dataPoints: values
    }]
  });
  chart.render();
}
var columnChartValues = [{
  y: 686.04,
  label: "one",
  color: "#1f77b4"
}, {
  y: 381.84,
  label: "two",
  color: "#ff7f0e"
}, {
  y: 375.76,
  label: "three",
  color: " #ffbb78"
}, {
  y: 97.48,
  label: "four",
  color: "#d62728"
}, {
  y: 94.2,
  label: "five",
  color: "#98df8a"
}, {
  y: 65.28,
  label: "Hi",
  color: "#bcbd22"
}, {
  y: 51.2,
  label: "Hello",
  color: "#f7b6d2"
}];
renderColumnChart(columnChartValues);

function renderColumnChart(values) {

  var chart = new CanvasJS.Chart("columnChart", {
    backgroundColor: "white",
    colorSet: "colorSet3",
    title: {
      text: "Column Chart",
      fontFamily: "Verdana",
      fontSize: 25,
      fontWeight: "normal",
    },
    animationEnabled: true,
    legend: {
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    theme: "theme2",
    data: [

      {
        indexLabelFontSize: 15,
        indexLabelFontFamily: "Monospace",
        indexLabelFontColor: "darkgrey",
        indexLabelLineColor: "darkgrey",
        indexLabelPlacement: "outside",
        type: "column",
        showInLegend: false,
        legendMarkerColor: "grey",
        dataPoints: values
      }
    ]
  });

  chart.render();
}