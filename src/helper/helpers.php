<?php


function flash($title = null, $message = null)
{
    $flash = app('InStore\Flashify\Model\Flash');

    if (func_num_args() == 0){
        return $flash;
    }

    return $flash->info($title, $message);
}