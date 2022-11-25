<!DOCTOTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <title>MGEDynamics</title>
  </head>
  <body>
  	<header>
  		<h1> MGE Dynamics </h1>
  		<nav>
  			<ul>
  				<li> <a href="index.html"> Home </a> </li>
  				<li> <a href="simulation.html"> Simulation </a> </li>
  				<li> <a href="representation.html"> Graphical representation </a> </li>
  				<li> <a href="mailto:remi.tuffet@univ-lyon1.fr"> Contact </a> </li>
  			</ul>
  		</nav>	
  		<h1> </h1>
  	</header>
    
	<h2> Simulation </h2>
	<div id="conteneur2">
    	<h3> Simulation parameters </h3>
    	<div class="contenu">
    	<h4>Stress parameters: </h4>
    	<form action="/simulation3" method="post">

		<fieldset>
    		<legend>SNP</legend>

   		 <div>
      		<input type="radio" id="no" name="snp" value="no"checked>
      		<label for="no">No</label>
    		</div>

    		<div>
     		<input type="radio" id="yes" name="snp" value="yes">
      		<label for="yes">Yes</label>
    		</div>
		</fieldset>
		
 
  		<div class="button">
        	<button type="submit">Start simulation</button>
    		</div>
	</form>
	</div>
    	</div>
    	
    	<footer>
    		<p> Footer... </p>
    	</footer>
 </body>
</html>
