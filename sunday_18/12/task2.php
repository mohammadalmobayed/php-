<?php
class Introducer
{
    public function introduce($name)
    {
        echo "Hello All, I am $name";
}

}
$introducer = new Introducer();
$introducer->introduce('Scott');
?>