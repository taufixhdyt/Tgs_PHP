<html>
<head>
<title>MVC dengan PHP</title>
</head>
<body>
<center>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        if ($list) {
            foreach ($list as $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value["judul"]; ?></td>
                    <td><?= $value["pengarang"]; ?></td>
                    <td><?= $value["penerbit"]; ?></td>
                    <td><?= $value["tahun"]; ?></td>
                </tr>
            <?php
            }
        } else {
            ?>
        <tr>
            <td colspan="5">Data tidak ada</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</center>
</body>
</html>