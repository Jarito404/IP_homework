<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opgave 9</title>
</head>
<style>
    #url {
        float: left;
        border: 1px solid black;
        padding: 1% 1% 1%;
        width: 15%;
    }
    #url table {
        border: 1px solid black;
    }
    #url td {
        border: 1px solid black;
        width: 10%;
    }
    #url td:hover {
        background-color: dimgray;
        cursor: pointer;
    }
</style>
<body>
    <div id="url">
        <?php if($_POST == NULL) {?>
            Vul je eigen websites in:
            <br>
            <form method="post" action="index.php">
                <?php for($i = 1; $i <= 3; $i++){//hoef je niet 3 keer een input te maken
                    print('
                        <label for="'.$i.'">
                            URL'.$i.':
                            <input id="'.$i.'" type="text" name="url'.$i.'">
                        </label><br>
                    ');
                }?>
                <br>
                <input type="submit" value="Versturen!">
            </form>
        <?php } else {
            ?><table><?php
            foreach($_POST as $url) {
                if($url != NULL) {
                    print('<tr><td><a href="https://'.$url.'">'.$url.'</a></td></tr>');
                } else {
                    print("<tr><td>Geen URL ingevuld!</td></tr>");
                }
            }
            ?></table>
            <a href="index.php">clear urls</a>
        <?php }?>
    </div>
</body>
</html>