<h2>Top Rated Stories</h2>

<?php foreach ($stories as $story): ?>
    <div class="story">
        <h3><?= htmlspecialchars($story['title']) ?></h3>
        <p><?= htmlspecialchars($story['content']) ?></p>
        <p>Rating: <?= htmlspecialchars($story['rating']) ?></p>
    </div>
<?php endforeach; ?>

<?php if (isset($stories) && count($stories) > 0): ?>
    <?php foreach ($stories as $story): ?>
        <div class="story">
            <h3><?= htmlspecialchars($story['title']) ?></h3>
            <p><?= htmlspecialchars($story['content']) ?></p>
            <p>Rating: <?= htmlspecialchars($story['rating']) ?></p>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No stories available.</p>
<?php endif; ?>