<!-- REQUIRE DATABASE -->
<?php require_once __DIR__ . '/../database/database.php'; ?>

<!-- CARDS -->
<?php foreach ($discs as $disc) { ?>
    <a href="<?= '#'; ?>" class="disc">
        <div class="image_box">
            <i class="far fa-play-circle"></i>
            <img src="<?= $disc['cover']; ?>" alt="<?= $disc['title']; ?>">
        </div>
        <h2><?= $disc['title']; ?></h2>
        <h4><?= $disc['author']; ?></h4>
    </a>          
<?php } ?>