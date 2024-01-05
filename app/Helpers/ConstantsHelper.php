<?php

namespace App\Helpers;

class ConstantsHelper {

    // Status code response
    const STATUS_SUCCESS = 200;
    const STATUS_ERR_SERVER = 500;
    const STATUS_ERR_VALIDATION = 422;
    const STATUS_ERR_UNAUTHORIZED = 401;

    // Status messasges response
    const MSG_SUCCESS_GET = 'Sukses!';
    const MSG_SUCCESS_SAVE = 'Data berhasil disimpan!';
    const MSG_SUCCESS_DELETE = 'Data berhasil dihapus!';
    const MSG_ERR_SERVER = 'Terjadi kesalahan pada server';
    const MSG_ERR_GET = 'Data tidak ditemukan!';
    const MSG_ERR_SAVE = 'Data gagal disimpan!';
    const MSG_ERR_DELETE = 'Data gagal dihapus!';
    const MSG_ERR_VALIDATION = 'Input data dengan benar!';

    // Status transaksi peminjaman buku
    // const BLM_APPROVE = 0;
    // const SDH-APPROVE = 1;
    // const DIPINJAM = 2;
    // const DIKEMBALIKAN = 3;
    // const SELESAI = 4;


}
