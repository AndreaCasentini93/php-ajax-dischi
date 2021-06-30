<?php require_once __DIR__ . '/../database/database.php'; ?>

<?php foreach ($discs as $disc) { ?>
    <div class="disc">
        <div class="image_box">
            <i class="far fa-play-circle"></i>
            <img src="<?= $disc['cover']; ?>" alt="<?= $disc['title']; ?>">
        </div>
        <h2><?= $disc['title']; ?></h2>
        <h4><?= $disc['author']; ?></h4>
    </div>          
<?php } ?>