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

    unsigned int cnt=0,temp;
    unsigned long long num_2,num=70;
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
            if(temp!=0 && temp!=4 && temp!=9)
            {
                flag=0;
                break;
            }
            else
            {
                if(temp==0)
                    zero=1;
                else if(temp==4)
                    four=1;
                else
                    nine=1;
            }
            num_2/=10;
        }
        if(flag)
        {
            if(zero && four && nine)
            {
                cnt++;
                std::cout<<"\n"<<cnt<<"\n"<<num<<"\n";
            }
        }
//      if(cnt>73)
//              std::cout<<"\n"<<num;
        num++;
    }

    std::cout<<num-1;

    return 0;
}



