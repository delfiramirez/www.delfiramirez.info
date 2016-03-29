
<?php

$HttpStatus = $_SERVER["REDIRECT_STATUS"];
if ($HttpStatus == 200) {
    print "Document has been processed and sent to you.";
}
if ($HttpStatus == 400) {
    print "No the real HTTP request ";
}
if ($HttpStatus == 401) {
    print "Unauthorized - Iinvalid password";
}
if ($HttpStatus == 403) {
    print "Forbidden";
}
if ($HttpStatus == 500) {
    print "It seems there is an Internal Server Error";
}
?>
