import sys

(script, file_path) = sys.argv

f = open(file_path, 'r')
checksum = 0

for line in f:
    numbers = list(map(lambda x: int(x), line.split()))
    checksum += max(numbers) - min(numbers)

print(checksum)
