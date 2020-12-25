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

                    $names = array("a"=>"Sami", "b"=>"nadim", "c"=>"hannan", "d"=> "rasel");


                    if(isset($_POST['text'])){

                        global $txt;
                        $txt = $_POST['text'];
                        // echo $txt;
                        $result = array_search($txt, $names);
                        echo "searched by $txt and key is $result";

                    }

    			?>



                <form action =" " nmethod = "POST"> 

                    <input type ="text" name ="text" value ="<?php global $txt; echo $txt; ?>"/>
                    <input type ="submit" value ="Submit"/>

                </form>

                


    		</section>
            


        	<section class="footerportion">
                <p> &copy; <?php echo date("Y") ?> Samiul Sheikh </p>
        		<h2> <?php echo "Presented By - Samiul Sheikh" ?> </h2>
        	</section>


    	</div>


    </body>

</html>
