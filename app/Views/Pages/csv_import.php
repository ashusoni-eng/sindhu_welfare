<!DOCTYPE html>
<html>
<head>
    <title>CSV Import</title>
</head>
<body>
    <h1>Import CSV File</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="<?= base_url('csv-import') ?>" method="post" enctype="multipart/form-data">
        <label for="csv_file">Choose CSV File:</label>
        <input type="file" name="csv_file" id="csv_file" required>
        <button type="submit">Import</button>
    </form>
</body>
</html>
