
<ul>
    <?php foreach ($errors->getAllMessages() as $key => $error): ?>
        <li class="bg-danger"><?php echo $error; ?></li>
        <?php endforeach; ?>
</ul>
