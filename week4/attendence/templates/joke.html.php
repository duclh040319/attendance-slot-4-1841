<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <?php if(isset($error)): ?>
        <p> <?=$error ?></p>
    <?php else: ?>
        <table>
            <tr>
                <th>Text</th>
                <th>Date</th>
                <th>Image</th>
            </tr>
            <?php foreach($jokes as $joke): ?>
            
            <tr>
                <td><?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?=htmlspecialchars($joke['jokedate'], ENT_QUOTES, 'UTF-8') ?></td>
                <td> <img src="<?=htmlspecialchars($joke['image'], ENT_QUOTES, 'UTF-8') ?>" alt=""></td>
            </tr>


            <?php endforeach;
            endif;
            ?>
        </table>
   


    
</body>
</html>