
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

var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

/* large line chart */
var chLine = document.getElementById("chLine");
var chartData = {
  labels: ["Zero", "Groups", "Editors", "Normal"],
  datasets: [{
    data: [589, 445, 483, 503, 689, 692, 634],
    backgroundColor: 'transparent',
    borderColor: colors[0],
    borderWidth: 4,
    pointBackgroundColor: colors[0]
  }

  ]
};
if (chLine) {
  new Chart(chLine, {
  type: 'line',
  data: chartData,
  options: {
    scales: {
      xAxes: [{
        ticks: {
          beginAtZero: false
        }
      }]
    },
    legend: {
      display: false
    },
    responsive: true
  }
  });
}

/* bar chart */
var chBar = document.getElementById("chBar");
if (chBar) {
  new Chart(chBar, {
  type: 'bar',
  data: {
    labels: ["Zero", "Groups", "Editors", "Normal"],
    datasets: [{
      data: [589, 445, 483, 503, 689, 692, 634],
      backgroundColor: colors[0]
    },
    {
      data: [639, 465, 493, 478, 589, 632, 674],
      backgroundColor: colors[1]
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        barPercentage: 0.4,
        categoryPercentage: 0.5
      }]
    }
  }
  });
}

