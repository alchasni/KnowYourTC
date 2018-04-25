<?php

use Illuminate\Database\Seeder;
use App\ajar;
use App\dosen;
use App\lab;
use App\mhs;
use App\mk;
use App\network;
use App\pertanyaans;
use App\rooms;
use App\User;
class DummySeeder extends Seeder
{
     public function run()
    {

        $pict=["img/13/Adi_Wicaksana.PNG","img/13/Anwar_Rosyidi.PNG","img/13/Ardi_Nusawan.PNG","img/13/Arianto_Wibowo.PNG","img/13/Azkaa_Khoiruddin.PNG","img/13/Daniel_Bintar_Sijabat.PNG","img/13/Dewangga_Winardi_Winasforcepta.PNG","img/13/Fendy_Purnomo.PNG","img/13/Imagine_Arabella.PNG","img/13/Irsyad_Iswanda.PNG","img/13/John_Stephanus_Peter.PNG","img/13/Julio_Anthony_Leonard.PNG","img/13/Kevin_Zulkarnain_Yuseti.PNG","img/13/Muhammad_Ghufron.PNG","img/13/Nida_Amalia.PNG","img/13/Ridho_Perdana.PNG","img/13/Rizqi_okta_ekoputris.PNG","img/13/Ronald_Gunawan.PNG","img/13/Ronauli_Silva_Natalensis_Sidabukke.PNG","img/13/Yahya_eka_Nugyasa.PNG","img/14/Abdul_Majid_Hasani.jpg","img/14/Afif_Ridho_Kamal_Putra.jpg","img/14/Afifah_Asmar_Sari.jpg","img/14/Aldhia_Muafa.jpg","img/14/Andri_Ersarly_Raisha.jpg","img/14/Anindita_Larasati.jpg","img/14/Anne_Annisa_Aulia.jpg","img/14/Aviananda_Dwirahma.jpg","img/14/Bayu_Sektiaji.jpg","img/14/Desy_Nurbaiti_Rahmi.jpg","img/14/Dewangga_Okta.jpg","img/14/Farhan_Maulana.jpg","img/14/Fikry_Khairitamim.jpg","img/14/Fourir_Akbar.jpg","img/14/Ghaly_Aditya.jpg","img/14/Gllen_Allan.jpg","img/14/Hari_Setiawan.jpg","img/14/Hilma_Kamilah.jpg","img/14/Humaira_Tri_Acantya.jpg","img/14/Irfan_Hanif.jpg","img/14/Kania_Amalia.jpg","img/14/Kevin_Alif_Fachreza.jpg","img/14/Muhammad_Ghazian.jpg","img/14/Muhammad_Hanif.jpg","img/14/Nafia_Rizky_Yoganaya.jpg","img/14/Nezar_Mahardika.jpg","img/14/Panji_Rimawan.jpg","img/14/Petrus_Damianus_Sammy_Wiyadi.jpg","img/14/Pramudito_Hapriarso.jpg","img/14/Prasetyo_Nugrohadi.jpg","img/14/Rafiar_Rahmansyah.jpg","img/14/Rahmat_Rijal.jpg","img/14/Rahmatin_Nadia.jpg","img/14/Rani_Aulia.jpg","img/14/Rayhan_Gema_Ruzman.jpg","img/14/Rifqi_Maulana_Iqbal.jpg","img/14/Rina_Wijaya.jpg","img/14/Rizky_Fenaldo_Maulana.jpg","img/14/Sabila_Malahati_Arnindya.jpg","img/14/Setyassida_Novian_Putra_Damara.jpg","img/14/Vinsensia_Sipriana_Zega.jpg","img/14/Widhi_Mahaputra.jpg","img/15/Adam_Alfian.jpg","img/15/Agatha_Putri_Adwitya.jpg","img/15/Alfindio_Muhammad_Abdallah.jpg","img/15/Anindya_Hantari.jpg","img/15/Anisa_Putri_Diana.jpg","img/15/Astrid_Febrianca.jpg","img/15/Bagus_Dharma.jpg","img/15/Brian_Rainer.jpg","img/15/Cahya_Putra_Hikmawan.jpg","img/15/Cynthia_Dewi.jpg","img/15/Dicky_Kaisar_Utomo.jpg","img/15/Eko_Puji_Pramono_Wicaksono.jpg","img/15/Fajar_Maulana_Firdaus.jpg","img/15/Faturrahman_Ma'aruf.jpg","img/15/Fauzan_Abid_Ramadhan.jpg","img/15/Findryan_Kurnia_Pradana.jpg","img/15/Firman_Aqil.jpg","img/15/Hania_Maghfira.jpg","img/15/Hero_Akbar_Ahmadi.jpg","img/15/Hidayatul_Munawaroh.jpg","img/15/Julian_Enggario_Putra_Pratama.jpg","img/15/M_Adib_Arinanda.jpg","img/15/M_Azka_Yasin.jpg","img/15/Muhammad_Illham_Hanafi.jpg","img/15/Mutia_Rahmi_Dewi.jpg","img/15/Nahda_Fauziyah_Zahra.jpg","img/15/Narendra_Haryo_Bismo.jpg","img/15/Nuzul_Ristyantika.jpg","img/15/Ariya_Wildan.jpg","img/15/Pradipta_Baskara.jpg","img/15/Purina_Qurota_Ayunin.jpg","img/15/Rafi_Ramadhan.jpg","img/15/Rangga_Senatama_Putra.jpg","img/15/Rogo_Jagat_Alit.jpg","img/15/Rozana_Firdausi.jpg","img/15/Salma_Nurkhafidoh.jpg","img/15/Sirria_Panah_Alam.jpg","img/15/Subhan_Maulana.jpg","img/15/William_Albertus.jpg","img/15/William_Budi.jpg","img/15/Yolanda_Samosir.jpg","img/15/Yuga_Mitra.jpg","img/15/Zahri_Rusli.jpg","img/16/Dandy_Naufaldi.PNG","img/16/Fadli_Wildan.PNG","img/16/Ferdinand_Jason.PNG","img/16/Firman_Maulana.PNG","img/16/Ganendra_Afrasya.PNG","img/16/Honesta_Swandaru.PNG","img/16/Irham_M_Fadhil.PNG","img/16/Ivanda_Zevi_amalia.PNG","img/16/Mikael_Mahendra_Buyung.PNG","img/16/Muhammad_Raihan.PNG","img/16/Naufal_Andira_Perdana.PNG","img/16/Raden_Teja_Kusuma.PNG","img/16/Rifqi_Mukti_Wicaksana.PNG","img/16/Safira_Vanillia_Putri.PNG","img/16/Vincent_Marcello_Dwi_Tanujaya.PNG","img/16/Yoshima_Shima.PNG","img/16/Zahrah_Ayu_Afifah_Febriani.PNG","img/dosen/Agus_Zainal_Arifin.PNG","img/dosen/Arunanto.PNG","img/dosen/Bilqis_Amaliah.PNG","img/dosen/Chastine_Fatichah.PNG","img/dosen/Darlis_Herumurti.PNG","img/dosen/Dwi_Sunaryono.PNG","img/dosen/Fajar_Baskoro.PNG","img/dosen/Henning_Titi_Ciptaningtyas.PNG","img/dosen/Imam_Kuswardyan.PNG","img/dosen/Muchammad_Husni.PNG","img/dosen/Radityo_Anggoro.PNG","img/dosen/Rizky_Januar_Akbar.PNG","img/dosen/Rully_soelaiman.PNG","img/dosen/Sarwosri.PNG","img/dosen/Siti_Rochimah.jpg","img/dosen/Tohari_Ahmad.PNG","img/dosen/Victor_Hariadi.PNG","img/dosen/Yudhi_Purwananto.PNG","img/lab/ajk.jpg","img/lab/alpro.jpg","img/lab/alpro1.jpg","img/lab/alpro2.jpg","img/lab/aula.jpg","img/lab/igs.jpg","img/lab/igs1.jpg","img/lab/kcv.jpg","img/lab/kcv2.jpg","img/lab/kcv3.jpg","img/lab/lp.jpg","img/lab/lp_1.jpg","img/lab/lp_2.jpg","img/lab/lp2.jpg","img/lab/lp2_1.jpg","img/lab/lp2_2.jpg","img/lab/mdl.jpg","img/lab/mdl1.jpg","img/lab/ncc.PNG","img/lab/ncc1.jpg","img/lab/ncc2.jpg","img/lab/ncc3.jpg","img/lab/rbtc.PNG","img/lab/rpl.jpg","img/lab/rpl2.jpg","img/lab/rpl3.jpg","img/lab/tu.PNG"];
        
        $pil1=["Arianto Wibowo","Yahya Eka Nugyasa","Ardi Nusawan","Ronald Gunawan","Fendy Purnomo","Anwar Rosyidi","Anwar Rosyidi","Fendy Purnomo","Rizqi Okta Ekoputris","Irsyad Iswanda","Julio Anthony Leonard","Julio Anthony Leonard","Irsyad Iswanda","Ridho Perdana","Rizqi Okta Ekoputris","Ridho Perdana","Julio Anthony Leonard","Fendy Purnomo","Rizqi okta ekoputris","Yahya eka Nugyasa","Abdul Majid Hasani","Bayu Sektiaji","Rayhan Gema Ruzman","Aldhia Muafa","Aldhia Muafa","Anindita Larasati","Fourir Akbar","Aviananda Dwirahma","Anindita Larasati","Rina Wijaya","Dewangga Okta","Nezar Mahardika","Anindita Larasati","Fourir Akbar","Desy Nurbaiti Rahmi","Gllen Allan","Hilma Kamilah","Hilma Kamilah","Farhan Maulana","Afifah Asmar Sari","Kania Amalia","Kania Amalia","Afifah Asmar Sari","Muhammad Hanif","Muhammad Hanif","Humaira Tri Acantya","Panji Rimawan","Nafia Rizky Yoganaya","Panji Rimawan","Prasetyo Nugrohadi","Gllen Allan","Petrus Damianus Sammy Wiyadi","Rahmatin Nadia","Rafiar Rahmansyah","Aviananda Dwirahma","Rahmatin Nadia","Rina Wijaya","Sabila Malahati Arnindya","Prasetyo Nugrohadi","Rizky Fenaldo Maulana","Vinsensia Sipriana Zega","Rayhan Gema Ruzman","Adam Alfian","Rangga Senatama Putra","Cynthia Dewi","Anindya Hantari","Rafi Ramadhan","Astrid Febrianca","Faturrahman Ma'aruf","Dicky Kaisar Utomo","Agatha Putri Adwitya","Eko Puji Pramono Wicaksono","Julian Enggario Putra Pratama","Eko Puji Pramono Wicaksono","Muhammad Illham Hanafi","Hidayatul Munawaroh","Alfindio Muhammad Abdallah","Agatha Putri Adwitya","Nahda Fauziyah Zahra","Julian Enggario Putra Pratama","Hero Akbar Ahmadi","Mutia Rahmi Dewi","Nuzul Ristyantika","M Adib Arinanda","Nuzul Ristyantika","Cynthia Dewi","Mutia Rahmi Dewi","Pradipta Baskara","Hania Maghfira","Nuzul Ristyantika","Findryan Kurnia Pradana","Bagus Dharma","M Azka Yasin","Rafi Ramadhan","Fajar Maulana Firdaus","Salma Nurkhafidoh","Rozana Firdausi","Hero Akbar Ahmadi","Sirria Panah Alam","William Budi","Yuga Mitra","William Budi","Rozana Firdausi","Yuga Mitra","William Albertus","Ferdinand Jason","Fadli Wildan","Ivanda Zevi amalia","Vincent Marcello Dwi Tanujaya","Ganendra Afrasya","Mikael Mahendra Buyung","Irham M Fadhil","Rifqi Mukti Wicaksana","Yoshima Shima","Ferdinand Jason","Raden Teja Kusuma","Ivanda Zevi amalia","Rifqi Mukti Wicaksana","Safira Vanillia Putri","Yoshima Shima","Yoshima Shima","Ganendra Afrasya","Bilqis Amaliah","Arunanto","Fajar Baskoro","Chastine Fatichah","Agus Zainal Arifin","Dwi Sunaryono","Henning Titi Ciptaningtyas","Imam Kuswardyan","Imam Kuswardyan","Darlis Herumurti","Rully Soelaiman","Fajar Baskoro","Rully soelaiman","Victor Hariadi","Rizky Januar Akbar","Tohari Ahmad","Tohari Ahmad","Siti Rochimah","Ruang TU","ALPRO","LP","ALPRO","MDL","IGS","MDL","Ruang TU","KCV","LP","RBTC","MDL","LP","AJK","MDL","LP","MDL","RBTC","NCC","RPL","KCV","NCC","KCV","RPL","Ruang TU","MDL","Ruang TU"];
        
        $pil2=["Adi Wicaksana","Adi Wicaksana","Azkaa Khoiruddin","Arianto Wibowo","Azkaa Khoiruddin","Adi Wicaksana","Muhammad Ghufron","Yahya eka Nugyasa","Imagine Arabella","Arianto Wibowo","Ardi Nusawan","Anwar Rosyidi","Ardi Nusawan","Muhammad Ghufron","Ronauli Silva Natalensis Sidabukke","Yahya eka Nugyasa","Rizqi okta ekoputris","Yahya eka Nugyasa","Imagine Arabella","Ardi Nusawan","Rayhan Gema Ruzman","Afifah Asmar Sari","Afifah Asmar Sari","Abdul Majid Hasani","Afif Ridho Kamal Putra","Ghaly Aditya","Hari Setiawan","Abdul Majid Hasani","Bayu Sektiaji","Afif Ridho Kamal Putra","Irfan Hanif","Farhan Maulana","Andri Ersarly Raisha","Dewangga Okta","Abdul Majid Hasani","Hari Setiawan","Humaira Tri Acantya","Andri Ersarly Raisha","Humaira Tri Acantya","Fikry Khairitamim","Bayu Sektiaji","Anindita Larasati","Farhan Maulana","Muhammad Ghazian","Nafia Rizky Yoganaya","Dewangga Okta","Ghaly Aditya","Petrus Damianus Sammy Wiyadi","Nafia Rizky Yoganaya","Fourir Akbar","Rafiar Rahmansyah","Irfan Hanif","Nafia Rizky Yoganaya","Nezar Mahardika","Panji Rimawan","Rifqi Maulana Iqbal","Prasetyo Nugrohadi","Rani Aulia","Rafiar Rahmansyah","Petrus Damianus Sammy Wiyadi","Rina Wijaya","Widhi Mahaputra","Anisa Putri Diana","Agatha Putri Adwitya","Astrid Febrianca","Agatha Putri Adwitya","Anisa Putri Diana","Narendra Haryo Bismo","Adam Alfian","Brian Rainer","Cahya Putra Hikmawan","Rafi Ramadhan","Dicky Kaisar Utomo","Yuga Mitra","Firman Aqil","Faturrahman Ma'aruf","Zahri Rusli","M Adib Arinanda","Firman Aqil","Zahri Rusli","Eko Puji Pramono Wicaksono","Hidayatul Munawaroh","Brian Rainer","Agatha Putri Adwitya","M Azka Yasin","Agatha Putri Adwitya","Ariya Wildan","Nahda Fauziyah Zahra","Fauzan Abid Ramadhan","Anisa Putri Diana","Ariya Wildan","Alfindio Muhammad Abdallah","M Adib Arinanda","Firman Aqil","Mutia Rahmi Dewi","Rogo Jagat Alit","Rangga Senatama Putra","Salma Nurkhafidoh","Hidayatul Munawaroh","Ariya Wildan","William Albertus","Pradipta Baskara","Mutia Rahmi Dewi","Rangga Senatama Putra","Zahri Rusli","Ganendra Afrasya","Dandy Naufaldi","Ferdinand Jason","Naufal Andira Perdana","Dandy Naufaldi","Irham M Fadhil","Yoshima Shima","Firman Maulana","Mikael Mahendra Buyung","Irham M Fadhil","Fadli Wildan","Honesta Swandaru","Rifqi Mukti Wicaksana","Muhammad Raihan","Ferdinand Jason","Safira Vanillia Putri","Zahrah Ayu Afifah Febriani","Agus Zainal Arifin","Dwi Sunaryono","Muchammad Husni","Imam Kuswardyan","Radityo Anggoro","Muchammad Husni","Fajar Baskoro","Dwi Sunaryono","Agus Zainal Arifin","Rizky Januar Akbar","Radityo Anggoro","Rizky Januar Akbar","Imam Kuswardyan","Agus Zainal Arifin","Tohari Ahmad","Arunanto","Victor Hariadi","Rizky Januar Akbar","AJK","IGS","AJK","IGS","AJK","RBTC","IGS","RBTC","RBTC","KCV","AJK","Ruang TU","IGS","NCC","LP2","IGS","AJK","RPL","Ruang TU","NCC","RBTC","Ruang TU","RPL","MDL","RPL","LP","RBTC"];
        
        $pil3=["Daniel Bintar Sijabat","Anwar Rosyidi","Anwar Rosyidi","Adi Wicaksana","John Stephanus Peter","Daniel Bintar Sijabat","Azkaa Khoiruddin","Adi Wicaksana","Ronauli Silva Natalensis Sidabukke","Adi Wicaksana","John Stephanus Peter","Dewangga Winardi WInasforcepta","Azkaa Khoiruddin","Adi Wicaksana","Nida Amalia","Anwar Rosyidi","Ardi Nusawan","Ronald Gunawan","Nida Amalia","Daniel Bintar Sijabat","Sabila Malahati Arnindya","Afif Ridho Kamal Putra","Rina Wijaya","Kania Amalia","Andri Ersarly Raisha","Humaira Tri Acantya","Farhan Maulana","Andri Ersarly Raisha","Anne Annisa Aulia","Desy Nurbaiti Rahmi","Muhammad Hanif","Aviananda Dwirahma","Fikry Khairitamim","Afif Ridho Kamal Putra","Bayu Sektiaji","Anne Annisa Aulia","Dewangga Okta","Hari Setiawan","Fikry Khairitamim","Irfan Hanif","Gllen Allan","Kevin Alif Fachreza","Anne Annisa Aulia","Kevin Alif Fachreza","Hilma Kamilah","Nezar Mahardika","Gllen Allan","Desy Nurbaiti Rahmi","Pramudito Hapriarso","Kania Amalia","Muhammad Hanif","Rahmat Rijal","Rahmat Rijal","Rani Aulia","Rahmat Rijal","Petrus Damianus Sammy Wiyadi","Rahmat Rijal","Rifqi Maulana Iqbal","Pramudito Hapriarso","Fourir Akbar","Setyassida Novian Putra Damara","Rafiar Rahmansyah","Astrid Febrianca","Bagus Dharma","Alfindio Muhammad Abdallah","Fajar Maulana Firdaus","Muhammad Illham Hanafi","Nahda Fauziyah Zahra","Bagus Dharma","Anisa Putri Diana","Fauzan Abid Ramadhan","Purina Qurota Ayunin","Adam Alfian","Hania Maghfira","Brian Rainer","Adam Alfian","Fauzan Abid Ramadhan","M Azka Yasin","Faturrahman Ma'aruf","Anindya Hantari","Pradipta Baskara","Cynthia Dewi","Rafi Ramadhan","Bagus Dharma","Rogo Jagat Alit","Muhammad Illham Hanafi","Hero Akbar Ahmadi","Faturrahman Ma'aruf","Narendra Haryo Bismo","Purina Qurota Ayunin","Hero Akbar Ahmadi","Pradipta Baskara","Julian Enggario Putra Pratama","Purina Qurota Ayunin","Anindya Hantari","Firman Aqil","M Azka Yasin","Agatha Putri Adwitya","M Adib Arinanda","Subhan Maulana","Rogo Jagat Alit","Muhammad Illham Hanafi","Rogo Jagat Alit","Narendra Haryo Bismo","Nuzul Ristyantika","Dandy Naufaldi","Muhammad Raihan","Honesta Swandaru","Firman Maulana","Fadli Wildan","Safira Vanillia Putri","Dandy Naufaldi","Vincent Marcello Dwi Tanujaya","Honesta Swandaru","Muhammad Raihan","Mikael Mahendra Buyung","Muhammad Raihan","Ganendra Afrasya","Ivanda Zevi amalia","Vincent Marcello Dwi Tanujaya","Raden Teja Kusuma","Firman Maulana","Rully soelaiman","Chastine Fatichah","Bilqis Amaliah","Tohari Ahmad","Rully soelaiman","Arunanto","Siti Rochimah","Darlis Herumurti","Chastine Fatichah","Sarwosri","Bilqis Amaliah","Dwi Sunaryono","Arunanto","Sarwosri","Chastine Fatichah","Fajar Baskoro","Bilqis Amaliah","Radityo Anggoro","KCV","RBTC","ALPRO","KCV","NCC","AJK","NCC","KCV","AJK","LP2","LP","RBTC","LP2","Ruang TU","RPL","LP2","ALPRO","MDL","LP2","AJK","NCC","ALPRO","AJK","LP","IGS","RPL","AJK"];
        
        $pil4=["Ardi Nusawan","Fendy Purnomo","John Stephanus Peter","John Stephanus Peter","Dewangga Winardi Winasforcepta","Ardi Nusawan","Dewangga Winardi Winasforcepta","Irsyad Iswanda","Nida Amalia","Kevin Zulkarnain Yuseti","Daniel Bintar Sijabat","Yahya eka Nugyasa","Kevin Zulkarnain Yuseti","Ardi Nusawan","Imagine Arabella","Arianto Wibowo","Irsyad Iswanda","Dewangga Winardi Winasforcepta","Ronauli Silva Natalensis Sidabukke","Dewangga Winardi WInasforcepta","Widhi Mahaputra","Rani Aulia","Irfan Hanif","Rizky Fenaldo Maulana","Hilma Kamilah","Aldhia Muafa","Anne Annisa Aulia","Widhi Mahaputra","Rahmatin Nadia","Aldhia Muafa","Rifqi Maulana Iqbal","Ghaly Aditya","Vinsensia Sipriana Zega","Kevin Alif Fachreza","Ghaly Aditya","Rifqi Maulana Iqbal","Hari Setiawan","Setyassida Novian Putra Damara","Muhammad Ghazian","Vinsensia Sipriana Zega","Desy Nurbaiti Rahmi","Abdul Majid Hasani","Muhammad Ghazian","Setyassida Novian Putra Damara","Muhammad Ghazian","Aviananda Dwirahma","Pramudito Hapriarso","Fikry Khairitamim","Vinsensia Sipriana Zega","Pramudito Hapriarso","Nezar Mahardika","Kevin Alif Fachreza","Prasetyo Nugrohadi","Panji Rimawan","Rayhan Gema Ruzman","Rani Aulia","Rizky Fenaldo Maulana","Rizky Fenaldo Maulana","Sabila Malahati Arnindya","Setyassida Novian Putra Damara","Sabila Malahati Arnindya","Rahmatin Nadia","Yuga Mitra","Anindya Hantari","Yolanda Samosir","Dicky Kaisar Utomo","William Budi","Rozana Firdausi","Fajar Maulana Firdaus","William Albertus","Findryan Kurnia Pradana","Cynthia Dewi","Fauzan Abid Ramadhan","Subhan Maulana","Fajar Maulana Firdaus","Dicky Kaisar Utomo","Rozana Firdausi","Findryan Kurnia Pradana","Salma Nurkhafidoh","Hania Maghfira","Yolanda Samosir","Salma Nurkhafidoh","Julian Enggario Putra Pratama","Sirria Panah Alam","Astrid Febrianca","Eko Puji Pramono Wicaksono","Alfindio Muhammad Abdallah","Subhan Maulana","Brian Rainer","Hidayatul Munawaroh","Sirria Panah Alam","Findryan Kurnia Pradana","Purina Qurota Ayunin","William Budi","Rangga Senatama Putra","Sirria Panah Alam","Hania Maghfira","William Albertus","Narendra Haryo Bismo","Yolanda Samosir","Nahda Fauziyah Zahra","Zahri Rusli","Yolanda Samosir","Subhan Maulana","Ariya Wildan","Firman Maulana","Mikael Mahendra Buyung","Rifqi Mukti Wicaksana","Raden Teja Kusuma","Naufal Andira Perdana","Honesta Swandaru","Zahrah Ayu Afifah Febriani","Ivanda Zevi Amalia","Naufal Andira Perdana","Safira Vanillia Putri","Naufal Andira Perdana","Raden Teja Kusuma","Vincent Marcello Dwi Tanujaya","Irham M Fadhil","Zahrah Ayu Afifah Febriani","Fadli Wildan","Raden Teja Kusuma","Darlis Herumurti","Sarwosri","Henning Titi Ciptaningtyas","Yudhi Purwananto","Darlis Herumurti","Yudhi Purwananto","Sarwosri","Henning Titi Ciptaningtyas","Yudhi Purwananto","Muchammad Husni","Victor Hariadi","Siti Rochimah","Muchammad Husni","Radityo Anggoro","Siti Rochimah","Victor Hariadi","Henning Titi Ciptaningtyas","Yudhi Purwananto","AULA","ALPRO","NCC","RPL","AULA","LP","KCV","LP","RPL","LP","LP2","LP","RPL","LP2","NCC","RBTC","NCC","NCC","ALPRO","KCV","AULA","LP2","RBTC","AJK","RBTC","ALPRO","LP2"];

        $bnr=["2","3","1","2","2","3","4","1","2","1","3","1","4","2","3","1","2","3","4","1","1","3","2","1","3","1","4","1","2","3","1","2","3","1","4","1","4","1","2","3","1","3","4","1","2","3","1","2","3","1","2","3","1","3","4","2","1","4","4","4","1","2","1","2","3","1","2","1","3","2","1","4","2","1","4","2","3","4","2","4","1","2","4","1","2","3","1","2","3","1","2","3","4","1","4","2","1","2","1","3","2","1","4","1","2","3","1","2","3","1","4","1","4","2","3","4","4","2","1","3","1","2","2","1","3","1","4","1","2","4","1","4","2","2","1","3","4","1","2","4","2","1","3","1","4","1","2","3","1","2","3","4","1","4","2","3","1","3","1","2","3","1","4","1","2","3","1"];

        $prtny=["Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa ini?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Siapa beliau?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?","Tempat apa ini?"];


        $i=0;
        
        while($i<166){
        $use=new pertanyaans;
        $use->id_pertanyaan=$i;
        $use->pilihan1=$pil1[$i];
        $use->pilihan2=$pil2[$i];
        $use->pilihan3=$pil3[$i];
        $use->pilihan4=$pil4[$i];
        $use->benar=$bnr[$i];
        $use->soal=$prtny[$i];
        $use->foto=$pict[$i];
        $use->save();
        $i++;
        
        }
        $i=0;
        
        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="0";
        $use->pertanyaan2="21";
        $use->pertanyaan3="33";
        $use->pertanyaan4="46";
        $use->pertanyaan5="64";
        $use->pertanyaan6="85";
        $use->pertanyaan7="109";
        $use->pertanyaan8="128";
        $use->pertanyaan9="160";
        $use->pertanyaan10="162";
        $use->pertanyaan11="88";
        $use->pertanyaan12="53";
        $use->pertanyaan13="2";
        $use->pertanyaan14="100";
        $use->pertanyaan15="110";
        $use->save();
        $i++;
        
        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="39";
        $use->pertanyaan2="122";
        $use->pertanyaan3="146";
        $use->pertanyaan4="28";
        $use->pertanyaan5="73";
        $use->pertanyaan6="120";
        $use->pertanyaan7="140";
        $use->pertanyaan8="42";
        $use->pertanyaan9="59";
        $use->pertanyaan10="90";
        $use->pertanyaan11="15";
        $use->pertanyaan12="31";
        $use->pertanyaan13="117";
        $use->pertanyaan14="9";
        $use->pertanyaan15="107";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="49";
        $use->pertanyaan2="148";
        $use->pertanyaan3="35";
        $use->pertanyaan4="126";
        $use->pertanyaan5="1";
        $use->pertanyaan6="82";
        $use->pertanyaan7="45";
        $use->pertanyaan8="114";
        $use->pertanyaan9="11";
        $use->pertanyaan10="80";
        $use->pertanyaan11="94";
        $use->pertanyaan12="19";
        $use->pertanyaan13="25";
        $use->pertanyaan14="155";
        $use->pertanyaan15="69";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="93";
        $use->pertanyaan2="97";
        $use->pertanyaan3="5";
        $use->pertanyaan4="115";
        $use->pertanyaan5="44";
        $use->pertanyaan6="18";
        $use->pertanyaan7="23";
        $use->pertanyaan8="105";
        $use->pertanyaan9="57";
        $use->pertanyaan10="32";
        $use->pertanyaan11="40";
        $use->pertanyaan12="165";
        $use->pertanyaan13="79";
        $use->pertanyaan14="65";
        $use->pertanyaan15="131";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="13";
        $use->pertanyaan2="111";
        $use->pertanyaan3="129";
        $use->pertanyaan4="98";
        $use->pertanyaan5="103";
        $use->pertanyaan6="83";
        $use->pertanyaan7="72";
        $use->pertanyaan8="81";
        $use->pertanyaan9="43";
        $use->pertanyaan10="89";
        $use->pertanyaan11="60";
        $use->pertanyaan12="52";
        $use->pertanyaan13="157";
        $use->pertanyaan14="136";
        $use->pertanyaan15="156";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="95";
        $use->pertanyaan2="41";
        $use->pertanyaan3="112";
        $use->pertanyaan4="4";
        $use->pertanyaan5="133";
        $use->pertanyaan6="17";
        $use->pertanyaan7="20";
        $use->pertanyaan8="55";
        $use->pertanyaan9="36";
        $use->pertanyaan10="152";
        $use->pertanyaan11="50";
        $use->pertanyaan12="86";
        $use->pertanyaan13="78";
        $use->pertanyaan14="164";
        $use->pertanyaan15="63";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="84";
        $use->pertanyaan2="3";
        $use->pertanyaan3="47";
        $use->pertanyaan4="158";
        $use->pertanyaan5="34";
        $use->pertanyaan6="92";
        $use->pertanyaan7="27";
        $use->pertanyaan8="70";
        $use->pertanyaan9="106";
        $use->pertanyaan10="24";
        $use->pertanyaan11="119";
        $use->pertanyaan12="58";
        $use->pertanyaan13="7";
        $use->pertanyaan14="12";
        $use->pertanyaan15="141";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="125";
        $use->pertanyaan2="6";
        $use->pertanyaan3="135";
        $use->pertanyaan4="154";
        $use->pertanyaan5="113";
        $use->pertanyaan6="14";
        $use->pertanyaan7="104";
        $use->pertanyaan8="29";
        $use->pertanyaan9="151";
        $use->pertanyaan10="37";
        $use->pertanyaan11="56";
        $use->pertanyaan12="38";
        $use->pertanyaan13="91";
        $use->pertanyaan14="75";
        $use->pertanyaan15="66";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="108";
        $use->pertanyaan2="77";
        $use->pertanyaan3="163";
        $use->pertanyaan4="8";
        $use->pertanyaan5="10";
        $use->pertanyaan6="139";
        $use->pertanyaan7="68";
        $use->pertanyaan8="161";
        $use->pertanyaan9="48";
        $use->pertanyaan10="54";
        $use->pertanyaan11="62";
        $use->pertanyaan12="137";
        $use->pertanyaan13="30";
        $use->pertanyaan14="51";
        $use->pertanyaan15="22";
        $use->save();
        $i++;

        $use=new rooms;
        $use->id_room=$i;
        $use->pertanyaan1="16";
        $use->pertanyaan2="99";
        $use->pertanyaan3="26";
        $use->pertanyaan4="130";
        $use->pertanyaan5="116";
        $use->pertanyaan6="61";
        $use->pertanyaan7="67";
        $use->pertanyaan8="87";
        $use->pertanyaan9="96";
        $use->pertanyaan10="121";
        $use->pertanyaan11="142";
        $use->pertanyaan12="144";
        $use->pertanyaan13="74";
        $use->pertanyaan14="127";
        $use->pertanyaan15="71";
        $use->save();
        $i++;
    }
}
