<?php
namespace Sisfin\Util;

class ShowError
{

    public static function GetField($campo, $errors=[]): string
    {
        if (key_exists($campo, $errors)) {
            if (!empty($errors[$campo])) {
                return '<span class="text-danger"><small><i>' . $errors[$campo] . '</i></small></span>';
            } else {
                return '';
            }
        } else {
            return '';
        }
    }
}