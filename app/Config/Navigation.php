<?php
namespace Config;

class Navigation
{
  public const MENU_ITEMS = [
    [
      "label" => "Dashboard",
      "route" => "",
      "controller" => "Home",
    ],
    [
      "label" => "Studio",
      "route" => "studio",
      "controller" => "Studio",
    ],
    [
      "label" => "Booking",
      "route" => "booking",
      "controller" => "Booking",
    ],
    [
      "label" => "Paket",
      "route" => "paket",
      "controller" => "Paket",
    ],
    [
      "label" => "Barang Tambahan",
      "route" => "barang-tambahan",
      "controller" => "BarangTambahan",
    ],
    [
      "label" => "Membership",
      "route" => "membership",
      "controller" => "Membership",
    ],
    [
      "label" => "Pembayaran",
      "route" => "pembayaran",
      "controller" => "Pembayaran",
    ],
    [
      "label" => "Pengguna",
      "route" => "pengguna",
      "controller" => "Pengguna",
    ],
    [
      "label" => "Tentang Kami",
      "route" => "tentang-kami",
      "controller" => "TentangKami",
    ]
  ];
}
