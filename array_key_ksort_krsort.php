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
    			<h2> <?php echo "PHP Array_Function" ?> </h2>
    		</section>


    		<section class="maincontent">
                

		    	<?php

                    /*

		    		$names = array("sami", "bappi", "polash", "babu");

                    next($names);
                    echo "the current position key is : ".key($names);

                    */


                    $coders = array(
                        "sami"   => "24",
                        "bappi"  => "26",
                        "polash" => "20",
                        "babu"   => "18"
                    );

                    // accending order
                    // ksort($coders);

                    // decending order
                    krsort($coders);

                    foreach($coders as $name => $age){
                        echo "Name : ".$name.", Age : ".$age."<br>";

                    }

                    
    			?>

    		</section>


        	<section class="footerportion">
                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        	</section>


    	</div>


    </body>

</html>
