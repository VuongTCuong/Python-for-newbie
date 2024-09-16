import math

def ptbac2(a,b,c):
    sn,x1,x2 = None,None,None
    if a==0:
        if b==0:
            if c==0:
                sn = -1
            else:
                sn = 0
        else:
            sn = 1
            x1 = -c/b
    else:
        delta = b*b-4*a*c
        if delta < 0 :
            sn = 0
        if delta == 0:
            sn = 1
            x1 = x2 = -b/(2*a)
        if delta > 0:
            sn = 2
            x1 = (-b-math.sqrt(delta))/(2*a)
            x2 = (-b+math.sqrt(delta))/(2*a)
    return sn,x1,x2

def pttrungphuong(a,b,c):
    sn,t1,t2 = ptbac2(a,b,c)
    x1,x2,x3,x4=None,None,None,None
    if sn>0:
        if sn == 2 and t1>t2:
            t1,t2 = t2,t1
        if t2 < 0 :
            sn = 0
        if t2 == 0:
            sn = 1
            x1 = 0
        if t2 > 0:
            if t1 < 0:
                sn = 2
                x1 = -math.sqrt(t2)
                x2 = -x1
            if t1 == 0:
                sn = 3
                x1 = -math.sqrt(t2)
                x2 = 0
                x3 = -x1
            if t1 > 0:
                sn = 4
                x1 = -math.sqrt(t2)
                x2 = -math.sqrt(t1)
                x3 = -x2
                x4 = -x1
    return sn,x1,x2,x3,x4
if __name__ == '__main__':
    a, b, c = (float(x) for x in input().split())
    sn,x1,x2,x3,x4 = pttrungphuong(a,b,c)
    print('Với phương trình {}x^4 + {}x + {} = 0, ta có:'.format(a, b, c))
    print('- Số nghiệm: ', sn)
    if sn == 0:
        print('- Vậy phương trình vô nghiệm')
    if sn == -1:
        print('- Vậy phương trình vô số nghiệm')
    if sn > 0:
        print('- x1 = ',x1)
        print('- x2 = ',x2)
        print('- x3 = ', x3)
        print('- x4 = ', x4)
