<?php 

trait Foo {
    public function abc()
    {
        echo 'abc';  
    }
    public function xyz()
    {
        echo 'xyz';
    }
}

class Bar
{
    use Foo;
}

$obj = new Bar;

echo $obj->abc();
echo "\n";
echo $obj->xyz();
