<?php
require 'Koneksi.php';

// ================= FUNGSI MEMBER =================
function getMembers() {
    $pdo = connectDB();
    $stmt = $pdo->query("SELECT * FROM member");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMemberById($id) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $pdo = connectDB();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)";
    $pdo->prepare($sql)->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $pdo = connectDB();
    $sql = "UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_mendaftar=?, tgl_terakhir_bayar=? WHERE id_member=?";
    $pdo->prepare($sql)->execute([$nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar, $id]);
}

function deleteMember($id) {
    $pdo = connectDB();
    $pdo->prepare("DELETE FROM member WHERE id_member = ?")->execute([$id]);
}

// ================= FUNGSI BUKU =================
function getBuku() {
    $pdo = connectDB();
    return $pdo->query("SELECT * FROM buku")->fetchAll(PDO::FETCH_ASSOC);
}

function getBukuById($id) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    $pdo = connectDB();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)";
    $pdo->prepare($sql)->execute([$judul, $penulis, $penerbit, $tahun]);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $pdo = connectDB();
    $sql = "UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?";
    $pdo->prepare($sql)->execute([$judul, $penulis, $penerbit, $tahun, $id]);
}

function deleteBuku($id) {
    $pdo = connectDB();
    $pdo->prepare("DELETE FROM buku WHERE id_buku = ?")->execute([$id]);
}

// ================= FUNGSI PEMINJAMAN =================
function getPeminjaman() {
    $pdo = connectDB();
    return $pdo->query("SELECT * FROM peminjaman")->fetchAll(PDO::FETCH_ASSOC);
}

function getPeminjamanById($id) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = connectDB();
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)";
    $pdo->prepare($sql)->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali]);
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $pdo = connectDB();
    $sql = "UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?";
    $pdo->prepare($sql)->execute([$id_member, $id_buku, $tgl_pinjam, $tgl_kembali, $id]);
}

function deletePeminjaman($id) {
    $pdo = connectDB();
    $pdo->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?")->execute([$id]);
}
?>