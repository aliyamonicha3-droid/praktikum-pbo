<?php
// LAB 1 — Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
//              dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    // TODO: tambahkan 2 buku lagi
    ['judul'=> 'Bumi', 'penulis' => 'Tere Liye', 'tahun' => 2014],
    ['judul'=> 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi','tahun' =>2009]
];
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

// 2) Versi OOP
class Buku
{
    // TODO: properti, constructor, dan method info()
    public string $judul;
    public string $penulis;
    public int $tahun;

    public function __construct(string $judul, string $penulis, int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function info(): string
    {
        return "{$this->judul} - {$this->penulis} ({$this->tahun})";
    }
}

// TODO: buat 3 object Buku lalu tampilkan info()-nya
$buku1 = new Buku('Laskar Pelangi','Andrea Hirata', 2005);
$buku2 = new Buku('Bumi', 'Tere Liye' , 2014);
$buku3 = new Buku('Negeri 5 Menara', 'Ahmad Fuadi', 2009);

echo $buku1->info() . "\n";
echo $buku2->info() . "\n";
echo $buku3->info() . "\n";
    'Andrea Hirata',
    2005
);

$buku2 = new Buku(
    'Bumi',
    'Tere Liye',
    2014
);

$buku3 = new Buku(
    'Negeri 5 Menara',
    'Ahmad Fuadi',
    2009
);


// 5. Menyimpan objek buku ke dalam array
$daftarBuku = [
    $buku1,
    $buku2,
    $buku3
];


// 6. Menampilkan seluruh data buku menggunakan OOP
echo "=== PEMROGRAMAN BERORIENTASI OBJEK (OOP) ===\n";

foreach ($daftarBuku as $buku) {
    $buku->info();
}

?>
