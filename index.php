<?php

$today = new DateTIme();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchedule</title>
    <link rel ="stylesheet" href ="./css/style.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">>
</head>
<body>
    <div class="container">
        <h3><a href="">＜　2023-12　＞</a></h3>
        <table class="table table-bordered">
            <tr>
               <th class="red">日</th> 
               <th>月</th> 
               <th>火</th> 
               <th>水</th> 
               <th>木</th> 
               <th>金</th> 
               <th class="blue">土</th> 
            </tr>
                <tr>
                <?php for ($day_num=1; $day_num<=31; $day_num++) {  ?>
                    <?php if (is_float(($day_num/7)) == false) {  ?>
                        <td><?php echo $day_num; ?></td> </tr> <tr>
                    <?php } else { ?>
                        <td><?php echo $day_num; ?></td>
                    <?php } ?>
                <?php } ?>
        </table>
    </div>
</body>
</html>