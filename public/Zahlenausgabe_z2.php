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

for($i = 0; $i < 100; $i++)
{
    $counter = 0;
    $arr[] = $startZahl;
    $arrValue[$startZahl] = 0;

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
        $arrValue[$startZahl] = "true";
        $counterPrimzahlen++;
//@todo
        if($arrValue[$startZahl+10] == "true")
        {
            ?>
            <td rowspan="2" style="background-color: #0000F0"><?=$startZahl?></td>
            <?php
        }
        else
        {
            ?>
            <td style="background-color: #2aabd2"><?=$startZahl?></td>
            <?php
        }
    }
    else
    {
        $arrValue[$startZahl] = "false";
        ?>
        <td><?=$startZahl?></td>
        <?php
    }

    $startZahl++;
    $anzahlZeilen++;

    if(($anzahlZeilen % 10) == 0)
    {
        ?>
        </tr><tr>
        <?php
    }
}
        print_r($arrValue);
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
