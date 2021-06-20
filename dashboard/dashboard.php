<?php
$koneksi     = mysqli_connect("localhost", "root", "", "koperasi_abm");
$tanggal       = mysqli_query($koneksi, "SELECT tanggal ,COUNT(tanggal) 'Jumlah' FROM `detail` GROUP BY tanggal ORDER BY tanggal ASC");
// SELECT tanggal ,COUNT(tanggal) 'Jumlah' FROM `detail` GROUP BY tanggal ORDER BY tanggal ASC
// SELECT tanggal FROM detail WHERE no_rek order by id_tabungan asc
$jenis_tabungan = mysqli_query($koneksi, "SELECT jenis_tabungan ,COUNT(jenis_tabungan) 'jenis_tabungan' FROM `detail` GROUP BY jenis_tabungan ORDER BY jenis_tabungan ASC");
?>
<!-- SELECT jumlah FROM detail WHERE no_rek order by id_tabungan asc -->
<html>

<head>
    <title>Koperasi Artha Bhaskara Mandiri</title>
    <script src="assets/Chart.js/Chart.bundle.js"></script>

    <style type="text/css">
        .container {
            width: 50%;
            margin: 15px auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <strong>
                <h2>
                    <center>Koperasi Artha Bhaskara Mandiri</center>
                </h2>
            </strong>
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>


    </div>

    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php while ($b = mysqli_fetch_array($tanggal)) {
                                echo '"' . $b['tanggal'] . '",';
                            } ?>],
                datasets: [{
                    label: '# of Votes',
                    data: [<?php while ($p = mysqli_fetch_array($jenis_tabungan)) {
                                echo '"' . $p['jenis_tabungan'] . '",';
                            } ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
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
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>