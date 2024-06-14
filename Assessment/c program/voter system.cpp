#include<stdio.h>
main()

{
	int a;
	printf("enter age:");
	scanf("%d",&a);
	if(a>=18)
	{
		printf("you are aligible");
	}
    else if(a>100)
	{
		printf("you are not aligable");
	}
	
	else
	{
		printf("you are under age ");
	
	}
}
