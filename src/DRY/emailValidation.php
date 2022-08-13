<?php

class emailValidation
{
    protected $isLoggded = false;

    // this is a DRY example, because in here, we haeve knowledge repetition, and CODE repetition.

    public function login($email, $password)
    {
        if (!$email) return false;
        if (gettype($email) != string) return false;
        if (!$password) return false;
        if (strlen($password) < 8) return false;
        
        $this->isLoggded = true;
        return 'Welcome user of this soooooooooooooooooooooooooooo secure website :)';
    }

    public function logoff()
    {
        $this->isLoggded = false;
        return 'Bye bye user!!!!!!!!!!';
    }

    public function getPrivateInfos($email, $password)
    {
        if(!$this->isLoggded) return false;

        if (!$email) return false;
        if (gettype($email) != string) return false;
        if (!$password) return false;
        if (strlen($password) < 8) return false;

        return 'Private info about the user';
    }
}