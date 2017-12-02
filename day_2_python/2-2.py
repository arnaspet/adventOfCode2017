import sys

(script, file_path) = sys.argv

f = open(file_path, 'r')
checksum = 0

for line in f:
    numbers = list(map(lambda x: int(x), line.split()))
    for divident in numbers:
        for divisor in numbers:
            if divident != divisor and divident % divisor == 0:
                checksum += int(divident / divisor)

print(checksum)
