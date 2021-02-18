<?php
namespace App;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\SystemSetting;
class ClassListPDF extends FPDF
{
var $widths;
var $aligns;

function Header()
{
    // Logo
	$this->Image('logo.png',7,6,37);
	$this->Image('don4.png',180,6,23);
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Move to the right
    
	// Title
	
	$systeminfo = SystemSetting::find(1);
	$title = $systeminfo->name;
	$address = $systeminfo->address;
	$email = $systeminfo->email;
	$phone = $systeminfo->phone;
	
	
	$this->Cell(200,0,strtoupper($title),0,0,'C');
	$this->Ln(7);
	$this->SetFont('Arial','B',13);
	
	$this->Cell(200,0,strtoupper($address),0,0,'C');
	$this->Ln(7);
	
	$this->Cell(200,0,strtoupper($email),0,0,'C');
	$this->Ln(7);

	$this->Cell(200,0,strtoupper($phone),0,0,'C');

    // Line break
    $this->Ln(9);
}

function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}



function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data,$fill)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++){
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));}
	$h=7*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		
		
		//Print the text
		$this->MultiCell($w,7,$data[$i],0,$a,$fill);
		//Draw the border
		$this->Rect($x,$y,$w,$h);
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);

		
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		{
			$this->AddPage($this->CurOrientation);
			$this->SetXY(10,45);
			$this-> Cell(10, 10, "#",1, 0, 'C', 1, '');
			$this->Cell(100, 10, "Full Names",1, 0, 'C', 1, '');
			$this-> Cell(85, 10, "",1, 0, 'C', 1, '');
			$this->Ln();

		}
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		{$w=$this->w-$this->rMargin-$this->x;}
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		{$nb--;}
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			{$sep=$i;}
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					{$i++;}
			}
			else
				{$i=$sep+1;}
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			{$i++;}
	}
	return $nl;
}
}
?>