#include<iostream>
//#include<cstdlib>

int main()
{

    int arr1[15]={22 ,18, 4 ,27 ,21 ,27 ,29 ,26 ,25 ,12 ,29 ,14 ,12 ,29 ,0 };
    int arr2[20]={25 ,4 ,19 ,28 ,25 ,27 ,3 ,2 ,25 ,29 ,8 ,27 ,14 ,8 ,27 ,8 ,5 ,23 ,1 ,1};

    /*
    for(int i=0;i<20;i++)
    {
        if(i<15)
        {
            arr1[i]=rand() % 100;
        }
        arr2[i]=rand() % 100;
    }
    */


    for(int i=0;i<15;i++)
        std::cout<<arr1[i]<<" ";
    std::cout<<std::endl;
    for(int i=0;i<20;i++)
        std::cout<<arr2[i]<<" ";
    std::cout<<std::endl;

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
