#include<iostream>

int main()
{
    unsigned N,K;
    unsigned Ai[1000],VarAi[1000];
    unsigned max=0,capacity,varIndx,v_capacity;
    unsigned big,hasMoreValues,flag=1;

    std::cin>>N>>K;
    for(int i=0;i<N;i++)
    {
        std::cin>>Ai[i];
        if(Ai[i]>max)
        {
            max=Ai[i];
        }
    }
    capacity=max;

    while(1)
    {
        flag=1;
        for(int h=0;h<N;h++)
        {
            VarAi[h]=Ai[h];
        }

        for(int i=0;i<K;i++)
        {
            v_capacity=capacity;
            while(1)
            {
                big=0;
                hasMoreValues=0;
                for(int j=0;j<N;j++)
                {
                    if(VarAi[j]>big && VarAi[j]<=v_capacity)
                    {
                        hasMoreValues=1;
                        big=VarAi[j];
                        varIndx=j;;
                    }
                }

                if(hasMoreValues)
                {
                    VarAi[varIndx]=0;
                    v_capacity-=big;
                    continue;
                }
                else
                {
                    break;
                }
            }
        }
        for(int k=0;k<N;k++)
        {
            if(VarAi[k]!=0)
                flag=0;
        }
        if(flag)
        {
            std::cout<<capacity;
            break;
        }
        else
            capacity++;
    }

    return 0;
}
