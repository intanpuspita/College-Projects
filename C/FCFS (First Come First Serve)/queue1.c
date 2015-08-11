/*Program		: queue1.c*/
/*Deskripdi		: body queuek*/
/*Author			: Ade Astriani(111511032) mengedit dari ADTlist dari Pak Ade Candra
					  kelompok 3  kelas : 1B */
/*Date			: 03 - 05-2012 */
#include <limits.h>
#include <malloc.h>
#include "queue1.h"
//#include "b_time.c"



void CreateQueue(Queue *Q)
{
 (*Q).First=NULL;
}

address Alokasi(char T[30],int V,Time A, Time S,Time F)
{
 /* Kamus Lokal */
	 address P;
	 /* Algoritma */
	 P = (address) malloc (sizeof (ElmntQueue));
	 if (P != NULL)		/* Alokasi berhasil */
	 {
		 strcpy(P->task,T);
		 P->volume=V;
		 P->arri_time=A;
		 P->serv_time=S;
		 P->fin_time=F;
		 P->next=NULL;
	 }
	 return (P);
}
void Insert(Queue *Q, address P)
{
  /* Kamus Lokal */
	address Last;
	 /* Algoritma */
	if ((*Q).First != NULL)
	{
		 Last =(*Q).First;
		 while (Last->next != NULL)
		 {	Last = Last->next; 	}
		 Last->next = P;
	}
		else
	{	(*Q).First = P;		}
}
void InsertV(Queue *Q,char T[30],int V,Time A, Time S,Time F )
{
 /* Kamus Lokal */
	address P;
	 /* Algoritma */
	P = Alokasi (T,V,A,S,F);
	if (P != NULL)
	{	Insert(&(*Q), P);		}
}
void PrintQueue (Queue Q)
/* IS : L mungkin kosong */
/* FS : Jika List tidak kosong, semua info yang disimpan pada elemen list */
/*	diprint. Jika list kosong, hanya menuliskan "List Kosong" */
{
	 /* Kamus Lokal */
	address P;
	 /* Algoritma */
	if ((Q).First == NULL)
	{
		 printf ("List Kosong .... \a\n");
	}
	else	/* List memiliki elemen */
		{
		 P =(Q).First;
		 for (;;)
		 {
		if (P == NULL)
		{
			 printf("\n");
			 break;
		}
		else	/* Belum berada di akhir List */
		 {
			 printf("Task name= ");
			 printf("%s\n",P->task);
			 printf("Volume= ");
			 printf("%d\n",P->volume);
			 printf("Arrival Time= ");
			 PrintTime(P->arri_time);
			 printf("\n");
			 printf("Service Time= ");
			 PrintTime(P->serv_time);
			 printf("\n");
			 printf("Finish TIme= ");
			 PrintTime(P->fin_time);
			 printf("\n");
			 printf("-------------------\n");
			 P = P->next;
		}
		 }
	}
}


