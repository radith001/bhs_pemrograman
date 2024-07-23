import tkinter as tk
from tkinter import messagebox

root = tk.Tk()
root.title("GUI")

def tampilkan_pesan():
    messagebox.showinfo("Pesan", "Hello world")

label = tk.Label(root, text="Selamat datang di Aplikasi GUI Sederhana")
label.pack(pady=10)

tombol = tk.Button(root, text="Klik Saya", command=tampilkan_pesan)
tombol.pack(pady=5)

root.mainloop()
