import math
class MyComplexNumber:
    real, imaginary = None, None
    def __init__(self,a,b):
        self.real = a
        self.imaginary = b

    def __str__(self):
        if self.imaginary == 0:
            return "{0}".format(self.real)
        if self.real == 0:
            if self.imaginary == 1:
                return 'i'
            if self.imaginary!=0:  
                return "{0}i".format(self.imaginary)
        else:
            if self.imaginary == 1:
                return "{0}+i".format(self.real)
        return "{0}+{1}i".format(self.real,self.imaginary)
    
    def input(self):
        self.real = float(input('Nhập phần thực: '))
        self.imaginary = float(input('Nhập phần ảo: '))

    def my_addition(self, complex):
        return MyComplexNumber(self.real+complex.real,self.imaginary+complex.imaginary)
    
    def my_subtract(self, complex):
        return MyComplexNumber(self.real-complex.real,self.imaginary-complex.imaginary)
    
    def my_multi(self, complex):
        mul_real = self.real*complex.real - (self.imaginary*complex.imaginary)
        mul_imaginary = self.real * complex.imaginary + (self.imaginary*complex.real)
        return MyComplexNumber(mul_real,mul_imaginary)
    
    def my_division(self, complex):
        sqr_module = complex.real**2+(complex.imaginary**2)
        div_real = (self.real*complex.real+(self.imaginary*complex.imaginary))/sqr_module
        div_imaginary = (self.real * complex.imaginary - (self.imaginary*complex.real))/sqr_module
        return MyComplexNumber(div_real,div_imaginary)
    
    def __add__(self,complex):
        return self.my_addition(complex)
    
    def __sub__(self,complex):
        return self.my_subtract(complex)
    
    def __mul__(self,complex):
        return self.my_multi(complex)
    
    def __truediv__(self,complex):
        return self.my_division(complex)
    
    def value(self):
        return math.sqrt(self.real**2+(self.imaginary**2))

    def compare(self,complex):
        if self.value()>complex.value():
            return  "a > b"
        if self.value()<complex.value():
            return  "a < b"
        return "a = b"
    
    def __eq__(self,complex):
        return self.value() == complex.value()
    
    def __lt__(self,complex):
        return self.value() < complex.value()
    
    def __gt__(self,complex):
        return self.value() > complex.value()
    
c1 = MyComplexNumber(3,5)
c2 = MyComplexNumber(-1,4)
c3 = MyComplexNumber(5,3)
print('c1 =',c1)
print('c2 =',c2)

print(c1.my_addition(c2) ,'|', c1+c2)
print(c1.my_subtract(c2),'|', c1-c2)
print(c1.my_multi(c2),'|', c1*c2)
print(c1.my_division(c2),'|', c1/c2)
print(c1.value())
print(c1.compare(c2))
print(c1==c3)
print(c1>c2)
print(c1<c2)