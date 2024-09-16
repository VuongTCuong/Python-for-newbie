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
            x1 = -b/(2*a)
        if delta > 0:
            sn = 2
            x1 = (-b-math.sqrt(delta))/(2*a)
            x2 = (-b+math.sqrt(delta))/(2*a)
    return sn,x1,x2

if __name__ == '__main__':
    a,b,c = (float(x) for x in input().split())
    sn,x1,x2 = ptbac2(a,b,c)
    if sn == 2 and x1>x2:
        x1,x2 = x2,x1
    print('Với phương trình {}x^2 + {}x + {} = 0, ta có:'.format(a,b,c))
    print('- Số nghiệm: ',sn)
    if sn == 0:
        print('- Vậy phương trình vô nghiệm')
    if sn == -1:
        print('- Vậy phương trình vô số nghiệm')
    if sn > 0:
        print('- x1 = ',x1)
        print('- x2 = ',x2)