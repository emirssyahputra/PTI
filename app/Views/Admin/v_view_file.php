<!-- admin/v_view_file.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View File</title>
</head>
<?php
    if (isset($file_path)) {
        $file_content = file_get_contents($file_path);
        echo '<pre>' . htmlspecialchars($file_content) . '</pre>';
    } else {
        echo '<p>File not found</p>';
    }
?>
</html>