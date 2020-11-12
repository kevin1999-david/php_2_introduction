<?php
class LoginModel
{
    public function verificarLogin($usuario, $clave)
    {
        if ($usuario == "luis" && $clave == "1234") {
            return "menu.html";
        } else {
           return "login.html";
        }
    }
}
