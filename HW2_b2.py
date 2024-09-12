import math
def songuyento(n):
    if n == 0 or n == 1: return False
    for i in range(2,n):
        if n%i == 0: return False
    return True

def sodoixung(n):
    num = list()
    while n!=0:
        num.extend([n%10])
        n//=10
    if num == num[::-1]:
        return True
    return False

def sohoanthien(n):
    sum = 1
    i = 1
    while sum < n:
        if i * (2*i-1) == n :
            i = 2*i - 1
        else: i = 2*i
        if n%i == 0:
            sum+=i
        else: break
        sum+=i
    if n == sum:
        return True
    return False

def sochinhphuong(n):
    for i in range(1, n):
        if i*i == n :
            return True
    return False

if __name__ == '__main__':
    m = int(input('Nhập số nguyên M: '))
    n = int(input('Nhập số nguyên N: '))
    snt = []
    sdx = []
    sht = []
    scp = []
    for i in range(m,n+1):
        if songuyento(i)==True:
            snt+=[i]
        if sodoixung(i)==True:
            sdx+=[i]
        if sohoanthien(i)==True :
            sht += [i]
        if sochinhphuong(i)==True:
            scp += [i]
    print('Số nguyên tố trong khoảng [{},{}]: '.format(m, n), snt)
    print('Số đối xứng trong khoảng [{},{}]: '.format(m, n), sdx)
    print('Số hoàn thiện trong khoảng [{},{}]: '.format(m, n), sht)
    print('Số chính phương trong khoảng [{},{}]: '.format(m, n), scp)
