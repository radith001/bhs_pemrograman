#include <iostream>
#include <iomanip>
#include <cstdlib>

using namespace std;

int main() {
    
    int PecelLele = 20000, NasiGoreng = 15000;
    
    int EsTeh = 4000, Airputih = 3000, Kopi = 5000;
    
    int total = 0;
    int total_order_makan = 0;
    int total_order_minum = 0;
    string order = "";
    string minum_ = "";
    string tipe_makan = "";
    string tipe_minum = "";
    int uang_pelanggan = 0;

    system("cls");
    cout << "==Selamat datang==\n";
    cout << "Masukkan Nama Pemesan : ";
    string nama;
    cin >> nama;

    system("cls");
    cout << "Menu Makanan :\n";
    cout << "1. Pecel Lele\n2. Nasi goreng\n";
    cout << "Pilihan menu : ";
    int menu;
    cin >> menu;

    if (menu == 1) {
        cout << "Pecel Lele = 20.000Rp\n";
        cout << "\nMasukkan Jumlah Pesanan : ";
        int jumlahpecellele;
        cin >> jumlahpecellele;
        total += PecelLele * jumlahpecellele;
        order += "Pecel Lele";
        total_order_makan += jumlahpecellele;
    } else if (menu == 2) {
        cout << "Nasi Goreng = 15.000Rp\n";
        cout << "massukan jumlah Pesanan :  ";
        int jumlahnasigoreng;
        cin >> jumlahnasigoreng;
        total += NasiGoreng * jumlahnasigoreng;
        order += "Nasi Goreng";
        total_order_makan += jumlahnasigoreng;
    } else {
        cout << "Menu tidak valid :(";
    }

    system("cls");
    cout << "Menu Minuman :\n";
    cout << "1. Es Teh\n2. Air Putih\n3. Kopi\n";
    cout << "Pilihan : ";
    int minum;
    cin >> minum;

    if (minum == 1) {
        cout << "Es Teh = 4.000Rp\n";
        cout << "Masukkan jumlah Pesanan : ";
        int jumlahesteh;
        cin >> jumlahesteh;
        total += EsTeh * jumlahesteh;
        minum_ += "Es Teh";
        total_order_minum += jumlahesteh;
    } else if (minum == 2) {
        cout << "Air Putih = 3.000Rp\n";
        cout << "Masukkan jumlah Pesanan : ";
        int jumlahairputih;
        cin >> jumlahairputih;
        total += Airputih * jumlahairputih;
        minum_ += "Air Putih";
        total_order_minum += jumlahairputih;
    } else if (minum == 3) {
        cout << "Kopi = 5.000Rp\n";
        cout << "Masukkan jumlah Pesanan : ";
        int jumlahkopi;
        cin >> jumlahkopi;
        total += Kopi * jumlahkopi;
        minum_ += "Kopi";
        total_order_minum += jumlahkopi;
    } else {
        cout << "Menu Tidak Valid :(";
    }

    system("cls");
    cout << "Total Pesanan        : " << total << endl;
    cout << "Masukkan uang Bayar  : ";
    int bayar;
    cin >> bayar;
    uang_pelanggan += bayar;
    int kembalian = uang_pelanggan - total;

    while (uang_pelanggan < total) {
        system("cls");
        cout << "Maaf, uang bayar kurang." << endl;
        cout << "Total Pesanan  :Rp " << fixed << setprecision(2) << total << ",-" << endl;
        cout << "Uang Anda      :Rp " << fixed << setprecision(2) << uang_pelanggan << ",-" << endl;
        cout << "Kekurangan     :Rp " << fixed << setprecision(2) << total - uang_pelanggan << ",-" << endl;

        cout << "\nPilihan:" << endl;
        cout << "1. Tambah uang" << endl;
        cout << "2. Keluar" << endl;

        int pilihan;
        cout << "Masukkan pilihan (1/2): ";
        cin >> pilihan;

        if (pilihan == 1) {
            cout << "Masukkan jumlah uang tambahan: ";
            int tambah_uang;
            cin >> tambah_uang;
            uang_pelanggan += tambah_uang;
            kembalian = uang_pelanggan - total;
            cout << "Uang Anda sekarang: Rp " << fixed << setprecision(2) << uang_pelanggan << ",-" << endl;
        } else if (pilihan == 2) {
            cout << "Terima kasih!" << endl;
            exit(0);
        } else {
            cout << "Pilihan tidak valid. Program keluar." << endl;
            exit(0);
        }
    }

    system("cls");
    cout << "Pesanan Atas Nama " << nama << endl;
    cout << total_order_makan << " " << order << endl;
    cout << total_order_minum << " " << minum_ << endl;
    cout << "Total Pesanan  :Rp " << fixed << setprecision(2) << total << ",-" << endl;
    cout << "Uang Pelanggan :Rp " << fixed << setprecision(2) << uang_pelanggan << ",-" << endl;
    cout << "Kembalian      :Rp " << fixed << setprecision(2) << kembalian << ",-" << endl;
    cout << "Terima Kasih !!!" << endl;

    return 0;
}
