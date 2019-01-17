<?php
namespace aitsyd;
class Account extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function signUp($username,$email,$password){
        $errors = array();
        $validuser = Validator::username($username);
        if($validuser['success'] == false){
            $errors['username'] == $validuser['errors'];
        }
        //validate email
        $validemail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($validemail == false){
            $errors['email'] = array('invalid email');
        }
        //validate password
        
        
    }
}

?>