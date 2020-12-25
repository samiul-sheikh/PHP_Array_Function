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
		    		//apply in index array

                    $user = array("name", "age");

                    if(array_key_exists(2, $user)){
                        echo "key already exist";
                    }
                    else{
                        echo "key does not exist";
                    }

                    */


                    //apply in associative array

                    $user = array(

                        "name" => "sami",
                        "age"  => "26"
                    );

                    if(array_key_exists("name", $user)){
                        echo "key already exist";
                    }
                    else{
                        echo "key does not exist";
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
