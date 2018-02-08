#include<stdio.h>                

void input(int[],int);
void display(int[],int);
int summ(int[],int);

int main()
{
  int n;
  printf("\n Enter The number of an array   ");
  scanf("%d",&n);
  int arr[n];
  input(arr,n);
  display(arr,n);
  int addi;
  addi=summ(arr,n);
  printf("\n%d",addi);

}

void input(int arr[],int i)
  {
     printf("\n Enter The element of an array   ");
     int j;
     for(j=0;j<i;j++)
       {
          scanf("%d",&arr[j]);
       }
  }

void display(int arr[],int i)
  {
       printf("\n  The element of an array   ");
       int j;
       for(j=0;j<i;j++)
          {
            printf("%d\n",arr[j]);
          }
  }
int summ(int arr[],int i)
    {
          int j;
          int addi;
          addi=0;
          for(j=0;j<i;j++)
             {
                addi=(addi+arr[j]);
             }
          return addi;
    }
