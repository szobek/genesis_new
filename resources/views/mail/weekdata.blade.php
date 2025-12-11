<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heti Jelentés</title>
    <style>
        /* Ez a rész segít a jobb mobilos megjelenésben, de a fontos stílusok inline vannak. */
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .content {
            background-color: #ffffff;
            padding: 30px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        h1 {
            font-size: 24px;
        }
        h2 {
            font-size: 20px;
            border-bottom: 2px solid #eeeeee;
            padding-bottom: 10px;
            margin-top: 30px;
        }
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #ffffff;
            overflow: hidden; /* A border-radius miatt */
        }
        .card-table {
            width: 100%;
            border-collapse: collapse;
        }
        .card-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #f1f1f1;
            font-size: 14px;
            color: #333333;
        }
        .card-table tr:last-child td {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #555555;
            width: 130px; /* Egységes címke szélesség */
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f7f6; font-family: Arial, sans-serif;">

    <table class="container" align="center" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 600px; margin: 0 auto;">
        <tr>
            <td style="padding: 20px 0;">
                <!-- FŐ CÍM -->
                <div class="content" style="background-color: #ffffff; padding: 30px;">
                    <h1 style="color: #2c3e50; font-size: 24px; text-align: center;">Heti Jelentés</h1>
                    <p style="text-align: center; color: #555555;">Összefoglaló a heti érdeklődésekről és árajánlatkérésekről.</p>

                    <!-- KAPCSOLATFELVÉTELEK SZEKCIÓ -->
                    <h2 style="color: #2c3e50; font-size: 20px; border-bottom: 2px solid #eeeeee; padding-bottom: 10px; margin-top: 30px;">Heti Kapcsolatfelvételek</h2>

                    @forelse ($msgs as $message)
                        <div class="card" style="border: 1px solid #e0e0e0; border-radius: 8px; margin-top: 20px; background-color: #ffffff; overflow: hidden;">
                            <table class="card-table" cellpadding="0" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Név:</td>
                                    <td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $message->name }}</td>
                                </tr>
                                <tr>
                                    <td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">E-mail:</td>
                                    <td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $message->email }}</td>
                                </tr>
                                <tr>
                                    <td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Telefon:</td>
                                    <td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $message->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="label" valign="top" style="padding: 12px 15px; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Üzenet:</td>
                                    <td style="padding: 12px 15px; font-size: 14px; color: #333333; line-height: 1.5;">{{ $message->message }}</td>
                                </tr>
                            </table>
                        </div>
                    @empty
                        <p style="color: #555555; padding: 20px 0;">A héten nem érkezett új kapcsolatfelvétel.</p>
                    @endforelse

                    <!-- ÁRAJÁNLATKÉRÉSEK SZEKCIÓ -->
                    <h2 style="color: #2c3e50; font-size: 20px; border-bottom: 2px solid #eeeeee; padding-bottom: 10px; margin-top: 30px;">Heti Árajánlatkérések</h2>

                    @forelse ($tenders as $tender)
                        <div class="card" style="border: 1px solid #e0e0e0; border-radius: 8px; margin-top: 20px; background-color: #ffffff; overflow: hidden;">
                            <table class="card-table" cellpadding="0" cellspacing="0" style="width: 100%; border-collapse: collapse;">
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Név:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $tender->name }}</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">E-mail:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $tender->email }}</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Telefonszám:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $tender->phone }}</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Hol található a kivitelezés helyszíne?:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $tender->address }}</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Van már építési telek?:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">@if($tender->hasGround) Igen @else Nem @endif</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Mi az elképzelt épület jellege?:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ __("tender.".$tender->ideaType) }}</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Hozzávetőlegesen hány nm2-es ingatlant szeretne?:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $tender->area }}</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Készült már tervrajz az épületről?:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">@if($tender->hasBlueprint) Igen @else Nem @endif</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Az építkezéshez van már alap?:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">@if($tender->hasFoundation) Igen @else Nem @endif</td></tr>
                                <tr><td class="label" style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #555555; font-weight: bold; width: 130px;">Dátum:</td><td style="padding: 12px 15px; border-bottom: 1px solid #f1f1f1; font-size: 14px; color: #333333;">{{ $tender->created_at }}</td></tr>
                            </table>
                        </div>
                    @empty
                        <p style="color: #555555; padding: 20px 0;">A héten nem érkezett új árajánlatkérés.</p>
                    @endforelse
                </div>
            </td>
        </tr>
        <!-- LÁBLÉC -->
        <tr>
            <td class="footer" style="text-align: center; padding: 20px; font-size: 12px; color: #888888;">
                <p>Ez egy automatikusan generált heti jelentés.</p>
            </td>
        </tr>
    </table>

</body>
</html>