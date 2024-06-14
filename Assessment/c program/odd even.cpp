#include<stdio.h>
main()
{
	int n;
	printf("enter a value :");
	scanf("%d",&n);
	if(n%2==0)
	{
		printf("number is even");
	}
	else if(n%2==1)
	{
		printf("number is odd");
		
	}
	else 
	{
		printf("number is neg");
	}
}
