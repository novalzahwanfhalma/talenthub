<?php
include 'fpdf/fpdf.php';
use App\Models\Mahasiswa;
use App\Models\Pendidikan;


$nim = Auth::user()->nim;
$mahasiswa = Mahasiswa::where('nim', $nim)->first();
$nama_mhs = $mahasiswa->nama_mhs;
$alamat = $mahasiswa->alamat;
$no_hp = $mahasiswa->no_hp;
$email = $mahasiswa->email;
$deskripsi = $mahasiswa->deskripsi;
$pendidikan = Pendidikan::where('nim', $nim)->first();
$jurusan = $pendidikan->jurusan;
$institusi = $pendidikan->institusi;


$pdf=new FPDF("P","cm","A4");
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages(); 
$pdf->AddPage();
$pdf->SetFont('Arial', 'B',17); 
$pdf->Cell(0, 1, " $nama_mhs ", 0, 1, 'C');
$pdf->SetFont('Arial', 'B',9); 
$pdf->SetFillColor(255, 255, 255); // Set the fill color to white
$pdf->SetTextColor(0, 0, 0); // Set the text color to white
$pdf->MultiCell(0, 0.5, "Address: $alamat | No. Telp: $no_hp | E-mail: $email", 0, 'C', true);
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "TENTANG SAYA", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5); 
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, " $deskripsi ", 0, 0,);
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "PENDIDIKAN", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5); 
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0.5, " $institusi ", 0, 0,);
$pdf->ln();
$pdf->SetFont('Arial', 'BI', 8);
$pdf->Cell(0, 0.5, " $jurusan ", 0, 0,);
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "PENGALAMAN", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5); 
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "{ Riwayat Pengalaman } ", 0, 0,);
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "PRESTASI", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5); 
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "{ Deskripsi Prestasi } ", 0, 0,);
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "SERTIFIKASI", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5); 
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "{ Deskripsi Sertifikasi } ", 0, 0,);
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 0.5, "Portofolio", 0, 0,);
$y = $pdf->GetY(); // Mendapatkan posisi Y setelah Cell sebelumnya
$length = $pdf->GetStringWidth("TENTANG SAYA"); // Mendapatkan panjang teks "TENTANG SAYA"
$pdf->Line(1, $y + 0.5, $length + 16, $y + 0.5); 
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 0.5, "{ Deskripsi Portofolio } ", 0, 0,);
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();




/*$pdf->SetFont('Arial','',10);
$no = 1;
$tampil  = mysqli_query($koneksi, "select * from calon_mhs");
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