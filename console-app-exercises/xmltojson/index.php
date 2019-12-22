<?php

class Operations
{
    public function Maths(string $xmlPath, string $jsonPath)
    {
        $xml = simplexml_load_file($xmlPath);

        foreach ($xml->element as $item) {

            $divided = $item->variable1 / $item->variable2;
            $multiplied = $item->variable1 * $item->variable2;

        }

        header('Content-Type: application/json');
        $jsonData = json_encode(["divided: " . $divided, "multiplied: " . $multiplied]);
        echo $jsonData;
        file_put_contents($jsonPath, $jsonData);
    }
}

$xmlPath = readline("Please enter path to xml file: ");
$jsonPath = readline("Please enter path to json file: ");
$output = new Operations();
$output->Maths($xmlPath, $jsonPath);
