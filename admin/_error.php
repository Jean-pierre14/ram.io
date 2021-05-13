<?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="py-1 text-center alert alert-danger">
            <p> <?php echo $error; ?> </p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (count($success) > 0) : ?>
    <?php foreach ($success as $dat) : ?>
        <div class="py-1 text-center alert alert-success">
            <p> <?php echo $dat; ?> </p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>