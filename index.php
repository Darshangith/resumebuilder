<?php
if (!empty($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $workexperience = $_POST['workexperience'];
    $industrialtraining = $_POST['Industialtraining'];
    $nameoforganization = $_POST['nameoforagnization'];
    $positionheld = $_POST['positionheld'];
    $period = $_POST['period'];
    $project = $_POST['project'];
    $hobby = $_POST['hobby'];
    $skills = $_POST['skils'];

    require("fpdf/fpdf.php");

    class PDF extends FPDF
    {
        function Header()
        {
            // Title
            $this->SetFont('Arial', 'B', 20);
            $this->Cell(0, 10, 'Resume', 0, 1, 'C');
            $this->Ln(10);
        }

        function SectionTitle($title)
        {
            $this->SetFont('Arial', 'B', 16);
            $this->Cell(0, 10, $title, 1, 1);
            $this->Ln(4);
        }

        function Content($content)
        {
            $this->SetFont('Arial', '', 14);
            $this->MultiCell(0, 6, $content);
            $this->Ln(4);
        }
    }

    $pdf = new PDF();
    $pdf->AddPage();

    // Personal Information Section
    $pdf->SectionTitle('Personal Information');
    $pdf->Content('Full Name: ' . $fullname);
    $pdf->Content('Email: ' . $email);
    $pdf->Content('Phone No: ' . $phone);
    $pdf->Content('Address: ' . $address);

    // Education Section
    $pdf->SectionTitle('Education');
    $pdf->Content($education);

    // Work Experience Section
    $pdf->SectionTitle('Work Experience');
    $pdf->Content($workexperience);

    // Industrial Training Section
    $pdf->SectionTitle('Industrial Training');
    $pdf->Content($industrialtraining);

    // Organization Section
    $pdf->SectionTitle('Organization');
    $pdf->Content('Name: ' . $nameoforganization);
    $pdf->Content('Position Held: ' . $positionheld);
    $pdf->Content('Period: ' . $period);

    // Additional Information Section
    $pdf->SectionTitle('Additional Information');
    $pdf->Content('Project: ' . $project);
    $pdf->Content('Hobby: ' . $hobby);
    $pdf->Content('Skills: ' . $skills);

    $pdf->Output();
}


/*if (!empty($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $workexperience = $_POST['workexperience'];
    $Industialtraining = $_POST['Industialtraining'];
    $nameoforganization = $_POST['nameoforagnization'];
    $positionheld = $_POST['positionheld'];
    $period = $_POST['period'];
    $project = $_POST['project'];
    $hobby = $_POST['hobby'];
    $skils = $_POST['skils'];
  
    require("fpdf/fpdf.php");

    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(0,10,'Resume Builder',0,1,'C');

    $pdf->SetFont('Arial','',16);

    $pdf->Cell(45,10,'Name',1,0,);
    $pdf->Cell(0,10,$fullname,1,1);
    $pdf->Image("resume.jpg");

    $pdf->Cell(45,10,'Email',1,0,);
    $pdf->Cell(0,10,$email,1,1,);
    
    $pdf->Cell(45,10,'Phone No',1,0,);
    $pdf->Cell(0,10,$phone,1,1,);

    $pdf->Cell(45,10,'Address',1,0,);
    $pdf->Cell(0,10,$address,1,1,);

    $pdf->Cell(45,10,'Education',1,0,);
    $pdf->Cell(0,10,$education,1,1,);


    $pdf->output();
}
*/
?>