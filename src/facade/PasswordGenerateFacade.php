<?php
namespace athiq\password_generator\Facade;

use Illuminate\Support\Facades\Facade;

class PasswordGeneratorFacade extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'password_generator';
    }
}

?>
