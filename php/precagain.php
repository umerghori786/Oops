<?php

/*
*
*selction sort
*/


$request_type = 'product'; 
switch ($request_type) {
    case 'user':
        $model = 'user';
        break;
    case 'product':
            $model = 'product';
            break;    
    default:
        $model = 'video';
        break;
}
echo $model ."<br>";


trait A{

    public function helo()
    {
        echo "helo form A trait. \n";
    }
}
trait B{

    public function helo()
    {
        echo "helo form B trait. \n";
    }
}

class test{
    use A , B{

        A::helo insteadof B;
        B::helo as newhelo;
    }

}

$obj = new test();
echo $obj->helo();
echo $obj->newhelo();