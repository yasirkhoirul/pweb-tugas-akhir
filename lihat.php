<!DOCTYPE html>
<html>
<head>
  <title>lihat</title>
  <link rel="stylesheet" type="text/css" href="apapun.css">
</head>
<body>

<div class="apapun" style="text-align: center;">
  <div class="navbar" style="text-align: center;">

    <a href="#" class="logo"><img src="images/asd.png" width="50px" height="50px"></a>
    <h3 align="center" style="color: black">HI!</h3>
    <div class="menu" >
      <ul class="list">  
      
        <?php
        echo "<a href='Kalkulator.html' style='color: black ;''>Kalkulator</a>"
        ?>
      

      </ul>
    </div>
  </div>

<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<table border='0'>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    
    echo "<tr><td>Nama</td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat</td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Email </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}
echo "</table>";

?>

    <div class="warna" ">

        <?php
        $hari = date("d");
        $bulan = date("m"); 
        $tahun = date("Y");
        echo "<h2>Tanggal saat ini</h2>";
        $jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
        ?>
      

        <?php
        switch ($bulan){
            case 1 : $nmbulan = "Jan"; break;
            case 2 : $nmbulan = "Feb"; break;
            case 3 : $nmbulan = "Mar"; break;
            case 4 : $nmbulan = "Apr"; break;
            case 5 : $nmbulan = "Mei"; break;
            case 6 : $nmbulan = "Jun"; break;
            case 7 : $nmbulan = "Jul"; break;
            case 8 : $nmbulan = "Agu"; break;
            case 9 : $nmbulan = "Sep"; break;
            case 10 : $nmbulan = "Des"; break;
            case 11 : $nmbulan = "Okt"; break;
            case 12 : $nmbulan = "Nop"; break;
        }
        echo "<center><h1>$nmbulan $tahun</h1></center>";
        ?> <br>

        <table style="border:1px solid black" align="center" cellpadding="10">
            <tr bgcolor="white">
            <td align="center"><font color="#FF0000">Min</font></td>
            <td align="center">Sen</td>
            <td align="center">Sel</td>
            <td align="center">Rab</td>
            <td align="center">Kam</td>
            <td align="center">Jum</td>
            <td align="center">Sab</td>
            </tr>

        <?php
            $s = date("w",mktime(0,0,0,$bulan,1,$tahun));
            for ($ds=1; $ds<=$s; $ds++){
                echo " <td></td>";
            }

            for($d=1; $d<=$jumlahhari; $d++){
              
                if (date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 0) {
                    echo "<tr>";
                }
                $warna="#000000"; 

                
                if(date("l",mktime(0,0,0,$bulan,$d,$tahun)) == "Sunday"){
                    $warna="#FF0000";
                }
                
                
                    echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";
            
                
                if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 6){
                    echo "</tr>";
                }
            }
        echo"</table>";
        echo "<a class='kembali' href='index.html' class> Kembali </a>";
        ?>
    </div>


</div>
</body>
</html>