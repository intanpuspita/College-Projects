/* File        : list2.c */
/* Deskripsi   : Body ADT Linked list yang hanya dikenali First(L) */
/* Dimodofikasi dari ADT Pak Ade*/
/* Dibuat oleh : Intan Puspitasari(111511042)*/
/* Tanggal     : 07-04-2012*/

#include <limits.h>
#include <malloc.h>
#include <string.h>
#include "list2.h"

/********** BODY SUB PROGRAM ***********/
/**** Konstruktor/Kreator List Kosong ****/
void CreateList (List * L)
/* IS : L sembarang */
/* FS : Terbentuk List Kosong */
{
	 First(*L) = Nil;
}

/**** Manajemen Memory ****/
address Alokasi (char *X, char *Y)
/* Mengirimkan address hasil alokasi sebuah elemen */
/* Jika alokasi berhasil, maka address != Nil, 	   */
/*	dan misalnya menghasilkan P, maka Info1(P) = X, info2(P) = Y, Next(P) = Nil */
/* Jika alokasi gagal, mengirimkan Nil */
{
/* Kamus Lokal */
	address P;
/* Algoritma */
	P = (address) malloc (sizeof (Tujuan));
	if (P != Nil)		/* Alokasi berhasil */
	 {
	  Info1(P) = X;
	  Info2(P) = Y;
	  Next(P) = Nil;
	 }
	return (P);
}

void InsertFirst (List * L, address P)
/* IS : L sembarang, P sudah dialokasi */
/* FS : menambahkan elemen ber-address P sebagai elemen pertama */
{
	 First(*L) = P;
}

void InsVLast (List * L, char *X, char *Y)
/* IS : L mungkin Kosong */
/* FS : melakukan alokasi sebuah elemen dan */
/* menambahkan elemen list di akhir (elemen terakhir adalah yang baru) */
/* bernilai X dan Y jika alokasi berhasil. Jika alokasi gagal IS = FS */
{
	 /* Kamus Lokal */
	address P;
	 /* Algoritma */
	P = Alokasi (X, Y);
	if (P != Nil)
	{
	 InsertLast (&(*L), P);
	}
}

void InsertLast (List * L, address P)
/* IS : L sembarang, P sudah dialokasi */
/* FS : P ditambahkan sebagai elemen terakhir yang baru */
{
/* Kamus Lokal */
	address Last;
/* Algoritma */
	if (First(*L) != Nil)
	{
	 Last = First(*L);
	 while (Next(Last) != Nil)
	 {	Last = Next(Last); 	}
	 Next(Last) = P;
	}
	else
	{	First(*L) = P;		}
}

int NbElmt (List L)
/* Mengirimkan banyaknya elemen list, mengirimkan 0 jika list kosong */
{
	 /* Kamus Lokal */
	int Jml = 0;
	address P;
	 /* Algoritma */
	if (First(L) != Nil)
	{
		 P = First(L);
		 for (;;)
		 {
		if (P == Nil)
		{   break;	}
		else	/* Belum berada di akhir List */
		{
			 Jml++;
			 P = Next(P);
		}
		 }	/* P = Nil */
	}
	return (Jml);
}


void PrintInfo (List L)
/* IS : L mungkin kosong */
/* FS : Jika List tidak kosong, semua info yang disimpan pada elemen list */
/*	diprint. Jika list kosong, hanya menuliskan "List Kosong" */
{
/* Kamus Lokal */
	address P;

/* Algoritma */
	if (First(L) == Nil)
	{
	 printf ("List Kosong .... \a\n");
	}
	else	/* List memiliki elemen */
	{
	 P = First(L);
	 for (;;)
	 {
	  if (P == Nil)
		{
		 printf("\n");
		 break;
		}
	  else	/* Belum berada di akhir List */
		{
		 puts(Info1(P));
		 puts(Info2(P));
		 P = Next(P);
		}
	 }

	}
  infotype jumlah;
  jumlah=NbElmt (L);
  printf("Jumlah mahasiswa = %d", jumlah);
}
