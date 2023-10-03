<?php 
function generatePassword($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = '';
    
    for ($i = 0; $i < $length; $i++)
    {
        $randomChar = $chars[rand(0, strlen($chars)-1)];
        $password .= $randomChar;
    }

    return $password;

}
$passwordLength = 12;

$generatedPassword = generatePassword($passwordLength);
echo "Generated Password: $generatedPassword\n";

?>

