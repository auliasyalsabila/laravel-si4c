# TODO - Perbaikan fitur Prodi

- [x] Tambahkan route resource `prodi` di `routes/web.php`.
- [x] Implement `ProdiController@create()` untuk mengirim `$fakultas` ke view.
- [x] Implement `ProdiController@store()` (validasi, simpan, redirect).
- [x] Rapikan `resources/views/prodi/create.blade.php`: hapus HTML doctype/outer body, rapikan tag `form`, ganti action ke `route('prodi.store')`, tambahkan `@csrf`.
- [ ] Jalankan aplikasi / uji form submit.

