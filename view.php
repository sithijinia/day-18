<?php
require_once "Demo.php";
$temp= new Demo();
$res=$temp->demo();
?>

<form action= " " method="post">
    <table>
        <tr>
            <th>First Number:</th>
            <td>
                <input type="number" name="firstNumber">
            </td>
        </tr>

        <tr>
            <th>Last Number:</th>
            <td>
                <input type="number" name="lastNumber">
            </td>
        </tr>
        <tr>
            <th>Choose Option:</th>
            <td>
                <input type="radio" name="check" value="odd">ODD
                <input type="radio" name="check" value="even">EVEN

            </td>
        </tr>

        <tr>
            <th>Results:</th>
            <td>
                <textarea rows="5" cols="20" >
                    <?php echo $res;?>
                </textarea>
            </td>
        </tr>


        <tr>
            <th></th>
            <td>
                <input type="submit" value="submit" name="btn">
            </td>
        </tr>

    </table>
