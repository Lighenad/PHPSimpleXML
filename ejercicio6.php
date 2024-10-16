<!DOCTYPE html>
<html>
<body>

<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body date="2014-01-01" type="private">Do not forget me this weekend!</body>
</note>
XML;
#El simplexml_load_string convierte a la variable note en un objeto y lo mete en el xml para que pueda ser manipulable
$xml = simplexml_load_string($note);
#En este foreach se pide que se busque en el xml el elemento body posicion 0 'body[0] osea el primer body y con ->attributes
#le pide que busque los atributos de body, la variable $a imprimira el date y el type y la variable b imprimira 2014-01-01 y
#private
foreach($xml->body[0]->attributes() as $a => $b)
{
    echo $a,'="',$b,"<br>";
}
?>

</body>
</html>