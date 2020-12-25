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

                    $array_one = array(

                        "a" => "red",
                        "b" => "green",
                        "c" => "blue",
                        "d" => "purple"
                    );


                    $array_two = array(

                        "a" => "red",
                        "f" => "black",
                        "g" => "yellow"
                    );


                    $array_three = array(

                        "h" => "red",
                        "f" => "black",
                        "g" => "yellow",
                        "d" => "purple"
                    );


                    $associative = array_diff_assoc($array_one, $array_two, $array_three);



                    print("<pre>");
                    print_r($associative);
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
