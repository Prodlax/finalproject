#include <stdio.h>

int main()
{
    int array[60];
    printf("Input money spent on day 1: \n");
    scanf("%d", &array[0]);
    printf("Input money earned on day 1: \n");
    scanf("%d", &array[1]);
    printf("Input money spent on day 2: \n");
    scanf("%d", &array[2]);
    printf("Input money earned on day 2: \n");
    scanf("%d", &array[3]);
    printf("Input money spent on day 3: \n");
    scanf("%d", &array[4]);
    printf("Input money earned on day 3: \n");
    scanf("%d", &array[5]);
    printf("Input money spent on day 4: \n");
    scanf("%d", &array[6]);
    printf("Input money earned on day 4: \n");
    scanf("%d", &array[7]);
    printf("Input money spent on day 5: \n");
    scanf("%d", &array[8]);
    printf("Input money earned on day 5: \n");
    scanf("%d", &array[9]);
    printf("Input money spent on day 6: \n");
    scanf("%d", &array[10]);
    printf("Input money earned on day 6: \n");
    scanf("%d", &array[11]);
    printf("Input money spent on day 7: \n");
    scanf("%d", &array[12]);
    printf("Input money earned on day 7: \n");
    scanf("%d", &array[13]);
    printf("Input money spent on day 8: \n");
    scanf("%d", &array[14]);
    printf("Input money earned on day 8: \n");
    scanf("%d", &array[15]);
    printf("Input money spent on day 9: \n");
    scanf("%d", &array[16]);
    printf("Input money earned on day 9: \n");
    scanf("%d", &array[17]);
    printf("Input money spent on day 10: \n");
    scanf("%d", &array[18]);
    printf("Input money earned on day 10: \n");
    scanf("%d", &array[19]);
    

    printf("%d\n", array[0]);
    printf("%d\n", array[1]);
    printf("%d\n", array[2]);
    printf("%d\n", array[3]);
    printf("%d\n", array[4]);
    printf("%d\n", array[5]);
    printf("%d\n", array[6]);
    printf("%d\n", array[7]);
}  
/**
 * C program to calculate gain or loss
 */
int main()
{
    int ms, me, amt; 
    
    /* Input money spent and money earned */
    printf("Enter money spent today: ");
    scanf("%d", &cp);
    printf("Enter money earned today: ");
    scanf("%d", &sp);
    
    if(me > ms)
    {
        /* Calculate Gain */
        amt = me - ms;
        printf("Profit = %d", amt);
    }
    
    return 0;
}
    else if(ms > me)
    {
        /* Calculate Loss */
        amt = ms - me;
        printf("Loss = %d", amt);
    }
    else
    {
        /* Neither gain nor loss */
        printf(0);
    }
