import math
class PHANSO:
    def __init__(self,ts,ms):
        self.ts = ts
        self.ms = ms

    def __str__(self):
        ucln = math.gcd(self.ts,self.ms)
        return '{0}/{1}'.format(int(self.ts/ucln),int(self.ms/ucln))
    
    def input(self):
        self.ts = int(input('Nhập tử số:'))
        self.ms = int(input('Nhập mẫu số:'))

    def reverse(self):
        self.ts,self.ms = self.ms,self.ts
    
    def my_addition(self,ps):
        return PHANSO(self.ts*ps.ms+(self.ms*ps.ts),self.ms*ps.ms)
    
    def my_subtract(self,ps):
        return PHANSO(self.ts*ps.ms-(self.ms*ps.ts),self.ms*ps.ms)
    
    def my_multi(self,ps):
        return PHANSO(self.ts*ps.ts,self.ms*ps.ms)
    
    def my_division(self,ps):
        return PHANSO(self.ts*ps.ms,self.ms*ps.ts)
    
    def __add__(self,ps):
        return PHANSO(self.ts*ps.ms+(self.ms*ps.ts),self.ms*ps.ms)
    
    def __sub__(self,ps):
        return PHANSO(self.ts*ps.ms-(self.ms*ps.ts),self.ms*ps.ms)

    def __mul__(self,ps):
        return PHANSO(self.ts*ps.ts,self.ms*ps.ms)

    def __truediv__(self,ps):
        return PHANSO(self.ts*ps.ms,self.ms*ps.ts)

ps1 = PHANSO(2,4)
print(ps1)
ps1.reverse()
print(ps1)
ps2 = PHANSO(2,3)
print(ps1.my_addition(ps2),'|',ps1+ps2)
print(ps1.my_subtract(ps2),'|',ps1-ps2)
print(ps1.my_multi(ps2),'|',ps1*ps2)
print(ps1.my_division(ps2),'|',ps1/ps2)