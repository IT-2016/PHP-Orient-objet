<?php
  class foo
  {
    public function something()
    {
      echo __CLASS__; // foo
      var_dump($this);
    }
  }

  class foo_bar extends foo
  {
    public function something()
    {
      echo __CLASS__; // foo_bar
      var_dump($this);
    }
  }

  class foo_bar_baz extends foo_bar
  {
    public function something()
    {
      echo __CLASS__; // foo_bar_baz
      var_dump($this);
    }

    public function call()
    {
      echo self::something(); // self
      echo parent::something(); // parent
      echo foo::something(); // grandparent
    }
  }

  error_reporting(-1);

  $obj = new foo_bar_baz();
  $obj->call();

  // Output similar to:
  // foo_bar_baz
  // object(foo_bar_baz)[1]
  // foo_bar
  // object(foo_bar_baz)[1]
  // foo
  // object(foo_bar_baz)[1]

?>