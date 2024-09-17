def bai7(s):
    s = s.split()
    s_distinct = []
    count = []
    for c in s:
        if c not in s_distinct:
            s_distinct.append(c)
            count.append(1)
        else:
            i = s_distinct.index(c)
            count[i]+=1
    for i in range(len(s_distinct)):
        print(s_distinct[i],':', count[i],end=',')

if __name__ =='__main__':
    bai7('hello world hi world goodbye world hi')