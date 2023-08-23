<?php

$deskripsi=$_POST["deskripsi"];
$judul=$_POST["judul"];
$instansi=$_POST["instansi"];
$tingkat=$_POST["tingkat"];
$peringkat=$_POST["peringkat"];

$desc="Teknologi Informasi TI (singkatan dari Teknologi Informasi) Teknologi Komputer Sistem Informasi Jaringan Komputer Komputasi Awan (Cloud Computing) Big Data Analitika Data (Data Analytics) Kecerdasan Buatan (Artificial Intelligence) Pembelajaran Mesin (Machine Learning) Internet of Things (IoT) Keamanan Informasi (Information Security) Kriptografi Jaringan Nirkabel (Wireless Networks) Infrastruktur Teknologi Pengembangan Perangkat Lunak Pengembangan Aplikasi Mobile Pengembangan Web Database Management Pengolahan Citra dan Suara Sistem Operasi Perangkat Keras Komputer (Hardware) Teknologi Virtualisasi E-commerce (Electronic Commerce) Teknologi Blockchain Industri 4.0 Robotika Desain Antarmuka Pengguna (UI/UX Design) Teknologi 5G Teknologi VR (Virtual Reality) dan AR (Augmented Reality) Manajemen Proyek Transformasi Digital Teknologi Cerdas (Smart Technologies) Teknologi Otomatisasi Bioinformatika Sistem Penunjang Keputusan (Decision Support Systems) Pengolahan Bahasa Alami (Natural Language Processing) Teknologi Quantum Teknologi Keuangan (Fintech) Integrasi Sistem";
$title="Pekan Kreativitas Mahasiswa Kompetisi Mahasiswa bidang Informatika Politeknik Nasional Pagelaran Mahasiswa Nasional Bidang TIK gemastik kmipn pkm";
$dept="Kementrian Kementerian Pusat Prestasi Nasional Pendidikan Kebudayaan Riset Teknologi Bakorma Universitas Mahasiswa";

$valDesc=0;
$valTitle=0;
$valTingkat=0;
$valPeringkat=0;
$valInstansi=0;

similar_text(strtoupper($dept), strtoupper($instansi), $valInstansi);
similar_text(strtoupper($desc), strtoupper($deskripsi), $valDesc); 
similar_text(strtoupper($title), strtoupper($judul), $valTitle);

switch ($tingkat) {
    case "Nasional":
        $valTingkat=0.8;
        break;
    case "Regional":
        $valTingkat=0.6;
        break;
    default:
        $valTingkat=0.2;
}

switch ($peringkat) {
    case "Juara 1":
        $valPeringkat=0.9;
        break;
    case "Juara 2":
        $valPeringkat=0.7;
        break;
    case "Juara 3":
        $valPeringkat=0.5;
        break;
    case "Harapan":
        $valPeringkat=0.3;
        break;
    case "Best":
        $valPeringkat=0.2;
        break;
    default:
        $valPeringkat=0.1;
}

$result= ($valDesc*0.05)+($valTitle*0.1)+($valTingkat*0.3)+($valPeringkat*0.3)+($valInstansi*0.15);

echo json_encode($result);
?>