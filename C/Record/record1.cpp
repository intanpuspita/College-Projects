#include<stdio.h>
#include<stdlib.h>
#include<ctype.h>
#include<string.h>
#include<conio.h>
#include "boolean.h"

// Deklarasi type data record
typedef struct Mhs {
						  char NIM[9];
						  char Nama[26];
						  float usia;
						  boolean JK;
						 };

int main()
{
// Deklarasi variabel
	Mhs temp, X[10];
	int i, j, k, jmlPa=0, jmlPi=0;
	char lagi='Y';

// Entry data
	i=0;
	do
	 {
	  flushall();
	  printf("NIM	      : "); gets(X[i].NIM);
	  printf("Nama	      : "); gets(X[i].Nama);
	  printf("Usia	      : "); scanf("%f",&(X[i].usia));
	  printf("Jenis kelamin : "); scanf("%d",&(X[i].JK));
	  flushall();
	  i++;
	  printf("Entry lagi ? (Y/T) ");
	  lagi=getchar();
	 } while(toupper(lagi) != 'T');

// Sort data siswa berdasarkan NIM (asc)
	for(j=0; j<=(i-2); j++)
	 {
	  for(k=(j+1); k<=(i-1); k++)
		{
		 if(strcmp(X[j].NIM, X[k].NIM)>0)
		  {
			strcpy(temp.NIM, X[j].NIM);
			strcpy(temp.Nama, X[j].Nama);
			temp.usia=X[j].usia;
			temp.JK=X[j].JK;

			strcpy(X[j].NIM, X[k].NIM);
			strcpy(X[j].Nama, X[k].Nama);
			X[j].usia=X[k].usia;
			X[j].JK=X[k].JK;

			strcpy(X[k].NIM, temp.NIM);
			strcpy(X[k].Nama, temp.Nama);
			X[k].usia=temp.usia;
			X[k].JK=temp.JK;
		  }
		}
	 }
// Tampilan isi data
	printf("\n\n   Data yang dimiliki : \n");
	printf("NIM	   Nama  	Usia		Jenis Kelamin\n");
	for(j=0; j<i; j++)
	 {
	  printf("%s %10.5s %7.2f", X[j].NIM, X[j].Nama, X[j].usia);
	  if(X[j].JK)
		{
		 jmlPa++;
		 printf("\tPria\n");
		}
	  else
		{
		 jmlPi++;
		 printf("\tWanita\n");
		}
	 }
	printf("Jumlah mahasiswa : %d, Mahasiswi : %d\n", jmlPa, jmlPi);
	getch();
	_exit(0);
	return 0;
}
