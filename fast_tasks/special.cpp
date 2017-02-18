#include<iostream>

int main()
{
    unsigned n;
    std::cin>>n;
    if(n<1 || n>250)
    {
        std::cout<<"Bad input!";
        return 1;
    }

    int cnt=0,temp;
    long long num_2,num=70;
    bool zero,four,nine,flag;
    while(cnt!=n)
    {
        num_2=num*num;
        zero=0;
        four=0;
        nine=0;
        flag=1;
        while(num_2!=0)
        {
            temp=num_2%10;
            if(temp==0)
                zero=1;
            else if(temp==4)
                four=1;
            else if(temp==9)
                nine=1;
            else
            {
                flag=0;
                break;
            }
            num_2/=10;
        }
        if(flag)
        {
            if(zero && four && nine)
            {
                cnt++;
            }
        }
        num++;
    }

    std::cout<<num-1;

    return 0;
}
