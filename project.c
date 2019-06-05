#include <stdio.h>

int
main (int argc, char* argv[])
{
  /* C program to initialize arrayGain and arrayLoss */
  int arrayGain[30];
  for (int i = 0; i < 30; i++)
    {
      printf ("Input money earned on day %d: \n", i);
      scanf ("%d", &arrayGain[i]);
    }
  int arraySpent[30];
  for (int i = 0; i < 30; i++)
    {
      printf ("Input money spent on day %d: \n", i);
      scanf ("%d", &arraySpent[i]);
    }

/**
 * C program to calculate gain or loss
 */
  int ms, me, amt;

  /* money spent and money earned, daily */
  for (int h = 0; h < 30; h++)
    {
      ms = arraySpent[h];
      me = arrayGain[h];

      if (me > ms)
	{
	  /* Calculate Gain */
	  amt = me - ms;
	  printf ("Profit day %d = %d\n", h, amt);
	      for (i = 0; i < n; ++i)
   {
      scanf("%d", &data[ i ]);
      sum += data[ i ];
   }

   mean = sum / (float)n;
   printf("Mean: %.4f", mean);
	}

      else if (ms > me)
	{
	  /* Calculate Loss */
	  amt = ms - me;
	  printf ("Loss day %d = %d\n", h, amt);
	}
      else
	{
	  /* Neither gain nor loss */
	  printf ("No profit or loss day %d", h);
	}
    }
/*
    C program to calculate AVERAGE gain/loss
*/
  int main()
  {
   int i, n, sum = 0;
   float mean;

   printf("Enter the number of data items: ");
   scanf("%d", &n);

   //taking data items from user
   printf("Enter data:\n");
   for (i = 0; i < n; ++i)
   {
      scanf("%d", &data[ i ]);
      sum += data[ i ];
   }

   mean = sum / (float)n;
   printf("Mean: %.4f", mean);

   return 0;
}

	/* C program to calculate highest money spent in one day and highest money earned in one day*/
  int highestGain = arrayGain[0];
  int dayGain;
  int highestSpent = arraySpent[0];
  int dayLoss;
  
  for (int n = 1; n < 30; n++)
  {
   if (arrayGain[n] > highestGain)
  {
      highestGain = arrayGain[n];
      dayGain = n+1;
  }
  }
  printf("The highest amount of money gained in one day is %d, on day %d\n", highestGain, dayGain);
  
  for (int x = 1; x < 30; x++)
  {
      if (arraySpent[x] > highestSpent)
      {
          highestSpent = arraySpent[x];
          dayLoss = x+1;
      }
  }
  printf ("The highest amount of money spent in one day is %d, on day %d\n", highestSpent, dayLoss);
}
