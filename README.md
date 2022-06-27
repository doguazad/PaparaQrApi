# PaparaQrApi
<div id="top"></div>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->




<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/doguazad/PaparaQrApi/">
    <img src="https://merchant-api.papara.com/assets/img/paparaDeveloperLogo.png?v=1" alt="Logo" width="700" height="100">
  </a>

  <h3 align="center">Papara QR Api</h3>

  <p align="center">
    Simple papara payment api that you can use without the need for an activation key.
    <br />
    <a href="https://github.com/doguazad/PaparaQrApi/"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="http://papara-api.suppart.site/">View Demo</a>
  </p>
</div>



<!-- ABOUT THE PROJECT -->
## About The Project



A 'direct payment api' that you can use without requiring the api key that Papara uses as an unlisted

Some bug reports and explanations:
* ```null``` : This error code will appear if you leave one or more fields blank
* ```none``` : This error code will redirect you to the home page as a result of misdirection and we will not report the error to you.
* ```amount``` : This error code will be sent to you if you enter a payment value outside the 5-95 TRY range.
* ```id``` : This error code will be sent to you if you enter an invalid PayPal number.
* ```Description``` : this error code will be sent to you if you enter the payment description incorrectly & in excess or incomplete. 


We have edited all these errors for you to make your payment more securely. We will show you errors as a warning on the screen. You can also view it via the url. Example usage:
```http://papara-api.suppart.site/index.php?value=id```
<br /><br /><br />
 <img src="https://raw.githubusercontent.com/doguazad/PaparaQrApi/main/ss.png" alt="Logo" width="1100" height="500">
 <hr>
 <img src="https://raw.githubusercontent.com/doguazad/PaparaQrApi/main/ss2.png" alt="Logo" width="1100" height="500">
<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## Parameters

| Parameter  | Feature  | 
| :------------ |:---------------:|
| accountNumber      | account to which the payment will be forwarded | 
| amount      | amount of payment to be transmitted        |   
| description | Description of the payment to be sent        |  
| currency  | currency of the payment to be transmitted|

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- LICENSE -->
## License

Distributed under the Apache License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- CONTACT -->
## Contact

Twitter - [@doguazadd](https://twitter.com/doguazadd) - doguazad@pm.me

Project Link: [https://github.com/doguazad/PaparaQrApi](https://github.com/doguazad/PaparaQrApi)

<p align="right">(<a href="#top">back to top</a>)</p>




