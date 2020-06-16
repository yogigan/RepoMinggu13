<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Send_email extends CI_Controller {
 /**
 * Kirim email dengan SMTP Gmail.
 *
 */
 public function index()
 {
 // Konfigurasi email
 $config = [
 'mailtype' => 'html',
 'charset' => 'utf-8',
 'protocol' => 'smtp',
 'smtp_host' => 'ssl://smtp.gmail.com',
 'smtp_user' => 'bachtiarnuryogipratama@gmail.com', // Ganti dengan email gmail kamu
 'smtp_pass' => 'merdeka17', // Password gmail kamu
 'smtp_port' => 465,
 'crlf' => "\r\n",
 'newline' => "\r\n"
 ];
 // Load library email dan konfigurasinya
 $this->load->library('email', $config);
 // Email dan nama pengirim
 $this->email->from('no-reply@yogigan.com', 'yogigan.com | Bachtiar');
 // Email penerima
 $this->email->to('bachtiarnuryogipratama@gmail.com'); // Ganti dengan email tujuan kamu
 // Lampiran email, isi dengan url/path file
 $this->email->attach('File.png');
 // Subject email
 $this->email->subject('Kirim Email dengan SMTP Gmail');
 // Isi email
 $this->email->message("Ini adalah contoh email 
CodeIgniter yang dikirim menggunakan SMTP email Google
(Gmail).<br><br> Klik <strong><a
href='https://yogigan.com/bachtiar/materi' target='_blank'
rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");
 // Tampilkan pesan sukses atau error
 if ($this->email->send()) {
 echo 'Sukses! email berhasil dikirim.';
 } else {
 echo 'Error! email tidak dapat dikirim.';
 }
 }
}