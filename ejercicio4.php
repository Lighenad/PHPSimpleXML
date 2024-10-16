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

$xml=new SimpleXMLElement($note);

// Añade un hijo al elemento body
$xml->body->addChild("date","2014-01-01");

// Add a child element after the last element inside note
// Añade un hijo elemento despues del ultimo elemento de la etiqueta <note> osea el footer se añadira debajo del <body>
$footer=$xml->addChild("footer","Some footer text");
echo $xml->asXML();
?>

<p>Select View Source to see the added "date" and "footer" elements.</p>

</body>
</html>