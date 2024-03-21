<?php
namespace athiq\password_generator;

use Illuminate\Support\Facades\Hash;

class PasswordGenerate{

    private $alpha='abcdefghijklmnopqrstuvwxyz';
    private $num='0123456789';
    private $specialChar='!@#$%^&*()_+';
    private $password='';

    public function generate($len=8,$numbers=true,$specialChar=true)

    {

          $fetch=$this->alpha.strtoupper($this->alpha);
          if($numbers)
          {
            $fetch.=$this->num;
          }
          if($specialChar)
          {
            $fetch.=$this->specialChar;
          }

          for($i=0;$i<$len;$i++)
          {
            $this->password.=$fetch[mt_rand(0,strlen($this->password)-1)];
          }

          return $this;
    }

    public function makeHashing()
    {
       return   Hash::make($this->password);
    }



}


?>
