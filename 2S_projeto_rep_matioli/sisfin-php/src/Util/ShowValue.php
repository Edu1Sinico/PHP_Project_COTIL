<?php

namespace Sisfin\Util;

function show_value($campo, $dados){
    if(key_exists($campo, $dados)){
        if(!empty($dados[$campo]['value'])){
            return $dados[$campo]['value'];
        } else {
            return '';
        }
    } else {
        return '';
    }
}