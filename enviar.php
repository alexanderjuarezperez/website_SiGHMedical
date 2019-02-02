<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$nombre=$_POST['valorCaja1'];
$email=$_POST['valorCaja2'];
$mensaje=$_POST['valorCaja3'];
$telefono=$_POST['valorCaja4'];
$web=$_POST['valorCaja5'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'alexsxander1997@gmail.com';                 // SMTP username   aceso
    $mail->Password = 'bogota18';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('alexsxander1997@gmail.com', 'Alexander');     //desde donde se va enviar
    $mail->addAddress($email, $nombre);     // Add a recipient   a quien enviarles

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    
    //$mail->addAttachment('img/d-header1.jpg');         // Add attachments
    
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $nombre.$correo;
    $mail->Body = '<!DOCTYPE html>
<html>
   <head>
      <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
      <meta content="telephone=no" name="format-detection" />
      <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" name="viewport" />
      <meta content="IE=9; IE=8; IE=7; IE=EDGE" http-equiv="X-UA-Compatible" />
	  <link href="http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,300italic" rel="stylesheet" type="text/css">
      <title>Inspired-Layout 2</title>
    
    <style type="text/css">
    body{
        background-image: url("http://www.sighmedical.com/img/d-l2-header1.jpg");
        background="http://www.sighmedical.com/img/d-l2-header1.jpg";
    }
         /* This is to overwrite Outlook.com’s Embedded CSS */
         table {border-collapse:separate;}
         a, a:link, a:visited {text-decoration: none; color: #00788a;}
         h2,h2 a,h2 a:visited,h3,h3 a,h3 a:visited,h4,h5,h6,.t_cht {color:#000 !important;}
         p {margin-bottom: 0}
         .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%;}							
         .ExternalClass {width: 100%;}/**This is to center your email in Outlook.com************/
         /* General Resets */
         #outlook a {padding:0;}
         body, #body-table {height:100% !important; width:100% !important; margin:0 auto; padding:0; line-height:100% !important; background-image: url("http://www.sighmedical.com/img/d-l2-header1.jpg"); background="http://www.sighmedical.com/img/d-l2-header1.jpg";}
         img, a img {border:0; outline:none; text-decoration:none;}
         .image-fix {display:block;}
         table, td {border-collapse:collapse;}
         /* Client Specific Resets */
         .ReadMsgBody {width:100%;} .ExternalClass{width:100%;}
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100% !important;}
         .ExternalClass * {line-height: 100% !important;}
         table, td {mso-table-lspace:0pt; mso-table-rspace:0pt;}
         img {outline: none; border: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
         body, table, td, p, a, li, blockquote {-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
         body.outlook img {width: auto !important;max-width: none !important;}
         /* Start Template Styles */
         /* Main */
         body{ -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
         body, #body-table {background-color: #e6e7eb; margin:0 auto !important;; text-align:center !important;}
         p {padding:0; margin: 0; line-height: 24px; font-family: Lato, sans-serif;}
         a, a:link {color: #1c344d;text-decoration: none !important;}
         .footer-link a, .nav-link a {color: #fff6e5;}
         /* Yahoo Mail */
         .thread-item.expanded .thread-body{background-color: #000000 !important;}
         .thread-item.expanded .thread-body .body, .msg-body{display:block !important;}
         #body-table .undoreset table {display: table !important;table-layout: fixed !important;}
         /* Start Media Queries */
         @media only screen and (max-width: 800px) {
         a[href^="tel"], a[href^="sms"] {text-decoration: none;pointer-events: none;	cursor: default;}
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default;	pointer-events: auto;cursor: default;}	
         *[class].mobile-width {width: 700px !important; padding: 0 4px;}
         *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
         *[class].bottom-stack {padding-bottom:30px !important;}
         *[class].stack {padding-bottom:30px !important; height: auto !important;}
         *[class].gallery {padding-bottom: 20px!important;}
         *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important;}
         *[class].block {display: block!important;}
         *[class].midaling { width:100% !important; border:none !important; }
         *[class].full-width-layout {width: 100%!important;}
         *[class].test-hidden-space{ height:40px !important;}
         *[class].test-center{ width:100% !important; height:auto !important; text-align:center;}	
         *[class].bg-res1{ background-position: center center !important;background-size: 100% 200% !important; padding:40px 0px !important;}
         *[class].bg-res2{ background-position: center center !important;background-size: 100% 200% !important;padding:40px 0px !important;}
         *[class].res-space{ height:50px !important;}
         }
         @media only screen and (max-width: 700px) {
         *[class].full-width {width: 100%!important;}
         *[class].mobile-width {width: 600px !important; padding: 0 4px;}
         *[class].content-width {width: 540px!important;}
         *[class].icon-columns{ width:540px !important; border:none !important; }
         *[class].mockup-width{ width:33% !important;}
         *[class].center {text-align:center !important; height:auto !important;}
         *[class].section-white{ background-color:#23f2d7 !important; background:none; !important;}
         *[class].hidden-space{ height:0px !important;}
         *[class].no-padding{ padding:0px !important;}
         }
         @media only screen and (max-width: 640px) {
         *[class].mobile-width {width: 480px!important; padding: 0 4px;}
         *[class].content-width {width: 360px!important;}
         *[class].icon-columns{ width:360px !important; border:none !important; }
         *[class].center {text-align:center !important; height:auto !important;  width:100%;}
         }
         @media only screen and (max-width: 480px) {
         *[class].full-width {width: 100%!important;}
         *[class].mobile-width {width: 360px!important; padding: 0 4px;}
         *[class].content-width {width: 300px!important;}
         *[class].icon-columns{ width:300px !important; border:none !important; }
         *[class].center {text-align:center !important; height:auto !important;}
         *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
         *[class].stack {padding-bottom:30px !important; height: auto !important;}
         *[class].gallery {padding-bottom: 20px!important;}
         *[class].midaling { width:100% !important; border:none !important; }
         }
         @media only screen and (max-width: 360px) {
         *[class].full-width {width: 100%!important;}
         *[class].mobile-width {width: 100%!important; padding: 0 4px;}
         *[class].content-width {width: 280px!important;}
         *[class].icon-columns{ width:290px !important; border:none !important; }
         *[class].center {text-align:center !important; height:auto !important;}
         *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
         *[class].stack {padding-bottom:30px !important; height: auto !important;}
         *[class].gallery {padding-bottom: 20px!important;}
         *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important; min-width:320px !important;}
         *[class].midaling { width:100% !important; border:none !important;}
         }
      </style>
    
    <body>
    <table id="body-table" bgcolor="#242931" border="0" cellpadding="0" cellspacing="0" width="100%" background="http://www.sighmedical.com/img/d-l2-header1.jpg" style="table-layout:fixed"; >
         <tbody>
            <tr>
               <td align="center" valign="top"
                  <!-- Table Outer Begins -->
                  <table width="800" bgcolor="#363c46" border="0" cellspacing="0" cellpadding="0" class="mobile-width">
                     <tbody>
                        <tr>
                           <td align="center">
                              <!-- View Online Tag Begins -->
                              <table width="100%" bgcolor="#242931" align="center" border="0" cellspacing="0" cellpadding="0">
                                 <tbody>
                                    <!-- Start Space -->										
                                    <tr>
                                       <td height="10"></td>
                                    </tr>
                                    <!-- End Space --> 										
                                    <tr>
                                       <td align="center" style="font-family: Lato, sans-serif; font-size: 14px; mso-line-height-rule:exactly; line-height:21px; font-weight:300;color: #FFFFFF;">Problems viewing? <span style="color: #23f2d7; text-decoration:underline;"><a href="www.sighmedical.com" style="color: #23f2d7;">Click to view online.</a></span></td>
                                    </tr>
                                    <!-- Start Space -->										
                                    <tr>
                                       <td height="10"></td>
                                    </tr>
                                    <!-- End Space -->											
                                 </tbody>
                              </table>
                              <!-- View Online Tag Ends -->
                              <!-- Menu & Header Begins -->
                              <table width="800" border="0" cellspacing="0" cellpadding="0" class="mobile-width">
                                 <tbody>
                                    <tr>
                                       <td align="center">
                                          <!-- Bg Image imagen de fondo-->
                                          <table bgcolor="#CCCCCC" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-repeat: no-repeat; !important; background-position: center center;background-size: cover;" background="http://www.sighmedical.com/img/d-l2-header1.jpg" class="full-width">
                                             <tbody>
                                                <tr>
                                                   <td align="center">
                                                      <!-- Menu Section / Logo -->
                                                      <table width="640" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                         <tbody>
                                                            <tr>
                                                               <td>
                                                                  <!-- Start Logo -->
                                                                  <table width="190" align="left" cellspacing="0" cellpadding="0" border="0" class="full-width">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td height="30" valign="middle" align="left" class="center"  style="font-family: Lato, sans-serif;font-size: 18px;font-weight:bold;" ><a href="#" style="color: #16a085; display:block;" ><img src="http://www.sighmedical.com/img/lgo.png" width="178" height="67" alt="" editable="true" mc:edit="d-logo-img"/></a></td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <!-- End Logo -->
                                                                  <!-- Start Nav -->
                                                                  <table align="right" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td height="20" class="center">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td height="15" class="center">&nbsp;</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <!-- End Nav -->
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <!-- Menu Section / Logo Ends -->
                                                      <!-- Header Content Begins -->
                                                      <table width="640" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                         <tbody>
                                                            <tr>
                                                               <td height="25" class="center">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                               <td align="center" class="center" style="font-family: Lato, sans-serif; font-size: 32px; text-transform:capitalize; mso-line-height-rule:exactly; line-height:50px; font-weight:300; color: #ffffff;" mc:edit="headertext1">
                                                                  <multiline label="header-title1"><span style="color:#fff";>Hola: '.$nombre.'</span></multiline>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td align="center" class="center" style="font-family: Lato, sans-serif; font-size: 50px; text-transform:uppercase; mso-line-height-rule:exactly; line-height:55px; font-weight: bold; color: #ffffff;" mc:edit="headertext2">
                                                                  <multiline label="header-title2">
                                                                  </multiline>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td height="25" class="center">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                               <td align="center" class="center res-padding" style="font-family: Lato, sans-serif; font-size: 16px; mso-line-height-rule:exactly; line-height:25px; padding:0px 78px; font-weight: 300; color: #ffffff;" mc:edit="headertext3">
                                                                  <multiline label="header-text1">
                                                                     Ha sido increíble poder compartir la información mas relevante de como hacer crecer tu negocio y ademas es adaptable a cual tamaño de una empresa.
                                                                  </multiline>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td height="30"></td>
                                                            </tr>
                                                            <tr>
                                                               <td align="center" class="center" height="80">
                                                                  <table cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse:collapse;">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>
                                                                              <table width="240" cellspacing="0" cellpadding="0" border="0" align="center" style="border-radius:5px !important; border:1px solid #FFFFFF; border-collapse: separate !important;">
                                                                                 <tbody>
                                                                                    <tr>
                                                                                       <td height="14" style="font-size: 14px; line-height: 14px;"> </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                       <td>
                                                                                          <table cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                             <tbody>
                                                                                                <tr>
                                                                                                   <td width="35" align="left" style="padding:0 8px 0 0;">
                                                                                                      <img width="35" height="35" border="0" align="middle" alt="" style="display: block; width: 33px; height: 33px;" src="http://www.sighmedical.com/img/l2-icon1.jpg">
                                                                                                   </td>
                                                                                                   <td align="center" style="color: #ffffff; font-size: 21px;" mc:edit="header-button">
                                                                                                      <singleline label="header-button">
                                                                                                         <a style="color: #ffffff; text-decoration: none; font-family: Lato, sans-serif; " href="www.sighmedical.com">
                                                                                                         Ver Beneficios
                                                                                                         </a>
                                                                                                      </singleline>
                                                                                                   </td>
                                                                                                </tr>
                                                                                             </tbody>
                                                                                          </table>
                                                                                       </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                       <td height="14" style="font-size: 14px; line-height: 14px;"> </td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td height="40"></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <!-- Header Content Ends -->
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              </body>
                              </html>';

    
    
    /*'<table style="width: 100%" border="3">
      <tr>
         <th>'.$mensaje.'</th>
         <th>'.$mensaje.'</th>
         <th>'.$mensaje.'</th>
      </tr>
   </table>';*/
   
    if($mail->send()){
        alert('correo enviado');
        header('Location: index.php');
        return;
    //echo 'mensaje enviado correctamente';
    }
   
} catch (Exception $e) {
    echo 'error al enviar', $mail->ErrorInfo;
}
?>

