def bai4(s):
    s = s.split()
    for i in range(0, len(s)):
        s[i] = s[i].capitalize()
    for c in s:
        print(c,end=' ')

if __name__ == '__main__':
    bai4('vuong tieu cuong')
