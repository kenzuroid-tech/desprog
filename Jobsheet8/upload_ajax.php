<?php
if (isset($_FILES['images'])) {
    $errors = [];
    $allowed_img = ['jpg', 'jpeg', 'png', 'gif'];
    $total_files = count($_FILES['images']['name']);

    if (!file_exists('images')) {
        mkdir('images', 0777, true);
    }

    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['images']['name'][$i];
        $file_size = $_FILES['images']['size'][$i];
        $file_tmp  = $_FILES['images']['tmp_name'][$i];
        $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_img)) {
            $errors[] = "$file_name bukan gambar yang diizinkan.";
            continue;
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name melebihi ukuran maksimum 2 MB.";
            continue;
        }

        move_uploaded_file($file_tmp, "images/" . $file_name);
    }

    if (empty($errors)) {
        echo "Semua gambar berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}

if (isset($_FILES['document'])) {
    $errors = [];
    $allowed_docs = ['pdf', 'doc', 'docx', 'txt'];
    $file_name = $_FILES['document']['name'];
    $file_size = $_FILES['document']['size'];
    $file_tmp  = $_FILES['document']['tmp_name'];
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (!in_array($file_ext, $allowed_docs)) {
        $errors[] = "Hanya file PDF, DOC, DOCX, dan TXT yang diizinkan.";
    }

    if ($file_size > 2097152) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
    }

    if (empty($errors)) {
        if (!file_exists('documents')) {
            mkdir('documents', 0777, true);
        }
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>
