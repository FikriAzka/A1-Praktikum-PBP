<?php
    // Nama : Fikri Azka Pradya
    // NIM  : 24060122140171

    function hitung_rata($array) {
        // TODO hitung rata-rata nilai mahasiswa
        $rata_rata = array_sum($array) / count($array);
        return $rata_rata;
    }

    function print_mhs($array_mhs) {
        // TODO tampilkan tabel
        echo '<table border="1">';
        echo '<tr>
                <td>Nama</td>
                <td>Nilai 1</td>
                <td>Nilai 2</td>
                <td>Nilai 3</td>
                <td>Rata2</td>
            </tr>';
        // Iterasi melalui array mahasiswa dan nilai mereka
        foreach ($array_mhs as $nama => $nilai) {
            echo '<tr>';
            echo '<td>' . $nama . '</td>';
            
            // Tampilkan masing-masing nilai
            foreach ($nilai as $n) {
                echo '<td>' . $n . '</td>';
            }

            $rata2 = hitung_rata($nilai);
            echo '<td>' . $rata2 . '</td>';
            echo '<tr>';
        }

        echo '</table>';
    }

    // Array data mahasiswa
    $array_mhs = [
        'Abdul' => [89, 90, 54],
        'Budi' => [78, 60, 64],
        'Nina' => [67, 56, 84],
        'Budi' => [87, 69, 50],
        'Budi' => [98, 65, 74],
    ];

    // Menampilkan data mahasiswa dalam bentuk tabel
    print_mhs($array_mhs);
?>
