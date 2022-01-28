<?php
    $hour = $_GET [ 'hour' ];
    $minutes = $_GET [ 'minutes' ];
    $selector = $_GET [ 'selector' ];
    if ($minutes < '10'){
        $minutes = '0' .$minutes;
    }
    if ($hour === '12' && $selector === 'am'){
        $hour = '0';
        if ($hour < '10'){
            $hour = '0' .$hour;
        }
        echo "La hora ingresada en formato militar es <b>$hour:$minutes</b>";
    } elseif ($selector === 'pm' && $hour <= '11'){
        $hour = '12' + $hour;
        echo "La hora ingresada en formato militar es <b>$hour:$minutes</b>";
    } else {
        if ($hour < '10'){
            $hour = '0' .$hour;
        }
        echo "La hora ingresada en formato militar es <b>$hour:$minutes</b>";
    }
