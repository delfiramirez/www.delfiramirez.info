<?php

class makeForm

{
    
    function makeForm {
        
        detectaconexionPHP();
    }
    
   function detectaConexionHTTP {
       
       
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
   }
    
}




/*
 * Copyright (c) Error: on line 4, column 33 in Templates/Licenses/license-bsd.txt
  The string doesn't match the expected date/time format. The string to parse was: "23-sep-2015". The expected format was: "MMM d, yyyy"., Delfi Ramirez (delfin@segonquart.net)
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * Description of makeForm
 *
 * @author Delfi Ramirez (delfin@segonquart.net)
 */
class makeForm {
    //put your code here
}
