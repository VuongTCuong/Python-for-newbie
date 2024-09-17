def bai3(s):
    count = 0
    s = s.lower()
    for c in s:
        if c>='a' and c<='z':
            count+=1
    print(count)
if __name__ == '__main__':
    bai3('vuong.tieu]cuong!')