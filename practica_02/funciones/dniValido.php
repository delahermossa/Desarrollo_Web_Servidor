<?php
 

function comprobarDni($dni)
    {

        $dniValido = true;
        $digitos = "0123456789";
        $letras = "abcdefghijklmnnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVW";
        $numeros = "";
        $hay9Caracteres = true;
        $hay8CaracteresIniciales = true;
        $primeros8Numeros = true;
        $hayUnaLetra = true;

        if (strlen($dni) != 9) {
            $hay9Caracteres = false;
        }
        
        if (strlen($dni) - 1 != 8) {
            $hay8CaracteresIniciales = false;
        }
        
        for ($i = 0; $i < strlen($dni) - 1; $i++) {
            if (!str_contains($digitos, $dni[$i])) {
                $primeros8Numeros = false;
            }
            $numeros .= $dni[$i];
        }
      
     
        
        if ($hay9Caracteres && $hay8CaracteresIniciales && $primeros8Numeros) {
            $numeros = (int)$numeros;
            $resto = $numeros % 23;
            $letra = match ($resto) {
                0 => "T",
                1 => "R",
                2 => "w",
                3 => "A",
                4 => "G",
                5 => "M",
                6 => "Y",
                7 => "F",
                8 => "P",
                9 => "D",
                10 => "X",
                11 => "B",
                12 => "N",
                13 => "J",
                14 => "Z",
                15 => "S",
                16 => "Q",
                17 => "V",
                18 => "H",
                19 => "L",
                20 => "C",
                21 => "K",
                22 => "E",
            };
            
            if (strtoupper($dni[8]) !== $letra) {
                $dniValido = false;
            }
        } else {
            $dniValido = false;
        }
        return  $dniValido;
    }

