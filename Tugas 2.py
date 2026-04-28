# Kasus 1
data = [150, 170, 155, 160, 145]

n = len(data)

for i in range(n):
    for j in range(0, n-i-1): 
        if data[j] > data[j+1]:
            data[j], data[j+1] = data[j+1], data[j]
            
            
print("Hasil akhir:", data)

# Kasus 2
data = [405, 102, 308, 215, 110, 502, 333, 111, 201, 444]

n = len(data)

for i in range(n):
    min_index = i
    for j in range(i+1, n):
        if data[j] < data[min_index]:
            min_index = j

    data[i], data[min_index] = data[min_index], data[i]

print("Hasil akhir:", data)

# Kasus 3
data = [10, 11, 12, 13, 14, 15, 16, 17, 19, 18]

n = len(data)

for i in range(n):
    tukar = False

    for j in range(0, n-i-1):
        if data[j] > data[j+1]:
            data[j], data[j+1] = data[j+1], data[j]
            tukar = True

    if not tukar:
        break

print("Hasil akhir:", data)

# Kasus 4
data = [50000, 15000, 80000, 35000, 20000]

n = len(data)

for i in range(n):
    min_index = i

    for j in range(i+1, n):
        if data[j] < data[min_index]:
            min_index = j

    data[i], data[min_index] = data[min_index], data[i]

print("Hasil akhir:", data)

# Kasus 5
data = [32, 28, 30, 25, 31]

n = len(data)

for i in range(n):
    min_index = i

    for j in range(i+1, n):
        if data[j] < data[min_index]:
            min_index = j

    data[i], data[min_index] = data[min_index], data[i]

print("Hasil akhir:", data)