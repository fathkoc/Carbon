<?php

class Hesapla
{
    private $string1;
    private $string2;
         // Farklı classlardan erişim olamaz bu özellik değişmek istenirse protected olarak değiştirilebilir
    public function __construct($string1, $string2)
    {

        setlocale(LC_COLLATE, 'tr_TR.utf8');

        $this->string1 = $this->uniqueSortedString($string1);
        $this->string2 = $this->uniqueSortedString($string2);
    }

    public function intersection()
    {
        $result = array_intersect(str_split($this->string1), str_split($this->string2));
        return implode('', $result);
    }

    public function union()
    {
        $result = array_unique(array_merge(str_split($this->string1), str_split($this->string2)));
        sort($result, SORT_LOCALE_STRING);
        return implode('', $result);
    }

    public function difference()
    {
        $result = array_diff(str_split($this->string1), str_split($this->string2));
        return implode('', $result);
    }

    private function uniqueSortedString($str)
    {
        $result = array_unique(str_split($str));
        sort($result, SORT_LOCALE_STRING);
        return implode('', $result);
    }
}


$hsp = new Hesapla("cba", "ayz");
echo $hsp->intersection();
echo "<br>";
echo $hsp->union();
echo "<br>";
echo $hsp->difference();
echo "<br>";
