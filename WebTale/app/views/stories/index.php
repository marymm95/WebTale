<?php foreach ($stories as $story): ?>
    <div>
        <h2><a href="/story/<?php echo $story['id']; ?>"><?php echo $story['title']; ?></a></h2>
        <p><?php echo $story['content']; ?></p>
    </div>
<?php endforeach; ?>
