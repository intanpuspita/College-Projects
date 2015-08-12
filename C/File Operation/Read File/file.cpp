/*
  Program   : file.c
  Deskripsi : Mebuat program pembacaan file
  Author    : Intan Puspitasari
  Versi/Tgl : 01/19-12-2011
*/

#include<stdio.h>
#include<stdlib.h>
#include<conio.h>

void HitungKata(char huruf, int *jmlkata);
int CekKata(char huruf);
void TampilJumlahKata(int jmlkata);

int main()
{
/* Kamus */
	FILE *teks;
	int huruf, jmlkata;

/* Program */
	if((teks=fopen("fileteks.txt", "r"))==NULL)
	 {
	  printf("File tidak ada");
	  exit(0);
	 }

	jmlkata=1;
	while((huruf=fgetc(teks))!=EOF)
	 {
	  printf("%c", huruf);
	  HitungKata(huruf, &jmlkata);
	 }
	TampilJumlahKata(jmlkata);
	return 0;
}

void HitungKata(char huruf, int *jmlkata)
{
 *jmlkata=*jmlkata+CekKata(huruf);
}

int CekKata(char huruf)
{
 int kata;
 if(huruf==' ')
  kata=1;
 else
  kata=0;
 return kata;
}

void TampilJumlahKata(int jmlkata)
{
 printf("\n\nJumlah kata = %d", jmlkata);
}
