#include <stdio.h>

int main()
{
    /* C program to initialize arrayGain and arrayLoss */
    int arrayGain[30];
    for (int i = 0; i < 30; i++)
        {
                 printf("Input money earned on day %d: \n", i);
                 scanf("%d", &arrayGain[i]);
        }
    int arraySpent[30];
    for (int i = 0; i < 30; i++)
        {
                 printf("Input money spent on day %d: \n", i);
                 scanf("%d", &arraySpent[i]);
        }
}  

/**
 * C program to calculate gain or loss
 */
int main()
{
    int ms, me, amt; 
    
    /* Input money spent and money earned */
    printf("Enter money spent today: ");
    scanf("%d", &ms);
    printf("Enter money earned today: ");
    scanf("%d", &me);
    
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
