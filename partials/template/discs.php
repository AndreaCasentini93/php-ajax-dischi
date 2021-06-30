<?php require_once __DIR__ . '/../database/database.php'; ?>

<?php foreach ($discs as $disc) { ?>
    <div class="disc">
        <img src="<?= $disc['cover']; ?>" alt="<?= $disc['title']; ?>">
        <h2><?= $disc['title']; ?></h2>
        <h4><?= $disc['author']; ?></h4>
    </div>          
<?php } ?>