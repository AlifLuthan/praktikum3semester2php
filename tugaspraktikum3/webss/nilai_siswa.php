<?php
$proses =$_POST['proses'];
$nama_siswa =$_POST['nama'];
$mata_kuliah =$_POST['matkul'];
$nilai_uts =$_POST['nilai_uts'];
$nilai_uas =$_POST['nilai_uas'];
$nilai_tugas =$_POST['nilai'];
$semua_nilai = [$nilai_uts , $nilai_uas , $nilai_tugas];

if(!empty($proses)){
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    $semua_nilai =($nilai_uts + $nilai_uas + $nilai_tugas)/3;
    echo '<br/> <b> <h1>Nilai Yang Anda Dapatkan Adalah : </h1></b>' .$semua_nilai;
    if($semua_nilai >= 85){
        echo "</br><h1>----Congratulations You Got an A ----</h1>";
    }elseif($semua_nilai >= 70){
        echo "</br><h1>----Congratulations You Got an B ----</h1>";
    }elseif($semua_nilai >= 56){
        echo "</br><h1>----Congratulations You Got an C ----</h1>";
    }elseif($semua_nilai >= 36){
        echo "</br><h1>----Congratulations You Got an D ----</h1>";
    }elseif($semua_nilai >= 0){
        echo "</br><h1>----Congratulations You Got an E ----</h1>";
    }else{
        echo "</br><h1>----Congratulations You Got an I ----</h1>";
    }
}
?>