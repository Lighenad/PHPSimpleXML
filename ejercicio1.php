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
//asXML() devuelve el XML completo, incluyendo las etiquetas anidadas y la estructura original del documento, en este caso nos devolvera
//el valor que tienen las etiquetas osea tove jani reminder do not forget me this weekend!
echo $xml->asXML();
?>

<p>Select View Source to see the XML.</p>

</body>
</html>