<h3>費式數列</h3>

<?php
$fib=[];

for ($i=0; $i < 41; $i++) { 
    if ($i <2){
        $fib[]=$i;


    }else {
        $fib[]=$fib[$i-2]+$fib[$i-1];
        

    }
    
}

foreach ($fib as $b) {
    echo $b . " , ";
    # code...
}


