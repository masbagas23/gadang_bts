## Technical Test BTS ID
Halo, nama saya Gadang Bagasraga. Saya merupakan calon kandidat karyawan Backend Developer untuk PT BTS ID. Berikut merupakan hasil dari pengerjaan dari tugas technical test yang telah diberikan.

Teknologi yang saya gunakan, yaitu :
 1. PHP
 2. Laravel Framework
 3. DB MySQL
 4. Ubuntu 22.04 
 5. Postman

## Instalasi Aplikasi

 1. `git clone https://github.com/masbagas23/gadang_bts.git`
 2. `cd gadang_bts_id`
 3. `composer install`
 4. `cp .env.example .env`
 5. edit file .env dan sesuaikan koneksi DB MySQL nya `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
 6. `php artisan migrate --seed`
 7. `php artisan jwt:secret` 
 8. `php artisan key:generate`
 9. `php artisan server`
## JSON Web Token
Selama karir saya dibidang programming, saya beberapa kali menggunakan JWT sebagai metode otentikasi pada aplikasi yang saya buat. Sebagian besar JWT saya gunakan untuk mengatur hak akses user dalam mengkonsumsi sebuan end-point dari api itu sendiri. 

Salah satu alasan kenapa JWT pernah saya gunakan, karena JWT dapat dimodifikasi payloadnya dengan disisipi beberapa data yang kita butuhkan kedalam CLAIMS saat generate token nya.

JWT pernah saya gunakan ketika membuat fitur Single Sign On, sehingga satu akun bisa digunakan dibeberapa website/domain. Layanan ini saya buat menggunakan aplikasi third party yaitu KeyCloack.


