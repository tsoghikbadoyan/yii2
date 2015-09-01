<?php
    var_dump($var1) ;
?>
<div>
    <ul>
        <?php foreach($arrayInview as $item): ?>
            <li>
                <?php echo $item; ?>
                <?php echo $item; ?>
                <?php echo "hello"; ?>

            </li>
        <?php endforeach ?>
    </ul>
</div>