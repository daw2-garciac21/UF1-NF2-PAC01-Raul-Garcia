<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>N1P1</title>
    </head>
    <body>
		<p>10 Conceptos mas importantes</p>
		<ol>
			<li>Si pones un checkbox, tener en cuenta que el valor lo devuelve como true o false</li>
			<li>en la funcion date hay que saber con que zona horaria trabajas</li>
			<li>una cookie se tiene que grabar en la pagina anterior a donde la grabes, sino se grabará constantemente</li>
			<li>depende de la letra que pongas dentro de date tendras que fijarte por donde empieza y por donde acaba</li>
			<li>tener en cuenta que si quieres poner una comilla dentro tiene que ir con una \ antes para que no se confunda el programa</li>
			<li>al crear una cookie tienes que tener presente cuanto tiempo le vas a dar extra para que no se borre en cuanto la hagas</li>
			<li>si vas a poner una variable por url tener en cuenta que afecta que tenga espacios o no</li>
			<li>si trabajas con el codenvy tener en cuenta que puede que no funcione las url si no las abres en una ventana nueva</li>
			<li>el poder usar ?? para dar otro valor a una variable si no coincide con el que querias</li>
			<li>el urlencode codifica una variable como una cadena para poder pasar datos de una pagina a otra</li>
		</ol>
            <?php
	    echo "Nota del documento: ";
            echo rand(1, 10);
	    echo "  Nota del profesor: ";
            echo rand(1, 10);
	    echo "  Mi nota: ";
            echo rand(1, 10);
            ?>
		<p></p>
    </body>
</html>