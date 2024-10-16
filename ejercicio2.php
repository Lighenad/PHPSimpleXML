<!DOCTYPE html>
<html>
<body>

<?php
$xml = new SimpleXMLElement("<note>Hello <to>Tove</to><from>Jani</from>World!</note>");
echo $xml;
?>

</body>
</html>