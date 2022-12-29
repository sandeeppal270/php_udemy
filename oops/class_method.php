<?php
class Cars{
    function greeting(){  

    }
    function greeting2(){  

    }
    function greeting3(){  

    }

}
$the_method = get_class_methods('Cars');
foreach($the_method as $method){
    echo $method."<br>";

}




?>