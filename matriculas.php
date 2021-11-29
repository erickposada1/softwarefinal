<?php
include ('menu.html')
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Guanenta</title>    
    <link rel="stylesheet" href="styles/estiloform.css" type="text/css">
</head>
<body>
    
<div class="contenedor">

<div class="contenderototal-form">
			
		<div class="contenedor-formulario">
			<h1 id="nombreform"> Matricula Estudiante</h1>
			
			
			<form  method="post" name="formu" >
		<p><label> Nombre :     </label> <input id="nombre" name="nombre" type="text" required ></p>
		<p><label> Apellido :    </label>  <input type="text" name="apellido"></p>
		<p><label> Correo :     <input type="text" name="correoestudiante"> </label></p>
		<p><label> Celular:     <input type="tel" id="celular" name="celular"
       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
       required maxlength="16">

<small>Formato: +57-123-456-7890</small>	 </label></p>	 
		<p><label> Nombre Acudiente :      <input type="text" name="nameacudiente"> </label></p>
        <p><label> Telefono Acudiente :      <input type="tel" name="phoneacudiente"> </label></p>
								<p><label id="grado">Escoja un grado:
 <select name="grado[]" id="grade">
        <option value="Sexto">Sexto</option>
        <option value="Septimo">Septimo</option>
        <option value="Octavo">Octavo</option>
        <option value="Noveno">Noveno</option>
        <option value="Decimo">Decimo</option>
        <option value="Undecimo">Undecimo</option>

        </select>
</label></p>



		</form>
			
		</div>
		
		
			</div>


</body>
</html>