<?php
$name = get_option('name')
?>

<footer>
    <?php if (!empty($name)) : ?>
        <p class="copyright">© Copyright 2022 <?php echo $name; ?>. All rights reserved.</p>
    <?php endif; ?>
    <?php if (empty($name)) : ?>
        <p class="copyright">© Copyright 2022. All rights reserved.</p>
    <?php endif; ?>
</footer>
</div>
</body>

</html>