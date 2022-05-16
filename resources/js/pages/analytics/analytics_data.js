export const analyticsChartData = {
    type: "bar",
    data: {
      labels: ["Apr 20", "Apr 21", "Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27"],
      datasets: [
        {
          label: "Unique views",
          type: "line",
          data: [0, 0, 1, 2, 79, 82, 27, 14],
          backgroundColor: "rgba(54,73,93,.5)",
          borderColor: "#36495d"
        },
        {
          label: "Clicks",
          type: "bar",
          data: [10.166, 72.081, 33.003, 50.323, 54.792, 85.886, 43.662, 51.514],
          backgroundColor: "rgba(71, 183, 132,.5)",
          borderColor: "#47b784"
        },
        {
            label: "Clicks",
            type: "bar",
            data: [10.166, 72.081, 33.003, 50.323, 54.792, 85.886, 43.662, 51.514],
            backgroundColor: "rgba(171, 100, 132,.5)",
            borderColor: "#47b784"
          }
      ]
    },
    options: {
      responsive: true,
      lineTension: 1,
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
              padding: 25
            }
          }
        ]
      }
    }
  };
  
  export default analyticsChartData;