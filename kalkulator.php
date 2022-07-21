<html> 
   <head> 
    <SCRIPT language="JavaScript" SRC = "java.js">
    </SCRIPT>
      <style>
       
        td{
            width: 60px;
            font-family: sans-serif; 
            font-size: 20px;
            font-weight: bold;
         }
  
         input[type="button"] 
         { 
         height: 80%;
         color: #9AA3AD;
         background-color: #294D4D;
         
         font-weight: bold;
         font-size: 22px;
         width:100% 
         }         
      </style> 
      <link rel="stylesheet" type="text/css" href="apapun.css">
   </head> 
   <body >

    <div style="background-color: grey; height: 30%;width: 50%; margin: auto;">
      <h1 class="kembali">Disini anda dapat menggunakan kalkulator</h1>
      <table align="center"  border="0" width="60% "> 
         <tr>
            <td colspan="4" class="title">Kalkulator</td>
         </tr>
         <tr> 
            <td colspan="3"><input type="text" id="result"/></td> 
            <td><input class="hasil" type="button" value="C" onclick="clr()"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="1" onclick="tambah('1')"/> </td> 
            <td><input type="button" value="2" onclick="tambah('2')"/> </td> 
            <td><input type="button" value="3" onclick="tambah('3')"/> </td>
            <td><input class="kode" type="button" value="+" onclick="tambah('+')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="4" onclick="tambah('4')"/> </td> 
            <td><input type="button" value="5" onclick="tambah('5')"/> </td> 
            <td><input type="button" value="6" onclick="tambah('6')"/> </td> 
            <td><input class="kode" type="button" value="-" onclick="tambah('-')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="7" onclick="tambah('7')"/> </td> 
            <td><input type="button" value="8" onclick="tambah('8')"/> </td> 
            <td><input type="button" value="9" onclick="tambah('9')"/> </td> 
            <td><input class="kode" type="button" value="/" onclick="tambah('/')"/> </td>  
         </tr> 
         <tr> 
            <td><input type="button" value="." onclick="tambah('.')"/> </td> 
            <td><input type="button" value="0" onclick="tambah('0')"/> </td>
            <td><input class="hasil" type="button" value="=" onclick="akhir()"/> </td> 
            <td><input class="kode" type="button" value="x" onclick="tambah('*')"/> </td> 
         </tr> 
      </table>
      </div> 
   </body> 
</html>