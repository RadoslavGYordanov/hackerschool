#include<iostream>
#include<cmath>
#include<iomanip>

float clock(int h,int m)
{
    float angleHour=30*h+0.5*m;
    float angleMinute=6*m;
    float angle=fabs(angleHour-angleMinute);
    if(angle>180)
        return 360-angle;
    else
        return angle;
}

int main()
{
    int hour,minute;
    do
    {
    std::cin>>hour;
    std::cin.ignore();
    std::cin>>minute;
    }while(hour<1 || hour>12 || minute<0 || minute>59);

    std::cout<<std::fixed<<std::setprecision(3)<<clock(hour,minute);

    return 0;

}
