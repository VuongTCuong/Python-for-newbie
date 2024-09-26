def bai6A():
    a = [1,1,2,3,5,8,13,21,34,55,89]
    b = [1,2,3,4,5,6,7,8,9,10,11,12,13]
    c = []
    for i in b:
        if i in a and i not in c:
            print(i)
    
def bai6B():
    a = [1,1,2,3,5,8,13,21,34,55,89]
    b = [1,2,3,4,5,6,7,8,9,10,11,12,13]
    print(list(set(a) & set(b)))
if __name__ == '__main__':
    bai6B()