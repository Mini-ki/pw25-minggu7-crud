// Data Sampah
var organic = 26200000;
var anorganic = 33790000;
var b3 = 10500;

var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar', 
    data: {
      labels: ['Sampah Organik', 'Sampah Anorganik', 'Sampah B3'], 
      datasets: [{
        label: 'Total Timbulan Sampah (Ton)',
        data: [organic, anorganic, b3], 
        backgroundColor: [
          '#E8F5E9', 
          '#E3F2FD',
          '#FFEBEE'  
        ],
        borderColor: [
          '#4CAF50', 
          '#2196F3', 
          '#F44336'  
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top'
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 2500000, 
            max: 35000000 
          }
        }
      }
    }
  });