class Shape: 
    def __init__(self,color,name):
        self.color = color
        self.name = name
    def findarea(self):
        pass
    def findperimeter(self):
        pass
    def __str__(self):
        return self.name
    
class Circle(Shape):
    def __init__(self,color,name,radius):
        super().__init__(color,name)
        self.radius = radius
    def findarea(self):
        return 3.14*(self.radius**2)
    def findperimeter(self):
        return 3.14*2*self.radius

class Rectangle(Shape):
    def __init__(self,color,name,w,h):
        super().__init__(color,name)
        self.width = w
        self.height = h
    def findarea(self):
        return self.width*self.height
    def findperimeter(self):
        return 2*(self.width+self.height)
    
class Square(Rectangle):
    def __init__(self,l):
        self.length = l
    def findarea(self):
        return self.length**2
    def findperimeter(self):
        return self.length*4
r = Rectangle('red','hình chữ nhật',3,4)
print(r.findarea())
