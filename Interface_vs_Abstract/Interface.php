<?php

interface

function login($provider){
    if($provider)
        $provider->authorize();
    
}