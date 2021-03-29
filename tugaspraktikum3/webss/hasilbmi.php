<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>List BmiPasien</title>
</head>
<body>

<?php
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$berat_badan = $_POST['badan'];
$tinggi_badan = $_POST['tinggi'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jk'];
require_once "oop_bmipasien.php";
$konvers = $tinggi_badan * 0.01;
$oopbmi = new oopbmi($berat_badan , $konvers);
$bmi_hasil = round($oopbmi->bmi(),1); //hasil bmi
$statusbmi = ($oopbmi->statusbmiaja());  // status bmi
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Beratbadan(Kg)</th>
      <th scope="col">Tinggibadan(Cm)</th>
      <th scope="col">Umur(Tahun)</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">BMI</th>
      <th scope="col">Hasil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Alif Luthan</td>
      <td>80</td>
      <td>180</td>
      <td>19</td>
      <td>Laki-Laki</td>
      <td>25</td>
      <td>Kelebihan Berat Badan</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ichsan Rustian</td>
      <td>76</td>
      <td>174</td>
      <td>18</td>
      <td>Laki-Laki</td>
      <td>20</td>
      <td>Normal (Ideal)</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Eimi Fukada</td>
      <td>66</td>
      <td>167</td>
      <td>23</td>
      <td>Perempuan</td>
      <td>17</td>
      <td>Kekurangan Berat Badan</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Nunung</td>
      <td>91</td>
      <td>178</td>
      <td>32</td>
      <td>Perempuan</td>
      <td>31</td>
      <td>Kegemukan (Obesitas)</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><?php echo $nama; ?></td>
      <td><?php echo $berat_badan; ?></td>
      <td><?php echo $tinggi_badan; ?></td>
      <td><?php echo $umur; ?></td>
      <td><?php echo $jenis_kelamin; ?></td>
      <td><?php echo $bmi_hasil ?></td>
      <td><?php echo $statusbmi ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>