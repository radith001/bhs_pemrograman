def bagi_angka(a, b):
    try:
        hasil = a / b
    except ZeroDivisionError:
        print("Kesalahan: Pembagian dengan nol tidak diperbolehkan.")
        return None
    except TypeError:
        print("Kesalahan: Kedua argumen harus berupa angka.")
        return None
    else:
        return hasil
    finally:
        print("Operasi pembagian selesai.")

print(bagi_angka(10, 2))  
print(bagi_angka(10, 0)) 
print(bagi_angka(10, 'a'))  
