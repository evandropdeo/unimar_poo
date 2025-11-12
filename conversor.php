<?php
    class Conversor{
        public static $fator = 0.621371;

        static function converterKmParaMilhas($km){
            return self::$fator * $km;
        }
    }    

echo "1 Km é equivalente a ". Conversor::converterKmParaMilhas(1);