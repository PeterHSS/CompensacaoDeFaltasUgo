<?php
$note = <<<xml
<note>
<nome> Pedro </nome>
</note>
xml;

$xml = simplexml_load_string($note);

echo $xml->getName() . "<br>";

foreach ($xml->children() as $filha) {
    echo $filha->getName() . ": " . $filha . "<br>";
}
