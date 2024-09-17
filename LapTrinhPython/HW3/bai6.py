def songuyento(n):
    if n == 0 or n == 1: return False
    for i in range(2,n):
        if n%i == 0: return False
    return True
def bai6(s):
    s = s.split(',')
    for c in s:
        if songuyento(int(c)):
            print(c)
if __name__ == '__main__':
    bai6('12,11,2,4,56,7,9,13')