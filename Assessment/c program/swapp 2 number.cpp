dxededdedeedfeffrgggrgrgfvdcd#include <stdio.h>


main()
{
    int a, b;
    printf("Enter the two numbers : \n");
    scanf("%d %d", &a, &b);
    printf("Before swapping A is : %d and B is %d \n", a,
           b);
    a = a + b;
    b = a - b;
    a = a - b;

    printf("After swapping A is : %d and B is : %d \n", a,
           b);
}
