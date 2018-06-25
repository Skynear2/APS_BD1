<?php
    include '..\home\conexao.php';
    require('fpdf.php');
    $opcao = $_POST['submit'];
    
    if($opcao == '1'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT C.nomeClube, S.nomeSocio, S.emailSocio
                FROM clubes C, socios S, planos P
                WHERE C.idClube = S.clube_idClube
                AND P.idPlano = S.plano_idPlano
                AND P.nomePlano = 'Vip'
                GROUP BY C.idClube;";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Clube: '.$row[0].' - Socio: '.$row[1],0,2);
        $pdf->Output();
        }
        
    else if($opcao == '2'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT C.nomeClube, J.nomeJogador
                FROM clubes C, jogadores J
                WHERE C.idClube = J.clube_idClube
                AND J.posicaoJogador = 'Atacante'
                AND J.alturaJogador > 1.80
                GROUP BY C.idClube;
                ";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Clube: '.$row[0].' - Jogador: '.$row[1],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '3'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT C.nomeClube, AVG (J.salarioJogador)
                FROM Jogadores J, Clubes C
                WHERE j.clube_idClube = C.idClube
                AND J.posicaoJogador = 'zagueiro'
                GROUP BY C.idClube;
                ";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Nome do Clube: '.$row[0].' - Media de Salarios dos Zagueiros: R$'.$row[1],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '4'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT * FROM liga;";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Nome da Liga: '.$row[0].' - Descricao: '.$row[1],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '5'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT J.nomeJogador, J.posicaoJogador, MAX(J.salarioJogador), C.nomeClube
                FROM jogadores J, clubes C
                WHERE C.idClube = J.clube_idClube
                GROUP BY c.idClube;
                ";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Clube: '.$row[2].' - Jogador: '.$row[0].' - Posição: '.$row[1],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '6'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT C.nomeClube, E.nomeEstadio, E.capacidadeEstadio
                FROM Estadio E, Clubes C
                WHERE C.idClube = E.clube_idClube
                GROUP BY C.idClube;";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Clube: '.$row[0].' - Nome Estadio: '.$row[1].' - Capacidade: '.$row[2],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '7'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT C.nomeClube, SUM(J.salarioJogador) AS TOTAL_SALARIO
                FROM clubes C, jogadores j
                WHERE C.idClube = J.clube_idClube
                GROUP BY C.idClube; 
                ";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Clube: '.$row[0].' - Total Salario: R$'.$row[1],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '8'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT nomeClube, AVG (salarioFuncionario)
                FROM clubes, Funcionarios
                WHERE idClube = clube_idClube 
                group by idClube;";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Nome do Clube: '.$row[0].' - Media Salario Funcionarios: R$'.$row[1],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '9'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT C.nomeClube, COUNT(S.nomeSocio), SUM(P.valorPlano)
                FROM clubes C, socios S, planos P
                WHERE C.idClube = S.clube_idClube AND P.idPlano = S.plano_idPlano
                GROUP BY C.idClube; 
                ";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Nome do Clube: '.$row[0].' - Numero de Socio: '.$row[1].' - Total arrecadado com Socio Torcedor: R$'.$row[2],0,2);
        $pdf->Output();
        }
        
        else if($opcao == '10'){
        class PDF extends FPDF{

            function Header(){
                $this->SetFont('Arial','B',15);
                $this->Cell(80);
                $this->Cell(30,10,'Relatorio',1,0,'C');
                $this->Ln(20);
            }

            function Footer(){
                $this->SetY(-15);
                $this->SetFont('Arial','I',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'{nb}',0,'C');
            }
        }

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        $sql = "SELECT C1.nomeClube, C2.nomeClube
                FROM clubes C1, clubes C2, clube_has_partida j
                WHERE j.Clube_Casa = c1.idClube AND
		j.Clube_Visitante = c2.idClube;;
                ";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
            $pdf->Cell(0,10,'Clube Casa: '.$row[0].' - Clube Visitante: '.$row[1],0,2);
        $pdf->Output();
        }
?>