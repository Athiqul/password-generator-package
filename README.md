# PHP Password Generator Package

This PHP package provides functionality to generate strong and secure passwords with various customizable options.

## Installation

You can install this package via Composer. Run the following command in your terminal:

```bash
composer require athiq/password_generator
```

## Usage

```php
<?php

require 'vendor/autoload.php';

use athiq\PasswordGenerator\PasswordGenerator;

// Create an instance of PasswordGenerator
$passwordGenerator = new PasswordGenerator();

// Generate a password of default length (8 characters)
$password = $passwordGenerator->generatePassword();
echo "Generated Password: " . $password . "\n";

// Generate a password of specific length
$password = $passwordGenerator->generatePassword(12);
echo "Generated Password (Length 12): " . $password . "\n";

// Generate a password with uppercase, lowercase, digits, and special characters
$password = $passwordGenerator->generatePassword(8, true, true, true, true);
echo "Generated Password (With Uppercase, Lowercase, Digits, and Special Characters): " . $password . "\n";
```

## Options

- `length`: Integer, the length of the generated password (default is 8).
- `includeUppercase`: Boolean, whether to include uppercase letters in the generated password (default is true).
- `includeLowercase`: Boolean, whether to include lowercase letters in the generated password (default is true).
- `includeDigits`: Boolean, whether to include digits in the generated password (default is true).
- `includeSpecialChars`: Boolean, whether to include special characters in the generated password (default is false).

## License

This package is licensed under the MIT License. Feel free to use it in your projects!
