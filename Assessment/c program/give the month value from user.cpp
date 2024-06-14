#include<stdio.h>
main()
{
	int m;
	
	printf("Enter the month:  ");
	scanf("%d",&m);
	
	if(m==1||m==3||m==5||m==7||m==8||m==10||m==12)
	printf("31 days in this %d month",m);
	
	else if(m==2)
	printf("29/28 days in this %d  month",m);
	
	else
	printf("30 days in this %d month",m);
	
}
