<!DOCTYPE html>
<html>
<body>

<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml=simplexml_load_string($note);
#El children() es que busca los hijos de xml osea los hijos de <note> imprimira tove, jani, reminder y do not forget me 
#this weekend, pero si en el child del echo pones child->getName() te imprimira to, from, heading y body
foreach ($xml->children() as $child)
  {
  echo "Child node: " . $child . "<br>";
  }
?>
 
</body>
</html>