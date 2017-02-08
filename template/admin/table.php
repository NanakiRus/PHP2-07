<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <?php var_dump($arrData); foreach ($arrData as $value) : ?>
    <tr>
        <?php foreach ($arrFunc as $func) : ?>
        <td>
                    <?php echo $func($value); ?>
        </td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>