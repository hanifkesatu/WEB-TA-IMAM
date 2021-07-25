<?php
    //koneksi database
    $konek = mysqli_connect("localhost", "root", "", "grafiksensor");
    //baca dari tabel tb_sensor
    // baca informasi tanggal untuk semua data
    $tanggal = mysqli_query($konek, "SELECT tanggal FROM tb_sensor ORDER BY ID ASC");
    //baca informasi suhu untuk semua data - sumbu x di grafik
    $suhu = mysqli_query($konek, "SELECT temperature FROM tb_sensor ORDER BY ID ASC");
    $humidity = mysqli_query($konek, "SELECT humidity FROM tb_sensor ORDER BY ID ASC");
    $ldr = mysqli_query($konek, "SELECT ldr FROM tb_sensor ORDER BY ID ASC");
    $plant1 = mysqli_query($konek, "SELECT plant1 FROM tb_sensor ORDER BY ID ASC");
    $plant2 = mysqli_query($konek, "SELECT plant2 FROM tb_sensor ORDER BY ID ASC");
    $plant3 = mysqli_query($konek, "SELECT plant3 FROM tb_sensor ORDER BY ID ASC");
?>



<script>
gradientChartOptionsConfiguration = {
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      tooltips: {
        bodySpacing: 4,
        mode: "nearest",
        intersect: 0,
        position: "nearest",
        xPadding: 10,
        yPadding: 10,
        caretPadding: 10
      },
      responsive: true,
      scales: {
        yAxes: [{
          display: 0,
          gridLines: 0,
          ticks: {
            display: false
          },
          gridLines: {
            zeroLineColor: "transparent",
            drawTicks: false,
            display: false,
            drawBorder: false
          }
        }],
        xAxes: [{
          display: 0,
          gridLines: 0,
          ticks: {
            display: false
          },
          gridLines: {
            zeroLineColor: "transparent",
            drawTicks: false,
            display: false,
            drawBorder: false
          }
        }]
      },
      layout: {
        padding: {
          left: 0,
          right: 0,
          top: 15,
          bottom: 15
        }
      }
    };

    ctx = document.getElementById('lineChartExample').getContext("2d");

    gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, '#80b6f4');
    gradientStroke.addColorStop(1, chartColor);

    gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
    gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
    gradientFill.addColorStop(1, "rgba(249, 99, 59, 0.40)");

    myChart = new Chart(ctx, {
      type: 'line',
      responsive: true,
      data: {
        labels: ["00.00", "02.00", "04.00", "06.00", "08.00", "10.00", "12.00", "14.00", "16.00", "18.00", "20.00", "22.00"],
        datasets: [{
          label: "Active Users",
          borderColor: "#f96332",
          pointBorderColor: "#FFF",
          pointBackgroundColor: "#f96332",
          pointBorderWidth: 2,
          pointHoverRadius: 4,
          pointHoverBorderWidth: 1,
          pointRadius: 4,
          fill: true,
          backgroundColor: gradientFill,
          borderWidth: 2,
          data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 630]
        }]
      },
      options: gradientChartOptionsConfiguration
    });
</script>