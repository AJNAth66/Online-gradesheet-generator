<?php
require "pdfcrowd.php";

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("AJNath", "2319cdc41ff8ed62bc53eec7f52d5736");

    // run the conversion and write the result to a file
    $client->convertFileToFile("/path/to/MyLayout.html", "MyLayout.pdf");
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // rethrow or handle the exception
    throw $why;
}

?>