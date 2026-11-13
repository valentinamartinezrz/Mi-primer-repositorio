<!DOCTYPE html> 
<html lang="es"> 
<head>     
	<meta charset="UTF-8">     
	<title>Registro de numeros</title> 
</head> 
<body>     
 <h2>REGISTRO DE DOS </h2>      
 <!-- Formulario de captura -->     
 <form method="POST" action="">      
 	<?php     
 		// Ciclo para mostrar tres renglones de captura     
 		for ($i = 0; $i < 3; $i++) {        
 		 echo "Numeros1:";         
 		 echo "<input type='text' name='numeros1[]'>" . " ";              
 		 echo "Numeros2:";         
 		 echo "<input type='number' name='numeros2[]'>" . " ";                    
 		 echo "<br><br>";     } 

 		  ?>      
 		  <!-- Botón para guardar y calcular -->     
 		  <button type="submit" name="guardar" value="guardar">     
 		  Guardar y calcular </button>

 		  <?php     
 		  	// Verificar si se presionó el botón Guardar     
 		  	if (isset($_POST['guardar'])) {         

 		  	// Guardar los datos en tres arreglos         
 		  	$numeros1 = $_POST['numeros1'];         
 		  	$numeros2 = $_POST['numeros2'];                  

 		  	// Declarar los arreglos de resultados         
 		  	$suma = array();         
 		  	$resta = array();         
 		  	$multiplicacion = array(); 
 		  	$division = array();         

 		  	// Ciclo para realizar los cálculos         
 		  	for ($i = 0; $i < 3; $i++) {              

 		  	// Calcular suma            
 		  	$suma[$i] = $numeros1[$i] + $numeros2[$i]; 

 		  	// Calcular resta            
 		  	$resta[$i] = $numeros1[$i] - $numeros2[$i];              

 		  	// Calcular multiplicacion           
 		  	$multiplicacion[$i] = $numeros1[$i] * $numeros2[$i]; 

 		  	// Calcular division
 		  	$division[$i]= $numeros1[$i] / $numeros2[$i];       

 		    }          

 		  	// Imprimir el arreglo de suma        
 		  	echo "<h3>ARREGLO DE SUMA</h3>";          

 		  	for ($i = 0; $i < 3; $i++) {             
 		  	echo $suma[$i] . "<br>";         
 		  	}          

 		  	// Imprimir el arreglo de resta         
 		  	echo "<h3>ARREGLO DE RESTA</h3>";          

 		  	for ($i = 0; $i < 3; $i++) {             
 		  		echo round($resta[$i],2). "<br>";        

 		  	}         

 		 	// Imprimir el arreglo de multiplicacion        
 		  	echo "<h3>ARREGLO DE MULTIPLICACION</h3>";          

 		  	for ($i = 0; $i < 3; $i++) {             
 		  		echo ($multiplicacion[$i]) . "<br>";        

 		  	}         

 		  	// Imprimir el arreglo de division         
 		  	echo "<h3>ARREGLO DE DIVISION</h3>";          
 		  	for ($i = 0; $i < 3; $i++) { 

 		  	 echo round ($division[$i], 2) . "<br>";        

 		  	}          

 		  	 
 		  	 }    


 	      ?>  
</body> 
</html> 