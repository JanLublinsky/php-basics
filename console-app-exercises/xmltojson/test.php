<?php
include "index.php";
include "file.json";

class testXMLToJson
{
    private $operations;

    public function __construct()
    {
        $this->operations = new Operations();
    }

    public function testXmlExist(): bool
    {
        $filename = 'file.xml';
        return file_exists($filename);
    }

    public function testJsonExist(): bool
    {
        $filename = 'file.json';
        return file_exists($filename);
    }

    public function testXmlOpened(): bool
    {
        return $fp = fopen('file.xml', 'r') ? true : false;
    }

    public function testJsonOpened(): bool
    {
        return $fp = fopen('file.json', 'r') ? true : false;
    }

}

$testXmlToJson = new testXMLToJson();
//$testXmlToJson->testMaths();
echo "\n";
echo 'XMLtoJson::XmlExist() - ';
echo $testXmlToJson->testXmlExist() ? 'PASSED' : 'FAILED';
echo PHP_EOL;
echo 'XMLtoJson::JsonExist() - ';
echo $testXmlToJson->testJsonExist() ? 'PASSED' : 'FAILED';
echo PHP_EOL;
echo 'XMLtoJson::XmlOpened() - ';
echo $testXmlToJson->testXmlOpened() ? 'PASSED' : 'FAILED';
echo PHP_EOL;
echo 'XMLtoJson::JsonOpened() - ';
echo $testXmlToJson->testJsonOpened() ? 'PASSED' : 'FAILED';
echo PHP_EOL;
