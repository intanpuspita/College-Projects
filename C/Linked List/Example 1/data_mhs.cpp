/* File        : data_mhs.cpp*/
/* Deskripsi   : Penerapan linked list dalam membuat data kota asal mahasiswa */
/* Dibuat oleh : Intan Puspitasari(111511042)*/
/* Tanggal     : 09-04-2012*/

#include "list2.h"
#include<conio.h>
#include<stdio.h>
#include<ctype.h>
#include<string.h>
#include<stdlib.h>

char nim[10], nama[20];
List MyList;
int i;
Asal A[2];

int main()
{
 int no_pil;
 char jawab;
 A[1].info1="Bandung";
 A[2].info1="Jakarta";

 do
  {
	clrscr();
	printf("Pilihan :\n");
	printf("1. Entri data mahasiswa\n");
	printf("2. Tampilkan data mahasiswa berdasarkan kota\n");
	printf("3. Tampilkan semua data mahasiswa\n");
	printf("Masukkan pilihan anda : "); scanf("%d",&no_pil);

	switch(no_pil)
	{
	 case 1 : {
 clrscr();
 printf("Pilihan kota:\n");
 printf("1. Bandung\n");
 printf("2. Jakarta\n");
 printf("Masukkan pilihan kota : "); scanf("%d",&i);fflush(stdin);
 CreateList (&MyList);
 char jawab;
 do
 {
  printf("NIM  : "); gets(nim);
  printf("Nama : "); gets(nama);
  InsVLast (&MyList, nim, nama);
  printf("\nInput lagi (Y/T)? "); fflush(stdin);
  jawab=toupper(getche());
 }
 while(jawab=='Y');
}; break;

	 case 2 : {
 clrscr();
 printf("Pilihan kota:\n");
 printf("1. Bandung\n");
 printf("2. Jakarta\n");
 printf("Masukkan pilihan kota : "); scanf("%d",&i);
 PrintInfo(MyList);
}; break;
	 case 3 : {
 clrscr();
 for(i=1; i<=2; i++)
  {
	printf("%s\n", A[i].info1);
	PrintInfo(MyList);
  }
}; break;
	 default : ;
	}
	printf("\nKembali ke Menu (Y/T)? "); fflush(stdin);
	jawab=toupper(getche());
  }
 while(jawab=='Y');
 return 0;
}
