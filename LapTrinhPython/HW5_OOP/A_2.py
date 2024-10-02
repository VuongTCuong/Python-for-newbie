class Shape:
    def __init__(self):
        self.area = 0
    def getarea(Shape):
        return Shape.area

class Square(Shape):
    def __init__(self,length):
        self.length = float(length)
    def getarea(Square):
        return Square.length**2
    
sq = Square(2)
print(sq.getarea())