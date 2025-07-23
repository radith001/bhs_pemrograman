def reptile_store():
    Iguana = 300000
    VaranusSalvator = 100000
    ReticulatusPython = 80000
    BallPython = 500000
    BeardedDragon = 150000
    total = 0
    total_order_reptile = 0
    order = ""
    uang_pelanggan = 0

    while True:
        print("===> RAJEG REPTILE STORE <===\n")
        print("Ready Stock :")
        print("1. Iguana\n2. Varanus Salvator\n3. Reticulatus Python\n4. Ball Python\n5. Bearded Dragon\n")
        menu = int(input("Pilih reptil yang ingin anda beli : "))

        if menu == 1:
            print("Iguana = 300.000Rp")
            jumlahIguana = int(input("\nMasukkan Jumlah Pesanan : "))
            total += Iguana * jumlahIguana
            order += "Iguana"
            total_order_reptile += jumlahIguana
        elif menu == 2:
            print("Varanus Salvator = 100.000Rp")
            jumlahVaranusSalvator = int(input("\nMasukkan Jumlah Pesanan : "))
            total += VaranusSalvator * jumlahVaranusSalvator
            order += "Varanus Salvator"
            total_order_reptile += jumlahVaranusSalvator
        elif menu == 3:
            print("Reticulatus Python = 80.000Rp")
            jumlahReticulatusPython = int(input("\nMasukkan Jumlah Pesanan : "))
            total += ReticulatusPython * jumlahReticulatusPython
            order += "Reticulatus Python"
            total_order_reptile += jumlahReticulatusPython
        elif menu == 4:
            print("Ball Python = 500.000Rp")
            jumlahBallPython = int(input("\nMasukkan Jumlah Pesanan : "))
            total += BallPython * jumlahBallPython
            order += "Ball Python"
            total_order_reptile += jumlahBallPython
        elif menu == 5:
            print("Bearded Dragon = 150.000Rp")
            jumlahBeardedDragon = int(input("\nMasukkan Jumlah Pesanan : "))
            total += BeardedDragon * jumlahBeardedDragon
            order += "Bearded Dragon"
            total_order_reptile += jumlahBeardedDragon
        else:
            print("Menu tidak valid :(")
            return

        pesan_lagi = input("Apakah Anda ingin memesan lagi? (y/n): ")
        if pesan_lagi.lower() != 'y':
            break

    print("\nTotal Pesanan  : Rp", total)
    bayar = int(input("Masukkan uang Bayar  : "))
    uang_pelanggan += bayar
    kembalian = uang_pelanggan - total

    while uang_pelanggan < total:
        print("\nMaaf, uang bayar kurang.")
        print("Total Pesanan  : Rp", total)
        print("Uang Anda      : Rp", uang_pelanggan)
        print("Kekurangan     : Rp", total - uang_pelanggan)
        print("\nPilihan:")
        print("1. Tambah uang")
        print("2. Keluar")
        pilihan = int(input("Masukkan pilihan (1/2): "))

        if pilihan == 1:
            tambah_uang = int(input("Masukkan jumlah uang tambahan: "))
            uang_pelanggan += tambah_uang
            kembalian = uang_pelanggan - total
            print("Uang Anda sekarang: Rp", uang_pelanggan)
        elif pilihan == 2:
            print("Terima kasih!")
            return
        else:
            print("Pilihan tidak valid. Program keluar.")
            return

    print("\n", total_order_reptile, order)
    print("Total Pesanan  : Rp", total)
    print("Uang Pelanggan : Rp", uang_pelanggan)
    print("Kembalian      : Rp", kembalian)
    print("Terima Kasih !!!")

if __name__ == "__main__":
    reptile_store()
