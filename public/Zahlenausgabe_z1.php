<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hundert Zahlen</title>
    </head>
    <style>
        table, td{
            border: 1px solid black;
        }
        td{
            width: 40px;
            height: 40px;
            text-align: center;
        }
    </style>
    <body>
        <h1>Hundert Zahlen</h1>
        <table>
            <tr>
<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 09.02.17
 * Time: 14:27
 */
$arr = array();
$counterPrimzahlen = 0;
$startZahl = 13;
$anzahlZeilen = 0;
for($i = 1; $i <= 100; $i++)
{
    $counter = 0;
    for($j = 1; $j <= $startZahl; $j++)
    { //all divisible factors
        if($startZahl % $j == 0)
        {
            $counter++;
        }
    }
    //prime requires 2 rules ( divisible by 1 and divisible by itself)
    if($counter == 2)
    {
        $counterPrimzahlen++;
        ?>
        <td style="background-color: #2aabd2"><?=$startZahl?></td>
        <?php
    }
    else
    {
        ?>
        <td><?=$startZahl?></td>
        <?php
    }
    $arr[] = $startZahl;
    $startZahl++;
    $anzahlZeilen++;
    if(!empty($arr[99]))
    {
        ?>
        </tr>
        <?php
    }
    else if (($anzahlZeilen % 10) == 0)
    {
        ?>
        </tr>
        <tr>
        <?php
    }
}
?>
        </table>
        <br>
        <table style="border: hidden;white-space: nowrap;">
            <tr>
                <td style="border: hidden;width: 44px;height: 40px;">
                    <table>
                        <tr>
                            <td style="background-color: #2aabd2"></td>
                        </tr>
                    </table>
                </td>
                <td style="border: hidden">
                    <div style=""><?=$counterPrimzahlen?> Primzahlen</div>
                </td>
            </tr>
        </table>
    </body>
</html>
