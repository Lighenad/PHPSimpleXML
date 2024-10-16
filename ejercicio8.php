<!DOCTYPE html>
<html>
<body>

<?php
$xml=<<<XML
<cars>
  <car name="Volvo">
    <child/>
    <child/>
    <child/>
    <child/>
  </car>
  <car name="BMW">
    <child/>
    <child/>
  </car>
</cars>
XML;

$elem = new SimpleXMLElement($xml);
foreach ($elem as $car)
  {
    #Con el printf podremos hacer instrucciones especificas a la hora de imprimir por pantalla, el printf funciona asi:
    #printf(formato de como se imprimira, argumento1, argumento2) en este caso %s se relaciona con el argumento 1 osea con
    #$car['name] y %d se relaciona con el 2do argumento osea $car->count(), el $car['name'] buscara dentro del xml
    #todo lo que tenga un atributo name y el $car->count() contara todo lo de adentro que tenga ese car en este caso 
    #Volvo tiene 4 hijos y BMW tiene 2 hijos asi que eso sera lo que impriman por pantalla.
  printf("%s has %d children.<br>", $car['name'], $car->count());
 }
?>

</body>
</html>