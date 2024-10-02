def caua(l):
    D = dict()
    for i in L:
        x = i.split(',')
        D[x[0]] = int(x[2])
    return D
def caub(l):
    return sum(caua(l).values())
    
def cauc(l):
    #return max(caua(l),key=lambda x: x[1])
    print(caua(l).get)
if __name__ == '__main__':
    L = ["CNTT,20,600","Ly,18,200","Toan,19,100","Hoa,19,150"]
    print(caua(L))
    print(caub(L))
    print(cauc(L))