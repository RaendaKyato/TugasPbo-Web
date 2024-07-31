<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Menggunakan komponen</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>

<body>
    <center>
        <h1> Belajar Menggunakan Komponen</h1>
    </center>
    <center>=====================================</center>

    <?php
    class user
    {
        //properti global
        public $id, $name, $age, $addres;

        //melakukan konstruksi
        public function __construct($id = null, $name = null, $age = null, $addres = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->addres = $addres;
        }
    }

    class students
    {
        //deklarasi variable global
        public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $kelas;

        public function __construct($datastudents = [])
        {
            //penyetelan 
            $this->id = $datastudents['id'] ?? null;
            $this->nama = $datastudents['nama'] ?? null;
            $this->nilai_pbo = $datastudents['nilai_pbo'] ?? null;
            $this->nilai_web = $datastudents['nilai_web'] ?? null;
            $this->nilai_pkk = $datastudents['nilai_pkk'] ?? null;
            $this->kelas = $datastudents['kelas'] ?? null;
        }

        public function hitungRata()
        {
            return ($this->nilai_pbo + $this->nilai_web + $this->nilai_pkk) / 3;
        }

        public function calculateGrade()
        {
            $average = $this->hitungRata();
            if ($average >= 90 && $average <= 100) {
                return 'A';
            } elseif ($average >= 86 && $average < 90) {
                return 'B+';
            } elseif ($average >= 81 && $average < 86) {
                return 'B';
            } elseif ($average >= 75 && $average < 81) {
                return 'C';
            } elseif ($average >= 70 && $average < 75) {
                return 'D';
            } else {
                return 'Remedial';
            }
        }
    }







    $datastudents = [
        [
            'id' => 1,
            'nama' => 'Asep',
            'nilai_pbo' => 69,
            'nilai_web' => 80,
            'nilai_pkk' => 85,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 2,
            'nama' => 'Budiono',
            'nilai_pbo' => 69,
            'nilai_web' => 69,
            'nilai_pkk' => 96,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 3,
            'nama' => 'Kai',
            'nilai_pbo' => 86,
            'nilai_web' => 50,
            'nilai_pkk' => 69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 4,
            'nama' => 'Cenat',
            'nilai_pbo' => 0,
            'nilai_web' => 35,
            'nilai_pkk' => 0.69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 5,
            'nama' => 'Dwi',
            'nilai_pbo' => 25,
            'nilai_web' => 75,
            'nilai_pkk' => 69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 6,
            'nama' => 'Kiana',
            'nilai_pbo' => 90,
            'nilai_web' => 80,
            'nilai_pkk' => 85,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 7,
            'nama' => 'Ambatukam',
            'nilai_pbo' => 35,
            'nilai_web' => 79,
            'nilai_pkk' => 100,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 8,
            'nama' => 'Gedagedi',
            'nilai_pbo' => 90,
            'nilai_web' => 69,
            'nilai_pkk' => 70,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 9,
            'nama' => 'Mas Faldi',
            'nilai_pbo' => 100,
            'nilai_web' => 100,
            'nilai_pkk' => 90,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 10,
            'nama' => 'Ambatron',
            'nilai_pbo' => 95,
            'nilai_web' => 86,
            'nilai_pkk' => 82,
            'kelas' => "12-RPL"
        ]
    ];

    $students = new students();//deklarasi class menjadi objek
    $liststudents = [];//membuat wadah kosong untuk menampung value array yang dibuat
    
    foreach ($datastudents as $students) {//untuk memecah semua array multi-dimensi ke satu dimensi
        $datastudents = new students($students);//memasukkan semua value variable array yang terpecah ke dalam $datastudents
        $liststudents[] = $datastudents;//memasukkan semua value yang tersimpan dalam $datastudents ke dalam $liststudents
    
    }

    $dataSiswaXII = [];
    foreach ($liststudents as $students) {
        if ($students->kelas == "12-RPL") {
            $dataSiswaXII[] = $students;
        }
    }

    $dataSiswaXI = [];
    foreach ($liststudents as $students) {
        if ($students->kelas == "11-RPL") {
            $dataSiswaXI[] = $students;
        }
    }
    ?>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kelas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai PBO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai Web
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai PKK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai Rata-rata
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Grade
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($liststudents) > 0) {
                    //melakukan looping / mengbongkar data
                    foreach ($liststudents as $key => $siswa) {

                        $rata_rata = $siswa->hitungRata();
                        $grade = $siswa->calculateGrade();
                        $bulat = round($rata_rata);

                        ?>

                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $key + 1; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $siswa->nama; ?>
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $siswa->kelas; ?>
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $siswa->nilai_pbo; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $siswa->nilai_web; ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <?php echo $siswa->nilai_pkk; ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <?php echo $bulat ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <?php echo $grade ?>
                            </td>
                        </tr>
                        <?php
                    }

                } else {
                    echo "
                    <div>
                    Data belum ada
                    </div>
                    ";
                }

                ?>


            </tbody>
        </table>
    </div>

    <h2 class="judul"> Jumlah total semua data siswa : <?php echo count($liststudents) ?> </h2>

</body>

</html>
<style>
    .judul {
        color: aqua;
        font-size=14px;
    }
</style>