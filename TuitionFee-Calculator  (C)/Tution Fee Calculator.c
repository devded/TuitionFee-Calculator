#include<stdio.h>
#include<math.h>
int main ()

{
    float a,b,c,d,e,f,g,h,i,j;

        printf("                            Welcome to Tution Fee Calculator PAU");
    printf("\n\nEnter Credits = ");
    scanf("%f",&a);

    printf("\n\nFees Per Credit = ");
    scanf("%f",&b);


    printf("\n\nLab Fee Per Semester = ");
    scanf("%f",&c);


    printf("\n\nOther Fees Per Semester = ");
    scanf("%f",&d);


    printf("\n\nEnter Waiver = ");
    scanf("%f",&e);


   f = e/100;
   g = a*b;
   h = g*f;
   i = g-h;
   j = i+c+d;

   printf("\n\nTution Fee = %f\n\n",j);

   getch();

}
