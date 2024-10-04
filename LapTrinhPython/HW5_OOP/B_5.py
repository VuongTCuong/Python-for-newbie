class Employee:
    employee_count = 0 
    _employee_type_list = ['Experience', 'Fresher', 'Intern']
    def __init__(self,id,name,bd,phone,email,type):
        self.id = id
        self.name = name
        self.birthday = bd
        self.phone = phone
        self.email = email
        self.employee_type = type # is number [0..2]; 0: Experience, 1: Fresher, 2: Intern
        Employee.employee_count +=1
    def ShowInfo(self):
        print('ID :',self.id)
        print('Name :',self.name)
        print('Birthday :',self.birthday)
        print('Phone :',self.phone)
        print('Email :',self.email)
        print('Employee type: ',self._employee_type_list[self.employee_type])
        print('Employee count: ',self.employee_count)

class Experience(Employee):
    def __init__(self,id,name,bd,phone,email,type,ExpInYear,ProSkill):
        super().__init__(id,name,bd,phone,email,type)
        self.ExpInYear = ExpInYear
        self.ProSkill = ProSkill

    def ShowInfo(self):
        super().ShowInfo()
        print('Experience in year: ',self.ExpInYear)
        print('Pro Skill:',self.ProSkill)
    def __str__(self):
        return "[{0},{1},{2},{3},{4},{5},{6},{7}]".format(self.id,self.name,self.birthday,self.phone,self.email,self._employee_type_list[self.employee_type],self.ExpInYear,self.ProSkill)

class Fresher(Employee):
    def __init__(self,id,name,bd,phone,email,type,Grad_date,Grad_rank,Edu):
        super().__init__(id,name,bd,phone,email,type)
        self.Graduation_date = Grad_date
        self.Graduation_rank = Grad_rank
        self.Education = Edu

    def ShowInfo(self):
        super().ShowInfo()
        print('Graduation Date: ',self.Graduation_date)
        print('Graduation Rank: ',self.Graduation_rank)
        print('Education: ',self.Education)
    def __str__(self):
        return "[{0},{1},{2},{3},{4},{5},{6},{7},{8}]".format(self.id, self.name, self.birthday, self.phone, self.email, self._employee_type_list[self.employee_type], self.Graduation_date, self.Graduation_rank, self.Education)
class Intern(Employee):
    def __init__(self,id,name,bd,phone,email,type,major,semester,uni_name):
        super().__init__(id,name,bd,phone,email,type)
        self.Majors = major
        self.Semester = semester
        self.University_name = uni_name

    def ShowInfo(self):
        super().ShowInfo()
        print('Majors:', self.Majors)
        print('Semester:', self.Semester)
        print('University name:', self.University_name)

    def __str__(self):
        return "[{0},{1},{2},{3},{4},{5},{6},{7},{8}]".format(self.id, self.name, self.birthday, self.phone, self.email, self._employee_type_list[self.employee_type], self.Majors, self.Semester, self.University_name)
def AddEmp():
    new_emp = None 
    id = input('Nhập ID: ')
    name = input('Nhập tên: ')
    bd = input('Nhập ngày sinh(dd/mm/yy): ')
    phone = input('Nhập SĐT: ')
    email = input('Nhập email: ')
    type = int(input('Nhập loại(0,1,2): '))
    if type == 0:
        expinyear = int(input('Nhập số năm kinh nghiệm: '))
        proskill = input('Nhập kỹ năng chuyên môn: ')
        new_emp = Experience(id,name,bd,phone,email,type,expinyear,proskill)
    elif type == 1:
        grad_date = input('Nhập thời gian tốt nghiệp: ')
        grad_rank = input('Nhập loại tốt nghiệp: ')
        edu = input('Nhập trường đang học: ')
        new_emp = Fresher(id,name,bd,phone,email,type,grad_date,grad_rank,edu)
    elif type == 2:
        major = input('Nhập chuyên ngành đang học: ')
        sem = input('Nhập học kì đang học: ')
        uni = input('Nhập trường đang học: ')
        new_emp = Intern(id,name,bd,phone,email,type,major,sem,uni)
    return new_emp
def Menu():
    Employee_list = []
    Employee_list.extend([
        Experience('E001', 'John Doe', '15/05/1990', '0123456789', 'john@example.com', 0, 5, 'Python'),
        Fresher('F001', 'Jane Smith', '20/08/1995', '9876543210', 'jane@example.com', 1, '10/06/2022', 'Distinction', 'XYZ University'),
        Intern('I001', 'Mike Johnson', '03/12/2000', '5555555555', 'mike@example.com', 2, 'Computer Science', '3rd', 'ABC College')
    ])
    while True:
        print('1. Thêm Employee')
        print('2. Xoá Employee')
        print('3. Sửa Employee')
        print('4. Xem danh sách Employee')
        print('5. Thoát')
        key = int(input('Hãy chọn mục: '))
        if key==1:
            Employee_list.append(AddEmp())

        elif key==2:
            pass
        elif key==3:
            pass
        elif key==4:
            for i in Employee_list:
                print(i)
        elif key==5:
            break
     
Menu()
e1 = Employee('1','VTC','10/10/2003','01234','abc@gmail.com',1)
e2 = Experience('2','VTV','10/11/2003','02345','cde@gmail.com',0,3,'Graph')
#e2.ShowInfo()
        

