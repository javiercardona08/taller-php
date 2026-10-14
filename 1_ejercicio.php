<?php

$A = 1;
$B = 5;
$C = 9;

if ($A == $B && $C == $B) {
    echo "Todos los numeros son iguales";
} else if ($A == $B) {
        if ($A > $C) {
            echo "Las variables A y B son iguales y C es el menor";
        } else {
            echo "Las variables A y B son iguales y C es el mayor";
        }
    }else if ($B == $C ) { 
        if ($A > $B) {
            echo "Las variables B y C son iguales y A es mayor";
        }else {
            echo "Las variables B y C son iguales y A es menor";
        }
    }else if ($A == $C) { 
        if ($B > $A) {
            echo "Las variables A y C son iguales y B es mayor";
        }else {
            echo "Las variable A y C son iguales y B es menor";
        }
    }

if ($A != $B && $B != $C && $C != $A) { 
    if($A > $C && $A > $B) {
        if($B > $C){
            echo "La variable A es la mayor, B es la del medio y C es la menor";
        }else {
            echo "La variable A es la mayor, C es la del medio y B es la menor";
        }
    }else if ($B > $C) {
        if($A > $C) {
            echo "La variable B es la mayor, A es la del medio y C es la menor";
        }else {
            echo "La variable B es la mayor, C es la del medio y A es la menor";
        }
    }else if ($C > $B) {
        if($A > $B){
            echo "La variable C es la mayor, A es la del medio y B es la menor";
        }else {
            echo "La variable C es la mayor, B es la del medio y A es la menor";
            }
    }
}