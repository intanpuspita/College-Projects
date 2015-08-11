/*Program		: fcfs.c*/
/*Deskripdi		: Scheduling fcfs dengan bobot dalam bentuk detik*/
/*Author			: Ade Astriani(111511032) & Intanpuspitasari(111511042)
					  kelompok 3  kelas : 1B */
/*Date			: 03 - 05-2012 */

#include<stdio.h>
#include<limits.h>
#include<string.h>
#include<ctype.h>
#include<conio.h>
#include "queue1.h"
#include "b_time.c"

//prototype
void inputfcfs();
void printfcfs();

 //deklarasi
 boolean cek;
 char ntask[30],again;
 int volume,hour,minute,secon,pilih;
 Time ArrivalTime,ServiceTime,FinishTime,temp;
 Queue fcfs;

int main()
{



 //Program
 printf("		-----Kelompok 3-----\n");
 printf("Ade Astriani(111511032) dan Intan Puspitasari(111511042)\n\n");
 printf("		*****Scheduling FCFS*****\n\n");
 CreateQueue(&fcfs);
 SetDefaultJam(&FinishTime);
 SetDefaultJam(&temp);
 do
 {

 printf("\n\n1. Input Scheduling FCFS.\n");
 printf("2. Print Queue of FCFS\n");
 printf("What are you choose=");scanf("%d",&pilih);
 switch(pilih)
 {
 case 1:	inputfcfs();
			break;
 case 2: clrscr();
			printfcfs();
			break;
 default:printf("Choose's wrong!!");
 }
	printf("		*****Scheduling FCFS*****\n\n");
	printf("Back menu(Y/T)?");fflush(stdin);again=toupper(getch());
 }while(again=='Y');
 return 0;
 }




 void inputfcfs()
 {
	clrscr();
	printf("\n***Input Scheduling FCFS***\n");

	do{
		printf("Task Name    = ");fflush(stdin);scanf("%s",ntask);
		printf("Volume(00-59)=");fflush(stdin);scanf("%d",&volume);
		cek=IsValidDetik(volume);
			if(cek==false)
			{
				printf("Volume's no valid\n");
			}
			else
			{
				printf("Arrival Time: Hour=");fflush(stdin);scanf("%d",&hour);
				printf("	    Minute=");fflush(stdin);scanf("%d",&minute);
				printf("	    Secon=");fflush(stdin);scanf("%d",&secon);
				SetTime(&ArrivalTime, hour,minute,secon);
				printf("Arrival Time =");
				PrintTime(ArrivalTime);printf("\n");
				if(ArrivalTime.hh >= temp.hh && ArrivalTime.mm >= temp.mm &&  ArrivalTime.ss >= temp.ss)
				{
					temp=ArrivalTime;
					if(ArrivalTime.hh <= FinishTime.hh && ArrivalTime.mm <= FinishTime.mm && ArrivalTime.ss <= FinishTime.ss)
					{
						ServiceTime=FinishTime;
					}
						else
					{
						ServiceTime=ArrivalTime;
					}
		//PrintTime(ServiceTime);
		//printf("\n");
					FinishTime=NextDetikX(ServiceTime,volume);
		//PrintTime(FinishTime);
					printf("\n");
					InsertV(&fcfs,ntask,volume,ArrivalTime,ServiceTime,FinishTime);
				}
				 else
				{
					printf("\nArrival Time's wrong.Cz This Queue!!\n\n");
				}
          }
		printf(" Input again (Y/T)?");fflush(stdin);
		again=toupper(getch());
		clrscr();
	}while(again=='Y');
  }


void printfcfs()
{
 printf("\n***Result Scheduling FCFS***\n");
			printf("---------------------------\n\n");
			PrintQueue(fcfs);
}

