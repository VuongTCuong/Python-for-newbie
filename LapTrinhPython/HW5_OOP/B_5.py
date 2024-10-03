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


e1 = Employee('1','VTC','10/10/2003','01234','abc@gmail.com',1)
e2 = Experience('2','VTV','10/11/2003','02345','cde@gmail.com',0,3,'Graph')
e2.ShowInfo()
        

