<?php
class SimpleClass
{
   // Déclarations invalides de propriétés :
   public $var1 = 'hello ' . 'world';
   public $var2 = <<<EOD
hello world
EOD;
   public $var3 = 1+2;
   public $var4 = self::myStaticMethod();
   public $var5 = $myVar;

   // Déclarations valides de propriétés :
   public $var6 = myConstant;
   public $var7 = array(true, false);

   // Ceci est autorisé uniquement depuis PHP 5.3.0 :
   public $var8 = <<<'EOD'
hello world
EOD;
}
?>
