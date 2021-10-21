<?php
    class Human {
        // protected variable
        protected $genders = array("Male", "Female", "Other");
        
        // protected function for humans features
        protected function getFeatures($gender) {
            if($gender == "Male") {
                echo "Men will be Men<br>";
            }
            else if($gender == "Female") {
                echo "Women's mind is a maze.<br>";
            }
            else if($gender == "Other") {
                echo "All are born equal.<br>";
            }
        }
        
    }
    
    // subclass of the above class
    class Male extends Human {
        protected $gender = "Male";
        
        // public function to print Male features
        public function getMaleFeatures() {
            // calling the protected getFeatures() method of class Human
            $this->getFeatures($this->gender);
        }

        public function set_gender($g) {
            // calling the protected getFeatures() method of class Human
            $this->gender=$g;
        }
        

    }
    
    // object of Human class
    $human = new Human();
    // object of Male class
    $male = new Male();
    echo $male->getMaleFeatures();    
    $male->set_gender('Female');
    echo $male->getMaleFeatures();

    $male->set_gender('Other');
    echo $male->getMaleFeatures();

?>