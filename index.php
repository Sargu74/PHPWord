<?php

include_once 'samples/Sample_Header.php';

$name = "Test Template";
$source = __DIR__ . "/samples/resources/{$name}.docx";

echo date('H:i:s'), " Reading contents from `{$source}`", EOL;
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($source);
$templateProcessor->setValues([
  'firstname' => 'Gustavo',
  'lastname' => 'Baptista'
]);

$pathToSave = __DIR__ . "/samples/results/{$name}-filled.docx";
$templateProcessor->saveAs($pathToSave);
