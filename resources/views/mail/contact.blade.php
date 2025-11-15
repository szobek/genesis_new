<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Sablon</title>
    <!--[if mso]>
    <style type="text/css">
        table {border-collapse: collapse;}
    </style>
    <![endif]-->
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
    <!-- Wrapper táblázat -->
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f4f4f4;">
        <tr>
            <td align="center" style="padding: 20px 0;">
                
                <!-- Fő email táblázat -->
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="background-color: #ffffff; max-width: 600px; width: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    
                    <!-- Fejléc -->
                    <tr>
                        <td align="center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); background-color: #667eea; padding: 40px 20px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td align="center" style="font-size: 16px; color: #ffffff; opacity: 0.9;">
                                        Üzenet a kapcsolatfelvételi űrlapról
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- Tartalom -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                
                                <!-- Üdvözlés -->
                                <tr>
                                    <td style="font-size: 24px; font-weight: 600; color: #333333; padding-bottom: 20px;">
                                        Üdv!
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; line-height: 1.8; color: #555555; padding-bottom: 20px;">
                                        Név: {{ $name  }} <br>
                                        e-mail: {{ $email }} <br>
                                        telefonszám: {{ $phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 16px; line-height: 1.8; color: #555555; padding-bottom: 20px;">
                                        Az alábbi üzenetet kaptuk a kapcsolatfelvételi űrlapon keresztül:
                                    </td>
                                </tr>
                                <!-- Üzenet -->
                                <tr>
                                    <td style="font-size: 16px; line-height: 1.8; color: #555555; padding-bottom: 20px;">
                                        {{ $msg ?? "" }}
                                    </td>
                                </tr>
                                

                            </table>
                        </td>
                    </tr>
                    
                </table>
                <!-- Fő email táblázat vége -->
                
            </td>
        </tr>
    </table>
    <!-- Wrapper táblázat vége -->
</body>
</html>