<?php

class CreditCard extends User{
    public $card_name;
    public $card_lastname;
    public $month_deadline;
    public $expiry_year;
    // public $number;

    public function __construct(String $name, String $lastname,  String $date_of_birdth, String $email, String $street_address, String $card_name, String $card_lastname, int $month_deadline, int $expiry_year) #$number )
    {
        parent::__construct($name, $lastname, $date_of_birdth, $email, $street_address);
        $this->card_name = $card_name;
        $this->card_lastname = $card_lastname;
        $this->month_deadline = $month_deadline;
        $this->expiry_year = $expiry_year;
        // $this->number = $number;
    }

    public function checkCardExpiration(){
        $deadline_card = DateTime::createFromFormat('m-Y', $this->month_deadline . '-' . $this->expiry_year );
        $current_date = new DateTime();

        if( $deadline_card < $current_date){
            echo'La carta è valida!';
            return true;
        } else {
            echo 'La carda non è valida!';
            return false;
        }
    }
    
}

$now = new DateTime();

var_dump($now);