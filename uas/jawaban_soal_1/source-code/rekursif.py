def faktorial(n):
    if n == 0:
        return 1
    else:
        return n * faktorial(n - 1)

angka = 5
hasil_faktorial = faktorial(angka)
print(f"Hasil faktorial dari {angka} adalah {hasil_faktorial}")
