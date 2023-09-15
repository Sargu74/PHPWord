<?php

use PhpOffice\PhpWord\TemplateProcessor;

include_once 'Sample_Header.php';

$name = "Test Template";
$source = __DIR__ . "/resources/{$name}.docx";

echo date('H:i:s'), " Reading contents from `{$source}`", '<br />';
$templateProcessor = new TemplateProcessor($source);

echo date('H:i:s'), " Replacing content tags in `{$source}`", EOL;
$templateProcessor->setValues([
  'firstname' => 'Gustavo',
  'lastname' => 'Baptista'
]);

$pathToSave = __DIR__ . "/results/{$name}-filled.docx";
$templateProcessor->saveAs($pathToSave);
echo date('H:i:s'), " Wrote contents to `{$pathToSave}`", EOL;
