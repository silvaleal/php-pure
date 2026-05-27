<?php if (isset($_SESSION['errors'])): ?>
    <div>
        Error: <?php echo $_SESSION['errors']; ?>
    </div>
    <?php unset( $_SESSION['errors'] ); ?>
<?php endif ?>

<?php if (isset($_SESSION['notification'])): ?>
    <div>
        <?= $_SESSION['notification']; ?>
    </div>
    <?php unset( $_SESSION['notification'] ); ?>
<?php endif ?>