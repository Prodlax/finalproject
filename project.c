#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int
main (int argc, char* argv[])
{
  /* C program to initialize arrayGain and arrayLoss */
  int arrayGain[30];
  int c = 0;
  for (int i = 0; i < argc; i+=2)
    {
      printf ("Input money earned on day %d: \n", c);
      // scanf ("%d", &arrayGain[i]);
      arrayGain[c++] = atoi(argv[i]);
    }
  int arraySpent[30];
  c = 0;
  for (int i = 1; i < argc; i+=2)
    {
      printf ("Input money spent on day %d: \n", c);
      // scanf ("%d", &arraySpent[i]);
      arraySpent[c++] = atoi(argv[i]);
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
	  printf ("No profit or loss day %d\n", h);
	}
    }
/*
    C program to calculate AVERAGE gain per day
*/
   int i, n = 30, sumGain = 0, sumLoss = 0;
   float meanGain, meanLoss;
  
   for (i = 0; i < n; i++)
   {
      sumGain += arrayGain[i];
   }
   meanGain = sumGain / (float)n;
   printf("Average money earned per day: %.4f\n", meanGain);

/*
    C program to calculate AVERAGE loss per day
*/
   for (i = 0; i < n; i++)
   {
     sumLoss += arraySpent[i];
   }
   meanLoss = sumLoss / (float)n;
   printf("Average money spent per day: %.4f\n", meanLoss);

/*
    C program to calculate NET gain/loss
*/
int nme = 0, nml = 0, net = 0;
for (i = 0; i < n; i++)
{
  nme += arrayGain[i];
  nml += arraySpent[i];
}
if (nme > nml){
net = nme - nml;
printf("Your net profit is %d\n", net);
}
else {
net = nml - nme;
printf("Your net loss is %d\n", net);
} 

	/* C program to calculate highest money spent in one day and highest money earned in one day*/
  int highestGain = arrayGain[0];
  int dayGain = 0;
  int highestSpent = arraySpent[0];
  int dayLoss = 0;
  
  for (int n = 1; n < 30; n++)
  {
   if (arrayGain[n] > highestGain)
  {
      highestGain = arrayGain[n];
      dayGain = n+1;
  }
  }
  printf("The highest amount of money earned in one day is %d, on day %d\n", highestGain, dayGain);
  
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
