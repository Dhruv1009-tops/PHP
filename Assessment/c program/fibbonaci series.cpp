#include<stdio.h>
 
 main()
 {
 	int i,n,fibbo1=0,fibbo2=1,fibbo;
 	
 	printf("Eneter the value :");
 	scanf("%d",&n);
 	
 	printf("Fibbonaci series :\n0\n1\n ");
 	for(i=1;i<n-1;i++)
 	 
 	{
 		fibbo=fibbo1+fibbo2;
 		printf("%d\n",fibbo);
 		
 		fibbo1=fibbo2;
 		fibbo2=fibbo;
 		
	 }
 	
 }
