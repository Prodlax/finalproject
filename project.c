#include <stdio.h>

int
main ()
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
}
