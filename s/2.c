#include<stdio.h>

struct Student{
	int rn,mks;
    char nm[100],dob[100],br[100],sec[100];
};
void input(struct Student *);
void display(struct Student);
struct Student percentage(struct Student[],int );
int main(){
	int i;
	struct Student st[2],stmax;
	for(i=0;i<2;i++)
		input(&st[i]);
	for(i=0;i<2;i++)
		display(st[i]);
	printf("Student with maximum percentage is:");
    stmax=percentage(st,2);
    display(stmax);
	return 0;
}
void input(struct Student *sttemp){
	printf("Enter Student Name:");
	scanf("%s",sttemp->nm);
	printf("Rollno.:");
	scanf("%d",&sttemp->rn);
	printf("Total Marks in five subjects(out of 500):");
	scanf("%d",&sttemp->mks);
    printf("Branch:");
	scanf("%s",sttemp->br);
	printf("Section:");
	scanf("%s",sttemp->sec);
	printf("Date of Birth:");
	scanf("%s",sttemp->dob);
}
struct Student percentage(struct Student sttemp[],int noS){
   int i=0;
   int pos=0;
   int max=sttemp[i].mks/5;
   for(i=1;i<noS;i++){
   	if(max<sttemp[i].mks/5){
   		max=sttemp[i].mks/5; 
        pos=i;
   	 } 
   }
   return sttemp[pos];
}
void display(struct Student sttemp){
	printf("Student Name is %s\n",sttemp.nm);
	printf("Roll no. is %d\n",sttemp.rn);
	printf("Marks is %d\n",sttemp.mks);
	printf("Branch is %s\n",sttemp.br);
	printf("Section is %s\n",sttemp.sec);
	printf("Date of birth is %s\n",sttemp.dob);

}

