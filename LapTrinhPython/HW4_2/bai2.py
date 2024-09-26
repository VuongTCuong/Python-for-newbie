def isprime(n):
    if n <= 1: return False
    for i in range(2,n):
        if n % i == 0:
            return False
    return True
def bai2():
    s = set(x for x in range(0,201) if isprime(x))
    print(sorted(s))
    
bai2()

