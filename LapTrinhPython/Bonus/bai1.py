def bai1a(A):
     l = []
     for i in A:
        if i[0].isupper():
            l.append(i)
     l.sort()
     return l

def bai1b(A):
    s = 0
    for i in A:
        s += i[2]
    return s

def quantitycom(t):
        return t[2]
def bai1c(A):
    A.sort(key=quantitycom)
    return A

if __name__ == '__main__':
    l = [('lemon',0.45, 15),('apple',0.5, 10),('BANANA',0.3, 20),('grape',0.6, 12),('Watermelon',0.2, 8)]
    print(bai1a(l))
    print(bai1b(l))
    print(bai1c(l))
