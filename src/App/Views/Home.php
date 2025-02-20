<?php
    loadComponent("Head");
    loadComponent("Navbar");
?>
<div class="bg">
    <?=
        loadComponent("Links");
        loadComponent("Title");
    ?>
</div>
<?= loadComponent("Tail");?>