#include<iostream>

int main()
{

    int arr1[15];
    int arr2[20];

    for(int i=0;i<15;i++)
            std::cin>>arr1[i];

    for(int i=0;i<20;i++)
        std::cin>>arr2[i];

    bool flag;
    for(int i=0;i<15;i++)
    {
        flag=1;
        for(int j=0;j<i;j++)
        {
            if(arr1[i]==arr1[j])
                flag=0;
        }
        if(flag)
        {
            for(int j=0;j<20;j++)
            {
                if(arr1[i]==arr2[j])
                {
                    std::cout<<arr1[i]<<" ";
                    break;
                }
            }
        }
    }

    return 0;
}
