<?php
    class User {
        public $name;
        public $plan;
        public $subPlan;

        public function __construct(){
            $this->subPlan = array();
        }

        public function subscribe($obj){
            if($obj == new BasicPlan()){
                $this->plan = "Basic Plan";
            }
            else{
                $this->plan = "Pro Plan";
            }
            print $obj->subscribe($obj);
        }
        public function connectServer($server){
            array_push($this->subPlan, $server);
            print $server->connectedServer($server, $this->name, $this->plan, $this->subPlan);
        }
        public function unsubscribe(){
            $this->plan = "Unsubscribe";
            print "Action: Canceling Subscription to Plan Pro Plan";
            print ".";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            print ". \n\n";
            print "You have successfully unsubscribed from plan Pro Plan.\n";
            sleep(1);
            print "Thank you for using RunCloud\n\n";
        }
    }

    class BasicPlan extends User {
        public function subscribe($obj)
        {
            print "Action: Subcsribing to Plan Basic Plan";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            print "\n";
            print "Subcribed to plan Basic Plan\n\n";
        }
    }

    class ProPlan extends User {
        public function subscribe($obj)
        {
            print "Action: Subcsribing to Plan Pro Plan";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            sleep(1);
            print ".";
            print "\n";
            print "Subcribed to plan Pro Plan\n\n";
        }
    }
?>