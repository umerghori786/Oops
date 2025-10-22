<?php 



 /*abstraction
 * do not make object of abstract class
 * use for inforcement in child class	
 *made by umer
 */
/*
 abstract class base {
 	public function getmonthlysalarty(){
 		echo "getmonthlysalarty";
 	}

 	public abstract function hourly();

 }
 class contract extends base{
 	public function contractA(){
 		echo "contract" ; echo "<br>";
 	}

 	public function hourly(){
 		echo "this is abstract by contract";
 	}
 }
 class permanent extends base{
 	public function permanentA(){
 		echo 'permanent';
 	}
 	public function hourly(){
 		echo "this is abstract by permanent";
 	}
 }

 $contract = new contract();
 $permanent = new permanent();
 

 $contract->getmonthlysalarty();
 $permanent->getmonthlysalarty();
 $contract->hourly();
 $permanent->hourly();

 */

 /*interface
 *only difine function in here not declare.. uses for ecforcement as abstraction
 *only iclude public function
 *one class inherit more then one interface
 *only include method not properties	
 */

/*
 interface abc{
 	public function test(); //only declare not initiate just like abstract
 }
 interface cde{
 	public function best();
 }
 class xxx implements abc , cde{
 	public function test(){
 		echo "interface test";
 	}
 	public function best(){
 		echo "interface best";
 	}
 }

 $obj = new xxx;
 $obj->best();
 */

 /*static Members
 *not linked with object
 *use self instead of object and use parent in chlid class
 use resolation operator :: to call method or prop
 *made by umer
 */

/*
 class test {
 	public static $prop = 'properties from static';
 	public static function abc(){
 		echo self::$prop;
 	}

 }
 class best extends test{
 	public function cde(){
 		 echo parent::$prop;
 	}
 }

 $obj = new best();
 $obj->cde();

 */

 /*trait
 * trail is like clas just change class word to trait
 use multiple inheritence
 made by umer	
 */

trait abc{
	public function test(){
		echo 'test from trait';
	}
	public function best(){
		echo "best from trait";
	}
}
trait xxx{
	public function second(){
		echo "comes from second trait";
	}
}

 class one{
 	use abc, xxx;
 }
 class two extends one{

 }
 class three{
 	use xxx;
 }

$obj = new three();
$obj->second();


//confilct

    // trait testone {
    //     public function abc(){
    //         echo "helll";
    //     }
    // }
    // trait testtwo{
    //     public function abc(){
    //         echo "testtwo";
    //     }
    // }

    // class abc {
    //     use testone, testtwo{
    //         testone::abc insteadof testtwo;
    //     }
    // }

    // $x = new abc();
    // $x->abc();

/*
*typehiting
*made by Umer
*/

/* interface a{
    public function abc();
}

 class typetest implements a{
    public function abc(){
        echo "<br> hi i am type hinting from typetest";
    }
 }

 class typetest2 implements a{
    public function xyz(){
        echo "hello i am from second class";
    }
    public function abc(){
        echo "<br> hi i am type hinting from typetest2";
    }
 }

 function type($obj){
    $obj->abc();
 }

 $obj = new typetest();
 type($obj);  */

 /*
 * dependency injection // 
 *thrugh constructor we take object so our class did not depend on other class
 */

/*
class logger{


    public function log($msg){
        echo "<br>logging message $msg";
    }

    
}

class testlogger{
    private $logger;
    public function CreateUser(){
        $this->logger->log('user created');
    }
    public function DeleteUser(){
        $this->logger->log('user deleted');
    }
    public function UpdateUser(){
        $this->logger->log('user updated');
    }
    public function __construct(logger $obj){
        $this->logger = $obj;
    }

}


$logger = new logger();
$testobj = new testlogger($logger);
$testobj->UpdateUser();

*/

