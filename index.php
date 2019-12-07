<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
	
        <meta charset="UTF-8">
		
        <title></title>
		
    </head>
	
    <body>
       
        <h1> Em desenvolvimento ... Projeto 02/2019   </h1>  
          
        <?php
        
                
			echo '<br>' ;
		  
			include_once('Funcoes/Funcoes.php');
			
		  
			echo decodadata("2019-11-23");
			
			echo '<br>';
			
			echo encodadata("23/11/2019");
			   
					
			echo '<br>' ;
		  
		     
        ?>
		  

		  <form action="action.php" method="post">
		   
			<p>Your name: <input type="text" name="name" /></p>
			
			<p>Your age: <input type="text" name="age" /></p>
			
			<p><input type="submit" /></p>
			
		   </form>
			
      
        
        
    </body>
	
</html>
