# Kasus Absensi Kelas
nama = ["Budi", "Sinta", "Rian", "Dodi", "Alya"]
cari = "Rian"

ketemu = False

for i in range(len(nama)):
    if nama[i] == cari:
        print("Nama ditemukan di indeks", i)
        ketemu = True
        break

if ketemu == False:
    print("Nama tidak ditemukan")
    
    
# Kasus Lost and Found
barang = ["Botol", "Tas", "Kunci Motor", "Payung", "Buku"]
cari = "Kunci Motor"

ketemu = False

for i in range(len(barang)):
    if barang[i] == cari:
        print("Barang ditemukan di indeks", i)
        ketemu = True
        break

if ketemu == False:
    print("Barang tidak ditemukan")
    
    
# Kasus Buku Perpustakaan
buku = [100, 102, 105, 108, 110]
cari = 105

awal = 0
akhir = len(buku) - 1
ketemu = False

while awal <= akhir:
    tengah = (awal + akhir) // 2

    if buku[tengah] == cari:
        print("Data ditemukan di indeks", tengah)
        ketemu = True
        break
    elif buku[tengah] < cari:
        awal = tengah + 1
    else:
        akhir = tengah - 1

if ketemu == False:
    print("Data tidak ditemukan")
    
    
# Kasus Ranking Tryout
nilai = [950, 920, 890, 870, 850]
cari = 890

awal = 0
akhir = len(nilai) - 1
ketemu = False

while awal <= akhir:
    tengah = (awal + akhir) // 2

    if nilai[tengah] == cari:
        print("Skor ditemukan di indeks", tengah)
        ketemu = True
        break
    elif nilai[tengah] > cari:
        awal = tengah + 1
    else:
        akhir = tengah - 1

if ketemu == False:
    print("Skor tidak ditemukan")
    

# Kasus Kamus Istilah
kata = ["Algorithma", "Browser", "Database", "Network", "Program"]
cari = "Algorithma"

awal = 0
akhir = len(kata) - 1
ketemu = False

while awal <= akhir:
    tengah = (awal + akhir) // 2

    if kata[tengah] == cari:
        print("Kata ditemukan di indeks", tengah)
        ketemu = True
        break
    elif kata[tengah] < cari:
        awal = tengah + 1
    else:
        akhir = tengah - 1

if ketemu == False:
    print("Kata tidak ditemukan")