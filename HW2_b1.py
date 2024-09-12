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
    if n == sum:
        return True
    return False

def sochinhphuong(n):
    for i in range(1, n):
        if i*i == n :
            return True
    return False

if __name__=='__main__':
    n = int(input('Nhập số nguyên n: '))
    print('Số nguyên tố: ',songuyento(n))
    print('Số đối xứng: ',sodoixung(n))
    print('Số hoàn thiện: ',sohoanthien(n))
    print('Số chính phương: ',sochinhphuong(n))
