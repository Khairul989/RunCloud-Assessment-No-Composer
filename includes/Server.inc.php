<?php 
class Server{
    public $name;
    public $ipAddress;

    public function connectedServer($server, $uname, $plan, $subPlan){
        if($plan == "Basic Plan"){
            if ($server->name == 'Server 1'){
                print "Action: Connecting Server Server 1";
                print ".";
                sleep(1);
                print ".";
                sleep(1);
                print ". \n";
                print"Action => Server Server 1 is connected\n\n";
                print "+========================================= \n";
                print "||User's Name ||".$uname."\n";
                print "========================================== \n";
                print "||Plan        ||".$plan."\n";
                print "========================================== \n";
                print "||Server      ||".$server->name.", [".$server->ipAddress."]\n";
                print "========================================== \n\n";
            }
            else{
                print "Action: Connecting Server Server 2";
                print ".";
                sleep(1);
                print ".";
                sleep(1);
                print ".\n";
                print "Error => User Exceeded Server Limit allowed for Plan Basic Plan !\n\n";
            }
        }
        elseif ($plan == "Pro Plan"){
            print "Action: Connecting Server Server 2";
            print ".";
            sleep(1);
            print ".";
            sleep(1);
            print ". \n";
            print"Action => Server Server 2 is connected\n\n";
            print "+================================================================= \n";
            print "||User's Name ||".$uname."\n";
            print "================================================================== \n";
            print "||Plan        ||".$plan."\n";
            print "================================================================== \n";
            print "||Server      ||".$subPlan[0]->name .", [".$subPlan[0]->ipAddress."] & ".$subPlan[1]->name .", [".$subPlan[1]->ipAddress."]"."\n";
            print "================================================================== \n\n";
        }
        else{
            print "Error => User is not subscribe to any plan !";
        }
    }
}

?>