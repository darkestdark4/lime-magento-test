# LimeCommerce Technical Test

Pengerjaan test technical Magento dengan menggunakan WSL Ubuntu.

## Proses Instalasi

Proses instalasi Magento 2 Community Versi 2.4.4 + Sample Data menggunakan composer. Versi PHP menggunakan 7.4.

![instalasi](images/1_instalasi.png)

![sample data](images/2_sample_data.png)

## Pembuatan Module Lime/Sample

Pembuatan halaman baru dengan menampilkan teks Hello World + dengan menu tambahan di navigation bar.

![hello world](images/4a_hello_world.png)

Penambahan menu Home yang mengarah pada halaman utama website (http://local.magento)

![home menu](images/4b_home_menu.png)

## Penambahan Custom Url

Menambahkan konfigurasi custom url menjadi http://local.magento, mulai dari setting virtual host pada WSL Ubuntu, hinggal setting hosts pada windows, supaya link dapat dikenali oleh local device.

![custom url](images/5_custom_url.png)

Hasil :

![result custom url](images/5_prove.png)

## Penambahan Modul Eksternal (Slider)

Menambahan modul eksternal slider, dipasang di bagian bawah website dengan isian custom product yang telah dipilih

![code external module](images/6_code.png)

![sidebar external module](images/6_sidebar_admin.png)

![editor result](images/6_editor.png)

![result](images/6_result.png)
