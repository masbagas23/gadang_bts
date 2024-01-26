## Technical Test BTS ID
Halo, nama saya Gadang Bagasraga. Saya merupakan calon kandidat karyawan Backend Developer untuk PT BTS ID. Berikut merupakan hasil dari pengerjaan dari tugas technical test yang telah diberikan.

Teknologi yang saya gunakan, yaitu :
 1. PHP
 2. Laravel Framework
 3. DB MySQL
 4. Ubuntu 22.04 
 5. Postman

## Instalasi Aplikasi

 1. `git clone https://github.com/masbagas23/gadang_bts_id.git`
 2. `cd gadang_bts_id`
 3. `composer install`
 4. `cp .env.example .env`
 5. edit file .env dan sesuaikan koneksi DB MySQL nya `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
 6. `php artisan migrate`
 7. `php artisan jwt:secret` 
 8. `php artisan key:generate`
 9. `php artisan server`
