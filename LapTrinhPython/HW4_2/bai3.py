import random
def bai3():
    sa = set(random.randint(10,2000) for _ in range(1,5))
    sb = set(random.randint(10,2000) for _ in range(1,10))
    print(sa)
    print(sb)
    print(sa & sb)
    print(sa | sb)
    print(sa - sb)
    print((sa-sb) | (sb-sa))
bai3()