<?php
$conn = mysqli_connect("localhost", "id20952733_azinazirsaputra", "$4]1jshg!Gw2}?Yt", "id20952733_muzakki");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function input($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $paket = htmlspecialchars($data["paket"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $nominal = htmlspecialchars($data["nominal"]);

    $query = "INSERT INTO muzakki 
                VALUES
                ('', '$nama', '$paket', '$kategori', '$nominal')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
