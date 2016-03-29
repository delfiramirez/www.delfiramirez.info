<?php


date_default_timezone_set("Europe/Berlin");

define('URI_SCHEME', ( isset($_SERVER['HTTPS']) ) ? "https://" : "http://" );
define('SITE_URL', URI_SCHEME . $_SERVER['SERVER_NAME'] . '/');
define("CLASS_PATH", $_SERVER['DOCUMENT_ROOT'] . "/classes/");

$BaseUrl ="http://delfiramirez.info";
$Author = "Delfi Ramirez";
$Title = "Delfi Ramirez: Designing new media";
$subTitle = "Hypermedia and Communication.";
$mDescription = "";
$mKeywords = "delfi,ramirez,segonquartstudio,hypermedia,communication";
$bquote = "The reason for designing new media is simple - to subtly and quietly change the world.";
$userLinkA = "http://delfiramirez.blogspot.com";
$userLinkB = "http://segonquart.net";
$userLinkC = "https://speakerdeck.com/delfiramirez";
$userLinkD = "http://delfiramirez.info/public/dr_public_key.asc";
$userImage = "http://www.delfiramirez.info/public/images/delfi-ramirez.jpg";
$userGProfile ="https://plus.google.com/+DelfiRamirez";
$userTProfile ="@delfinramirez";


$enMenuLinkA = "Weblog";
$enMenuLinkB = "Projects";
$enMenuLinkC = "Social";
$enMenuLinkD = "PubKey";




/*
 * Copyright (c) 2015, delfi ramirez @ Segonquart Studio
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