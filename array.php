<!docttype html>
<html>
    <head>
        <title> PHP Syntax </title>

        <style>
        	.phpcoding{width:900px; margin:0 auto; background:grey; min-height: 400px;}

        	.headerportion, .footerportion{background:#444; color:white; text-align: center; padding: 20px;}

        	.headerportion h2, .footerportion h2{margin:0;}

        	.maincontent{min-height: 400px; padding: 20px;}

             p{margin: 0}

        </style>

    </head>


    <body>

    	<div class ="phpcoding">


    		<section class="headerportion">
    			<h2> <?php echo "PHP Fundamental" ?> </h2>
    		</section>


    		<section class="maincontent">
                

		    	<?php

                    /*

		    		$dept = array("SE", "CSE", "CSSE", "CIS", "BBA", "MBA");

                    $length = count($dept);
                    // echo $length;

                    for($i = 0; $i < $length; $i++){
                        echo $dept[$i];
                        echo "<br/>";
                    }

                    */


                    /*

                    $name = array("Sami" => "25", "Tusher" => "18", "Tanvir" => "27");
                    $length = count($name);
                    
                    foreach($name as $key=>$values){
                        echo "Name : ".$key. ", Age : ".$values;
                        echo "<br/>";
                    }

                    */


                    $car = array(

                            array("toyota", "volvo", "audi"),
                            array("pulser", "discover", "tvs"),
                            array("r15", "v2", "v3"),
                            array("hunk", "glamer", "repsol")
                    );

                    echo $car[3][2];

    			?>

    		</section>


        	<section class="footerportion">
                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        	</section>


    	</div>


    </body>

</html>
