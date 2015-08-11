/*
  Program   : filecpp.c
  Deskripsi : Mebuat program pembacaan file cpp
  Author    : Intan Puspitasari
  Versi/Tgl : 01/19-12-2011
*/

#include<stdio.h>
#include<stdlib.h>
#include<conio.h>

void HitungKurawal(char huruf, int *kurawalbuka, int *kurawaltutup);
void TampilJmlKur(int kurawalbuka, int kurawaltutup);
void PasanganKur(int kurawalbuka, int kurawaltutup);

int main()
{
/* Kamus */
	FILE *teks;
	int huruf, kurawalbuka, kurawaltutup;

/* Program */
	if((teks=fopen("file.cpp", "r"))==NULL)
	 {
	  printf("File tidak ada");
	  exit(0);
	 }

	kurawalbuka=0;
	kurawaltutup=0;
	while((huruf=fgetc(teks))!=EOF)
	 {
	  printf("%c", huruf);
	  HitungKurawal(huruf, &kurawalbuka, &kurawaltutup);
	 }
	TampilJmlKur(kurawalbuka, kurawaltutup);
	PasanganKur(kurawalbuka, kurawaltutup);
	return 0;
}

void HitungKurawal(char huruf, int *kurawalbuka, int *kurawaltutup)
{
 if(huruf=='{')
  *kurawalbuka=*kurawalbuka+1;
 else
	{
	 if(huruf=='}')
	  *kurawaltutup=*kurawaltutup+1;
	}
}

void TampilJmlKur(int kurawalbuka, int kurawaltutup)
{
 printf("\n\nJumlah kurawal buka = %d", kurawalbuka);
 printf("\n\nJumlah kurawal tutup = %d", kurawaltutup);
}

void PasanganKur(int kurawalbuka, int kurawaltutup)
{
 if(kurawalbuka==kurawaltutup)
  printf("\nJumlah kurawal buka dan tutup balance.");
 else
  printf("\nJumlah kurawal buka dan tutup tidak balance");
}
