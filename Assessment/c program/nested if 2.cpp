#include<stdio.h>
main()
{
	int a,b,c;
	
	printf("enter a value of a: ");
	scanf("%d",&a);
	printf("enter a value of b: ");
	scanf("%d",&b);
	printf("enter a value of c: ");
	scanf("%d",&c);
	
		if(a>b)
			if(b>c)
			{
				printf("%d is greatest ",a);
						
			}
				else
			{
				printf("%d is greatest ",c);
					
			}
					if(a>c)
					{
						printf("%d is greatest ",a);
					}
						else
						{
							printf("%d is gretest ",c);
						}
						
}
