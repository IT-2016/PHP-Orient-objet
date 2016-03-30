<?php
  class A
  {
    function toto()
    {
      if (isset($this)) {
        echo '$this est définie (';
        echo get_class($this);
        echo ")\n";
      } else {
        echo "\$this n'est pas définie.\n";
      }
    }
  }

  class B
  {
    function titi()
    {
      // Note: la ligne suivante émet une erreur si E_STRICT est activé.
      A::toto();
    }
  }

  $a = new A();
  $a->toto();

  // Note: la ligne suivante émet une erreur si E_STRICT est activé.
  A::toto();
  $b = new B();
  $b->titi();

  // Note: la ligne suivante émet une erreur si E_STRICT est activé.
  B::titi();
?>