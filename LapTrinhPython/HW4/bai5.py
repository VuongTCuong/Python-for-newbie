def bai5():
    A = []
    n = int(input('Nhap so phan tu:'))
    for i in range (0,n):
        x = int(input('Nhap phan tu thu {i}: '))
        A.append(x)
    print(A)
def albai5():
    A = []
    while True:
        x = int(input('Nhap phan tu: '))
        A.append(x)
        if x == -1:
            break
    print(A)
if __name__ == '__main__':
    albai5()