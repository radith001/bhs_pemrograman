    #include <stdio.h>

void tambah();
void kurang();
void kali();
void bagi();

int main() {
    
    tambah();
    kurang();
    kali();
    bagi();
    return 0;
}

void tambah() {
    int a, b;
    printf("Masukkan angka pertama: ");
    scanf("%d", &a);
    printf("Masukkan angka kedua: ");
    scanf("%d", &b);
    printf("Penjumlahan: %d\n", a + b);
}

void kurang() {
    int a, b;
    printf("Masukkan angka pertama: ");
    scanf("%d", &a);
    printf("Masukkan angka kedua: ");
    scanf("%d", &b);
    printf("Pengurangan: %d\n", a - b);
}

void kali() {
    int a, b;
    printf("Masukkan angka pertama: ");
    scanf("%d", &a);
    printf("Masukkan angka kedua: ");
    scanf("%d", &b);
    printf("Perkalian: %d\n", a * b);
}

void bagi() {
    int a, b;
    printf("Masukkan angka pertama: ");
    scanf("%d", &a);
    printf("Masukkan angka kedua: ");
    scanf("%d", &b);
    if (b != 0) {
        printf("Pembagian: %d\n", a / b);
    } else {
        printf("Pembagian: tidak dapat dibagi dengan nol\n");
    }
}
