<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 21.07.2019
 * Time: 14:41
 */

class UnknownBreedException extends Exception {}
class UnknownActionException extends Exception {}
class UnableToHuntException extends UnknownActionException {}
class UnableToMakeSoundException extends UnknownActionException {}

abstract class Dog {
    public function sound() {
        echo json_encode( "woof, woof");
    }
    public function hunt() { throw new Exception("Not implemented?"); }
}
// shibu, mops, Dachshund, Plushe Labr, rubber Dachshund
class ShibuInu extends Dog {
    public function hunt() {
        echo "I'm hunting for your new boots, mate!\n";
    }
}
class Mops extends Dog {
    public function hunt() {
        throw new UnableToHuntException("I'm your sofa guard, maaaan");
    }
}
class Dachshund extends Dog {
    public function hunt() {
        echo "Looking for a rabbit in the deep-deep hole!";
    }
}
class PlushLabr extends Dog {
    public function sound() {
        throw new UnableToMakeSoundException("I'm just a toy, GTFO.");
    }
    public function hunt() {
        throw new UnableToHuntException("I'm still just a toy, GTFO.");
    }
}
class RubberDachshund extends Dog {
    public function sound() {
        echo "peep, peep";
    }
    public function hunt() {
        throw new UnableToHuntException("I'm qute useful for your bath, not the hunting adventure");
    }
}
function dog_fabric($breed) {
    switch ($breed) {
        case "shibu-inu":
            return new ShibuInu();
        case "mops":
            return new Mops();
        case "dachshund":
            return new Dachshund();
        case "plush-labr":
            return new PlushLabr();
        case "rubber-dachshund":
            return new RubberDachshund();
        default:
            throw new UnknownBreedException("Unknown breed `".$breed."`");
    }
}

$argv = explode(" ", $_POST['message']);


$breed = $argv[0];
$action = $argv[1];
try {
    $dog = dog_fabric($breed);
    switch ($action) {
        case 'sound':
            $dog->sound();
            break;
        case 'hunt':
            $dog->hunt();
            break;
        default:
            throw new UnknownActionException("unknown action ".$action);
    }
} catch (UnknownBreedException $e) {
    echo "Failed to determine the breed of the dog: ".$e->getMessage()."\n";
    exit(1);
} catch(Exception $e) {
    echo "".$e->getMessage()."\n";
    exit(-1);
}
?>
