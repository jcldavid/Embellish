About
------

**Embellish** is an open-source class for generating **QR Codes**. You are free to use it and modify it as you wish.

Usage
-----------
Create an instance of `Embellish` with the string for the QRCode as its parameter.

    $anyvar = new Embellish("Hello World!");
	
Retrieve the image by using the `getIMG()` method.

    echo '<img src="'.$anyvar->getIMG().'">';
		
>##QR Code Generator

Config
------
**source** - The server to be used to get the QRCodes

**size** - width/height of the image

