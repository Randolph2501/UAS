# Data : 
Nama        : Randolph
Nim         : 03081200048
Kelas       : 20SI2
Mata Kuliah : Business Application Programming (BAP)

# 1.Soal:
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar.

Jawaban:
Table yang saya tambahkan adalah offline_store dan location. Dapat diakses pada http://127.0.0.1:8000/admin/offline_store atau melalui sidebar. Nama file yang ditambahkan dapat dilihat pada folder resources/views/admin/location dengan nama file index.blade.php , create.blade.php , edit.blade.php , form.blade.php , show.blade.php beserta controller dan model

# 2.Soal:
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file queryUAS.sql.

Jawaban:
Query View tersebut dapat dilihat pada sidebar yang berjudul location atau dapat dicek melalui http://127.0.0.1:8000/admin/location. Untuk file queryUAS.sql terlampir pada repository Github.

# 3.Soal: 
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan 

Jawaban:
query view bisa dilihat dari  http://127.0.0.1:8000/admin/location yang terdapat button Print PDF. Laporan itu akan digenerate menjadi Laporan PDF dan akan otomatis terdownload. Nama file yang ditambahkan dapat dilihat pada folder resources/views/admin/location dengan nama file index.blade.php dan print_pdf.blade.php Beserta Controller dan Modelnya


# 4.Soal:
Buat validasi data untuk halaman insert dan update soal nomor 1 

Jawaban:
Untuk Validasi daata halaman Insert dan Update dapat dilihat pada folder app/Http/Controllers/Admin/CustomerController. Dimana untuk kolom 'Name' tidak boleh kosong dan juga max 50 karakter, sedangkan 'phone' tidak boleh kosong dan juga harus berupa angka atau numeric.
Code Validasi dapat dilihat dibawah ini:

            $validated = $request->validate([
                'city' => 'required|max:50',
                'location' => 'numeric'
            ]);

# 5.Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github: https://github.com/Randolph2501/UAS