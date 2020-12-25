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
                    $bike = array("a" => "pulser", "b" => "apache", "c" => "hunk", "d" => "fazzer");

                    array_shift($bike);



                    print("<pre>");
                    print_r($bike);
                    print("</pre>");
		    		*/


                    $bike = array("0" => "pulser", "1" => "apache", "2" => "hunk", "3" => "fazzer");

                    array_shift($bike);



                    print("<pre>");
                    print_r($bike);
                    print("</pre>");

                   

    			?>

    		</section>


        	<section class="footerportion">
                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        	</section>


    	</div>


    </body>

</html>
