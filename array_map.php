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
    			<h2> <?php echo "PHP Array-Function" ?> </h2>
    		</section>


    		<section class="maincontent">
                

		    	<?php

                    /*

		    		function myfunction($value){
                        return ($value * $value);
                    }


                    $number = array("1", "2", "3", "4", "5");

                    $result = array_map("myfunction", $number);

                    print("<pre>");
                    print_r($result);
                    print("</pre>");

                    */


                    function myfunction($value){

                        $v = strtoupper($value);
                        return $v;
                    }

                    $name = array(

                        "model" => "fazzer",
                        "type"  => "bike"
                    );

                    $result = array_map("myfunction", $name);

                    print("<pre>");
                    print_r($result);
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
