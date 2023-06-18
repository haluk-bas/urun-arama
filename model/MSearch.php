<?php

class MSearch{


    const  urunler = array(
        "1" => array ("name" => "bilgisayar [Masaüstü]", "price" => 100, "stock" => "10", "img" => "./img/desktop.svg"),
        "2" => array ("name" => "bilgisayar [Laptop]", "price" => 150, "stock" => "20","img" => "./img/laptop.svg"),
        "3" => array ("name" => "tablet [7\"]", "price" => 200, "stock" => "30","img" => "./img/tablet.svg"),
        "4" => array ("name" => "tablet [10.1\"]", "price" => 250, "stock" => "10","img" => "./img/tablet.svg"),
        "5" => array ("name" => "mouse [Kablolu]", "price" => 300, "stock" => "40","img" => "./img/mouse.svg"),
        "6" => array ("name" => "mouse[kablosuz]", "price" => 350, "stock" => "50","img" => "./img/mouse_wireless.svg"),
        "7" => array ("name" => "klavye[Kablolu]", "price" => 400, "stock" => "50","img" => "./img/keyboard.svg"),
        "8" => array ("name" => "klavye[kablosuz]", "price" => 450, "stock" => "50","img" => "./img/keyboard_wireless.svg"),
        "9" => array ("name" => "işlemci [1.2 GHZ]", "price" => 450, "stock" => "50","img" => "./img/cpu.svg"),
        "10" => array ("name" => "işlemci [1.2 GHZ]", "price" => 450, "stock" => "50","img" => "./img/cpu.svg"),
        "11" => array ("name" => "işlemci [2.0 GHZ]", "price" => 450, "stock" => "50","img" => "./img/cpu.svg"),
        "12" => array ("name" => "işlemci [3.0 GHZ]", "price" => 450, "stock" => "50","img" => "./img/cpu.svg"),
    );

    public function data($param){
        $result = [];
        foreach (self::urunler as $urun) {
            if (str_split($urun["name"], strlen($param))[0] == $param) {
                array_push($result, $urun);
            }
        }
        return $result;
    }
}