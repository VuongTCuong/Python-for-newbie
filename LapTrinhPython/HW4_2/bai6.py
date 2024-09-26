def bai6():
    d = {'a':1,'b':2,'c':1,'d':4,'e':5,'f':6}
    m = max(d,key=d.get)
    print(m)
    d.pop(m)
    print(max(d,key=d.get))
bai6()
