#include<stdio.h>
main()
{
	int a,b,temp;
	printf("enter a value of A: ");
	scanf("%d",&a);
	printf("enter a value of B: ");
	scanf("%d",&b);
	temp=a;
	a=b;
	b=temp;
	printf("After a swapping A: %d",a);
	printf("After a swapping B: %d",b);
	
}
