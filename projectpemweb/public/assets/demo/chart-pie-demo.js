// Set default font family and font color (for Chart.js v3+)
Chart.defaults.font.family = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.color = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart").getContext('2d');
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Blue", "Red", "Yellow", "Green"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32],
      backgroundColor: [
        '#5b9cf2',  // Soft Blue
        '#ff9eb3',  // Candy Pink
        '#fff176',  // Pastel Yellow
        '#a8e6cf'   // Mint Green
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom'
      }
    }
  }
});
