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

                    $arr_one = array("Dog", "Cat");

                    array_multisort($arr_one);


                    print("<pre>");
                    print_r($arr_one);
                    print("</pre>");

                    */


                    $arr_one = array("Dog", "Cat");
                    $arr_two = array("Bear", "Horse");


                    array_multisort($arr_one, SORT_DESC, $arr_two, SORT_ASC);


                    print("<pre>");
                    print_r($arr_one);
                    print("</pre>");

                    print("<pre>");
                    print_r($arr_two);
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
