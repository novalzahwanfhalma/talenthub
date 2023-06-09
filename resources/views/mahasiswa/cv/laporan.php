<?php
include 'fpdf/fpdf.php';
use App\Models\Mahasiswa;
use App\Models\Pendidikan;
use App\Models\Portofolio;
use App\Models\Pengalaman;
use App\Models\Prestasi;
use App\Models\Sertifikasi;
use App\Models\Bahasa;


$nim = Auth::user()->nim;
$mahasiswa = Mahasiswa::where('nim', $nim)->first();
$nama_mhs = $mahasiswa ? $mahasiswa->nama_mhs : 'Nama Mahasiswa';
$alamat = $mahasiswa ? $mahasiswa->alamat : 'Alamat';
$no_hp = $mahasiswa ? $mahasiswa->no_hp : 'Nomor HP';
$email = $mahasiswa ? $mahasiswa->email : 'Email';
$deskripsi = $mahasiswa ? $mahasiswa->deskripsi : 'Deskripsi';
$pendidikan = Pendidikan::where('nim', $nim)->first();
$jurusan = $pendidikan ? $pendidikan->jurusan : 'Jurusan';
$institusi = $pendidikan ? $pendidikan->institusi : 'Institusi';
$pengalaman = Pengalaman::where('nim', $nim)->first();
$judul_exp = $pengalaman ? $pengalaman->judul : 'Judul Pengalaman';
$perusahaan = $pengalaman ? $pengalaman->perusahaan : 'Perusahaan';
$portofolio = Portofolio::where('nim', $nim)->first();
$judul_porto = $portofolio ? $portofolio->judul : 'Judul Portofolio';
$deskripsi_porto = $portofolio ? $portofolio->deskripsi : 'Deskripsi Portofolio';
$prestasi = Prestasi::where('nim', $nim)->first();
$judul_pres = $prestasi ? $prestasi->judul_prestasi : 'Judul Prestasi';
$penyelenggara = $prestasi ? $prestasi->penyelenggara : 'Penyelenggara';
$deskripsi_pres = $prestasi ? $prestasi->deskripsi : 'Deskripsi Prestasi';
$sertifikasi = Sertifikasi::where('nim', $nim)->first();
$judul_sertif = $sertifikasi ? $sertifikasi->judul : 'Judul Sertifikasi';
$tahun = $sertifikasi ? $sertifikasi->tahun : 'Tahun';
$institusi_sertif = $sertifikasi ? $sertifikasi->institusi : 'Institusi Sertifikasi';
$deskripsi_sertif = $sertifikasi ? $sertifikasi->deskripsi : 'Deskripsi Sertifikasi';
$bahasa = Bahasa::where('nim', $nim)->first();





$pdf=new FPDF("P","cm","A4");
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B',17);
$pdf->Cell(0, 1, "$nama_mhs", 0, 1, 'C');
$pdf->SetFont('Arial', 'B',9);
$pdf->Cell(0, 0.5, "Alamat : $alamat  |  No. Telp : $no_hp  |  E-mail : $email ", 0, 0, 'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "TENTANG SAYA", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "$deskripsi ", 0, 0,);
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "PENDIDIKAN", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0.5, "$institusi ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(0, 0.5, "$jurusan ", 0, 0,);
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "PENGALAMAN", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0.5, "$judul_exp ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(0, 0.5, "$perusahaan ", 0, 0,);
$pdf->ln();
$pdf->ln();


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "PRESTASI", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0.5, "$judul_pres ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'BI', 9);
$pdf->Cell(0, 0.5, "$penyelenggara ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "$deskripsi_pres ", 0, 0,);
$pdf->ln();
$pdf->ln();


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "SERTIFIKASI", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0.5, "$judul_sertif ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'BI', 9);
$pdf->Cell(0, 0.5, "$penyelenggara ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "$tahun ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "$deskripsi_sertif ", 0, 0,);
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "Portofolio", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0.5, "$judul_porto", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "$deskripsi_porto", 0, 0,);
$pdf->ln();
$pdf->ln();




// $pdf->SetFont('Arial','',10);
// $no = 1;
// $mahasiswa  = mysqli_query($koneksi, "select * from mahasiswa");
// while ($hasil_mhs = mysqli_fetch_array($mahasiswa))
// // {
// $pdf->Cell(1,0.8, $no,1,0);
// $pdf->Cell(6,0.8,$hasil['nis'],1,0);
// $pdf->Cell(7,0.8, $hasil['nama'],1,0);
// $pdf->Cell(4.5,0.8,$hasil['jk'],1,0);
// $pdf->Cell(4.5,0.8, $hasil['telepon'],1,0);
// $pdf->Cell(4,0.8, $hasil['alamat'],1,1);
// $no++;
// }

/*$pdf->SetFont('Arial','',10);
$no = 1;
$tampil = mysqli_query($koneksi, "select * from calon_mhs");
while ($hasil = mysqli_fetch_array($tampil)){
$pdf->Cell(1,0.8, $no,1,0);
$pdf->Cell(6,0.8,$hasil['nis'],1,0);
$pdf->Cell(7,0.8, $hasil['nama'],1,0);
$pdf->Cell(4.5,0.8,$hasil['jk'],1,0);
$pdf->Cell(4.5,0.8, $hasil['telepon'],1,0);
$pdf->Cell(4,0.8, $hasil['alamat'],1,1);
$no++;
}
*/
$pdf->Output("laporan_siswa.pdf","I");
?>