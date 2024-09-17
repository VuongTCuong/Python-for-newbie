def bai5(s):
    count1,count2 = 0,0
    for c in s:
        if c>='a' and c<='z':
            count1+=1
        if c>='A' and c<='Z':
            count2+=1
    print(count1, count2)
if __name__ == '__main__':
    bai5('VuoNg tIeu !Cuong')