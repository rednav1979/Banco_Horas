<?php
session_start();
include('verifica_login.php');
?>
<?php
$usuario_cadastro = $_SESSION['usuario'];
print '<p>';
print 'Olá: ';
print $usuario_cadastro;
print '<p>';
print 'Seja Bem Vindo(a).';

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
    <meta http-equiv="Content-Type" content="text/html;/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style3.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    
  
</head>
<body onload="aviso()">
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-Sheet">
                
        
                                       
                        <h1 id="name-text" class="art-Logo-name"><a href="#">CONTROLE DE BANCO DE HORAS </a></h1>
                        
                        <div id="slogan-text" class="art-Logo-text">TECNOLOGIA DA INFORMACAO</div>
                        
                    </div>
                </div>
                <div class="art-contentLayout">                    
                                              
                        
                                  
                                         
                                        </h2>
                                     Hoje, 
                                        

<script language=javascript>
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=1000,height=600,scrollbars=YES")
}


</script> 
                                        
                                        <script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Ter�a - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " S�bado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Mar�o " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
// -->
</script>


 


    <script>  

    
function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
	
function Mascara_Hora(hora){ 
var hora01 = ''; 
hora01 = hora01 + hora; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].hora_inicio.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora(); 
} 
} 
           
function Verifica_Hora(){ 
hrs = (document.forms[0].hora_inicio.value.substring(0,2)); 

min = (document.forms[0].hora_inicio.value.substring(3,5)); 
               
               
estado = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado = "errada"; 
} 
               
if (document.forms[0].hora_inicio.value == "") { 
estado = "errada"; 
} 



if (estado == "errada") { 
alert("Por Favor, Verifique os valores de Hora Inicial !"); 
document.forms[0].hora_inicio.focus(); 
} 
} 



function Mascara_Hora2(Hora){ 
var hora01 = ''; 
hora01 = hora01 + Hora; 
if (hora01.length == 2){ 
hora01 = hora01 + ':'; 
document.forms[0].hora_final.value = hora01; 
} 
if (hora01.length == 5){ 
Verifica_Hora2(); 
} 
} 
           
function Verifica_Hora2(){ 
hrs = (document.forms[0].hora_final.value.substring(0,2)); 

min = (document.forms[0].hora_final.value.substring(3,5)); 
               
               
estado2 = ""; 
if ((hrs < 00 ) || (hrs > 23) || ( min < 00) ||( min > 59)){ 
estado2 = "errada"; 
} 
               
if (document.forms[0].hora_final.value == "") { 
estado2 = "errada"; 
} 



if (estado2 == "errada") { 
alert("Por Favor, Verifique os valores de Hora Final!"); 
document.forms[0].hora_final.focus(); 
} 
} 
function mascaraData(campoData){
              var data = campoData.value;
              if (data.length == 2){
                  data = data + '/';
                  document.forms[0].data.value = data;
      return true;              
              }
              if (data.length == 5){
                  data = data + '/';
                  document.forms[0].data.value = data;
                  return true;
              }
         }
//-->
</script>
                                       

<br><br>
<br>



 <?php

include "sql.php";
       
if(isset($_POST['done'])){   

    $nome = $_POST['nome'];
	$hora_inicio = $_POST['hora_inicio'];
    $hora_final = $_POST['hora_final'];
	$descricao = $_POST['descricao'];
	$tipo = $_POST['tipo'];
	$faixa = $_POST['faixa'];
	$data = $_POST['data'];
	$validar_data =$data;	
	$data_atual = date('d/m/Y', strtotime('-3 days'));
	
	$data_atual = DateTime::createFromFormat('d/m/Y', $data_atual);
	$validar_data = DateTime::createFromFormat('d/m/Y', $validar_data);
	if ($validar_data <> ''){
	
	if ($validar_data < $data_atual){		
	print'<font color=red size=4>';
	echo "<script>alert('DATA NÃO PODE SER MENOR QUE 3 DIAS, VERIFIQUE SE A DATA ESTA NO FORMATO DD/MM/AAAA EX: 01/01/2017!');</script>";
	   
	   $nome='';
	   print '</font>';
    }
}	
	
     	
	// AUDITORIA 
    $ip = $_SERVER['REMOTE_ADDR'];
    $usuario = $_SESSION['usuarioNome'];    
	

    

	
 

    if(empty($nome) || empty($hora_inicio) || empty($hora_final)|| empty($descricao)| empty($data)){

        $erro = "Atenção, você deve preencher todos os campos ou o nome de usuario não pode ser recuperado";
			
		}else{        

       $sql = mysql_query("INSERT INTO `banco_horas`(`data`,`nome`, `hora_inicio`, `hora_final`, `descricao`, `horas_baixa`,`usuario`,`faixa`,`ip`,`data_criacao`) VALUES ('$data','$nome', '$hora_inicio', '$hora_final','$descricao','$tipo','$usuario','$faixa','$ip',now())") or die(mysql_error());

            if($sql){

                $erro2 = "Dados cadastrados com sucesso!";
	
				

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }

    }

}

?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
.campo{
width:400px;
}
</style>



</head>



<form name="form1" action="init.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}


if(isset($erro2)){

    print '<div style="width:80%; background:green; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro2.'</div>';

}

?>
<blockquote>
<table border="0" >

<thead>

<tr>

<th colspan="2">.:: CADASTRO DOS DADOS::.</th>
</tr>

</thead>

<tbody>

<tr>

<td width="20%">Nome Completo:</td>
<td><select name="nome" class="campo" id="nome">
<option>--------------</option>
<option>T.I</option>
<option>--------------</option>
<option>VANDERLEI</option>
<option>ESTAGIARIO</option>

<!-- <option>ALINE</option> -->
<option>--------------</option>

</select>
</td>
</tr>

<tr>

<td>Hora Inicio:</td>

<td><input name="hora_inicio" type="text" class="campo"  maxlength="5" OnKeyUp="Mascara_Hora(this.value)" id="hora_inicio" /></td>

</tr>
<tr>

<td>Hora Final:</td>

<td><input name="hora_final" type="text" class="campo" maxlength="5" OnKeyUp="Mascara_Hora2(this.value)" id="hora_final" /></td>

</tr>

<tr>

<tr>

<td>Data:</td>

<td><input name="data" type="text" class="campo"  id="data" OnKeyUp="mascaraData(this);" maxlength="10" /><FONT COLOR=RED>MÁX. 3 DIAS ATRAS</font></td> 

</tr>

<tr>

<td>Observações:</td>

<td><input name="descricao" type="text" class="campo" onkeyup="maiuscula(this)" id="descricao" /></td>

</tr>

<tr>

<td>Tipo de Registro:</td>

<td><select name="tipo">
	
		<option>BANCO_HORAS</option>
		<option>FOLGA</option>
		      
</select>
 </td>

</tr>

<td><input type="submit" value="Cadastrar" onclick="if(!confirm('Tem certeza que deseja Cadastrar?'))return false;" /><input type="hidden" name="done"  value="" /></td>



</tr>

</tbody>

</table>

</form>

<hr>

<?php 	
	
	if (trim($usuariosql) == ''){		
		echo '<li><a href ="resumotecnologia.php">RESUMO T.I</a></li>';
		echo '<li><a href ="detalhamento_geral.php">DETALHAMENTO DAS HORAS</a></li>';	
        echo '<li><a href ="lista_registro.php">LISTAR</a></li>';	
		
    }
?>

</blockquote>


<!-- Rounded switch -->
<label class="switch" onClick="window.location.href='new/init.php';">
  <input type="checkbox">
  <span class="slider round"></span>
</label>New Visual



</body>
</html>


