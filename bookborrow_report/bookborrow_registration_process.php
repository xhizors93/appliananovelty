<?php
	if(isset($_POST['submit']))
	{	
		include 'db_connect.php';

		date_default_timezone_set('UTC');
		require('fpdf/fpdf.php');

		class PDF_result extends FPDF 
		{
			function __construct ($orientation = 'P', $unit = 'pt', $format = 'Letter', $margin = 40) 
			{
				$this->FPDF($orientation, $unit, $format);
				$this->SetTopMargin($margin);
				$this->SetLeftMargin($margin);
				$this->SetRightMargin($margin);
				
				$this->SetAutoPageBreak(true, $margin);
			}
			
			function Header () 
			{
			     $this->Image('espbt_logo.jpg',250,15,100);

			//	$this->SetFont('Arial', 'B', 20);
			//	$this->SetFillColor(36, 96, 84);
			//	$this->SetTextColor(225);
			//	$this->Cell(0, 30, "YouHack MCQ Results", 0, 1, 'C', true);
			}
			
			 function Footer()
			 {
			    //Position at 1.5 cm from bottom
			    $this->SetY(-15);
			    //Arial italic 8
			    $this->SetFont('Arial','I',8);
			    //Page number
			    $this->Cell(0,10,'e-SPBT',0,0,'C');
			 }

				
			function Generate_Table($data1,$data2,$data3,$data4,$data5) 
			{
				$this->SetFont('Arial', 'B', 12);
				$this->SetTextColor(0);
			//	$this->SetFillColor(94, 188, z);
				$this->SetFillColor(128, 128, 128);
				$this->SetLineWidth(1);
				$this->Cell(400, 25, "ISBN", 'LTR', 0, 'C', true);
				//$this->Cell(100, 25, "Marks", 'LTR', 1, 'C', true);
				 
				$this->SetFont('Arial', '');
				$this->SetFillColor(238);
				$this->SetLineWidth(0.2);
				$fill = false;
				
				$this->Ln();
				$this->Cell(400, 20, $data1, 1, 0, 'C', $fill);
				$fill = !$fill;
				$this->Ln();
				$this->Cell(400, 20, $data2, 1, 0, 'C', $fill);
				$fill = !$fill;
				$this->Ln();
				$this->Cell(400, 20, $data3, 1, 0, 'C', $fill);
				$fill = !$fill;
				$this->Ln();
				$this->Cell(400, 20, $data4, 1, 0, 'C', $fill);
				$fill = !$fill;
				$this->Ln();
				$this->Cell(400, 20, $data5, 1, 0, 'C', $fill);
				$fill = !$fill;
				/*for ($i = 0; $i < count($data); $i++) 
				{	
					$this->Ln();
					$this->Cell(400, 20, $data[$i], 1, 0, 'C', $fill);
					//$this->Cell(100, 20,  $marks[$i], 1, 1, 'R', $fill);
					$fill = !$fill;
				}*/
				$this->SetX(367);
				//$this->Cell(100, 20, "Total", 1);
			//	$this->Cell(100, 20,  array_sum($marks), 1, 1, 'R');
			}	
			
		}

		$pdf = new PDF_result();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetY(100);

		$pdf->Cell(50, 13, "Borang Rekod Skim Pinjaman Buku Teks 20...");
		$pdf->Ln();$pdf->Ln();
		$pdf->Cell(100, 13, "Student Details");
		$pdf->SetFont('Arial', '');
		$pdf->Cell(250, 13, $_POST['STUD_NAME']);

		$pdf->SetFont('Arial', 'B');
		$pdf->Cell(50, 13, "Date:");
		$pdf->SetFont('Arial', '');
		$pdf->Cell(100, 13, date('F j, Y'), 0, 1);

		$pdf->SetFont('Arial', 'I');
		$pdf->SetX(140);
		$pdf->Cell(200, 15, $_POST['STUD_NRIC'], 0, 2);
		$pdf->Cell(200, 15, $_POST['STUD_CLASS'], 0, 2);
		$pdf->Ln();

		$pdf->Generate_Table($_POST['data1'],$_POST['data2'],$_POST['data3'],$_POST['data4'],$_POST['data5']);

		$pdf->Ln(40);

		$message = "Saya mengesahkan bahawa saya telah menerima sebanyak ____ naskah buku teks SPBT. Saya berjanji akan mematuhi syarat-syarat berikut;
		2.1  Semua buku teks yang disenaraikan dalam SPBT adalah hak Kerajaan Malaysia.
		2.2  Setiap murid mesti bertanggungjawab menjaga kebersihan dan keselamatan buku teks.
		2.3  Setiap murid diwajibkan membalut buku teks dan dilarang merosakkan buku teks seperti menggunting gambar atau mana-mana bahagian dalam buku  teks.
		2.4  Semua murid dilarang meninggalkan buku teks di dalam kelas setelah tamat tempoh waktu belajar pada hari-hari.
		2.5  Jika didapati seseorang murid mengotor atau mengabaikan keselamatan buku teks, maka pihak sekolah berhak merampas atau meminta ganti rugi.
		2.6  Semua murid hendaklah menyerahkan semua buku teks yang telah dipinjamkan itu apabila diarah berbuat demikian oleh pengetua.
		2.7  Sekiranya  saya gagal mengembalikan buku teks SPBT dalam masa yang ditetapkan,pihak sekolah berhak untuk menahan pemberian buku teks SPBT bagi tahun-tahun berikutnya sehingga buku berkenaan dikembalikan/diganti.


		Sekian, terima kasih.
		Yang benar,



		________________________
		";

		$pdf->MultiCell(0, 14, $message);

		$pdf->SetFont('Arial', 'U', 10);
		$pdf->SetTextColor(1, 162, 232);

		//$pdf->Write(13, "admin@youhack.me", "mailto:example@example.com");

		$pdf->Output('result.pdf', 'F');	

		$STUD_NAME = addslashes($_POST['STUD_NAME']);
		$STUD_NRIC = addslashes($_POST['STUD_NRIC']);
		$STUD_CLASS = addslashes($_POST['STUD_CLASS']);
		$data1 = addslashes($_POST['data1']);
		$data2 = addslashes($_POST['data2']);
		$data3 = addslashes($_POST['data3']);
		$data4 = addslashes($_POST['data4']);
		$data5 = addslashes($_POST['data5']);
		
		$query = "INSERT INTO borrow_details (STUD_NRIC, STUD_NAME, STUD_CLASS, BORROW_RDATE, REMARK)
				 					  VALUES ('$STUD_NRIC', '$STUD_NAME', '$STUD_CLASS', '0000-00-00', 'Not Yet Returned')";
		
		$result = mysql_query($query) or die (mysql_error());
		
		if($result) 
		{
			$query2 = "INSERT INTO textbook_borrowed (STUD_NRIC, data1, data2, data3, data4, data5) 
						VALUES ('$STUD_NRIC', '$data1', '$data2', '$data3', '$data4', '$data5')";			
			$result2 = mysql_query($query2) or die (mysql_error());	

			echo "<script>alert('Registration Successful!'); </script>";
			$url = 'espbt/bookborrow_view.php';
    		echo '<META HTTP-EQUIV=Refresh CONTENT="1000; URL='.$url.'">';
		}
		else
			echo "<script>alert('Registration Failed!'); </script>";	
    }

		/*$STUD_NAME = addslashes($_POST['STUD_NAME']);
		$STUD_NRIC = addslashes($_POST['STUD_NRIC']);
		$STUD_CLASS = addslashes($_POST['STUD_CLASS']);
		
		$query = "INSERT INTO borrow_details (STUD_NRIC, STUD_NAME, STUD_CLASS)
				 					  VALUES ('$STUD_NRIC', '$STUD_NAME', '$STUD_CLASS')";
		
		$result = mysql_query($query) or die (mysql_error());
		
		if($result) 
		{
			echo "<script>alert('Registration Successful!'); </script>";
			$url = 'bookborrow_view.php';
    		echo '<META HTTP-EQUIV=Refresh CONTENT="1000; URL='.$url.'">';
		}
		else
			echo "<script>alert('Registration Failed!'); </script>"; */		
	
	
?>