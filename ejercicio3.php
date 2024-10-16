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
// Añade un atributo al root osea a <note>
$xml->addAttribute("type","private");
// Añade un atributo al elemento body
$xml->body->addAttribute("date","2014-01-01");

echo $xml->asXML();
?>

<p>Select View Source to see the added "type" and "date" attributes.</p>

</body>
</html>