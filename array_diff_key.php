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

                    $array_one = array(

                        "a" => "red",
                        "b" => "green",
                        "c" => "blue",
                        "d" => "purple"
                    );


                    $array_two = array(

                        "a" => "red",
                        "c" => "blue",
                        "d" => "yellow"
                    );


                    $array_three = array(

                        "a" => "red",
                        "z" => "blue",
                        "d" => "yellow"
                    );



                    $key = array_diff_key($array_one, $array_two, $array_three);



                    print("<pre>");
                    print_r($key);
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
