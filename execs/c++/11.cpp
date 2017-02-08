#include<iostream>
#include<cmath>

bool isPrime(int n)
{
    if(n==1)
        return 0;
    else if(n==2)
        return 1;
    else
    {
            for(int i=2;i<sqrt(n)+18;i++)
            {
                    if(n%i==0)
                    {
                        return 0;
                    }
            }

    }
    return 1;
}

int main()
{
    int n;
    std::cout<<"Enter a number: ";
    std::cin>>n;
    if(isPrime(n))
        std::cout<<n<<" is prime.";
    else
        std::cout<<n<<" is not prime.";

    return 0;
}
