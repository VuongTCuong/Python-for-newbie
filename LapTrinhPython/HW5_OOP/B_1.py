class Student:
    def __init__(self, name, number):
        self.name = name
        self.number = str(number)
        self.score = [0,0,0,0,0] #Toan, Van, Anh, Vat Li, Hoa hoc
    def getName(self):
        return self.name
    def getScore(self,i):
        return self.score[i]
    def inputScore(self,score):
        self.score = score
    def getAverage(self):
        return sum(self.score)/len(self.score)
    def getHighScore(self):
        return max(self.score)
    def getHocBong(self):
        if(self.getAverage()>8.0 and False not in [x>4 for x in self.score]):
            print('Nhận được học bổng!')
        else:
            print('Không nhận được học bổng!')
    def __str__(self):
        return '(Name={0},Score=[Toán: {1}, Văn: {2}, Anh: {3}, Vật lí: {4}, Hóa học: {5}])'.format(self.name,self.score[0],self.score[1],self.score[2],self.score[3],self.score[4])

st = Student('cuong','1234')
st.inputScore([10,8,7,10,5])
print(st.getAverage())
print(st.getHighScore())
st.getHocBong()
print(st)