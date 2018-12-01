<?php

    /**
     * Class Test
     * Class simple yang berisi property name
     * 
     * Silahkan kembangkan dan modifikasi class ini tanpa mengubah 2 method utama, dan property-nya (setName dan getName)
     *
     * 1. Buat satu class untuk mengakses method yang ada didalam "class Test"
     * 2. Buat satu/lebih (menyesuaikan) method yang fungsinya untuk mengakses method setName dan getName dari luar Class yang hanya menerima Request POST
     * 3. Setelah itu buat suatu script js menggunakan AJAX (wajib gunakan jQuery) untuk mengakses Class Test, class dan method yang sudah dibuat sebelumnya
     * 4. Setelah itu tampilkan response dari script yang sudah dibuat di HTML biasa (polos tidak masalah)
     * 5. Response wajib dalam bentuk JSON
     * 6. Hasil response tersebut harap disimpan di DB.
     * 7. Implementasikan semua poin diatas di 5 file yang berbeda. 
     *      keterangan sebagai berikut :
     *      1 file .js,
     *      3 file .php (untuk proses controller, model dan output),
     *      1 file .sql untuk DB.
     * 
     * Penilaian:
     * 1. Bagaimana solusi yang dibuat
     * 2. Bagaimana style menulis code
     * 3. Bagaimana implementasi konsep mvc yang dibuat
     * 4. Bagaimana pemahaman menggunakan PDO dan Transact
     * 5. Bagaimana cara menjelaskan code dengan singkat dan padat tanpa menggunakan komentar terlalu banyak
     * 6. Improvisasi, dan modifikasi sebebas-bebasnya akan menjadi nilai + asalkan masih sesuai dengan poin yang dijelaskan
     */
    class Test {
        
        private $name;

        /**
         * Method setName
         * Proses set value property name
         * @param {string} name
         */
        private function setName($name){
            $this->name = $name;
        }

        /**
         * Method getName
         * Proses get value property name
         * @param {string} result
         */
        private function getName(){
            return "Nama saya adalah ".$this->name;
        }
    }

    