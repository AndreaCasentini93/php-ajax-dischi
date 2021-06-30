<?php require_once __DIR__ . '/../database/database.php'; ?>

<?php foreach ($discs as $disc) { ?>
    <div class="disc">
        <img src="<?= $disc['cover']; ?>" alt="<?= $disc['title']; ?>">
        <h2><?= "ciao"; ?></h2>
        <h4><?= "ciao"; ?></h4>
        <p><?= "ciao"; ?></p>
        <p><?= "ciao"; ?></p>
    </div>          
<?php } ?>