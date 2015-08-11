/* File        : list2.h */
/* Deskripsi   : ADT list berkait dengan representasi fisik pointer */
/*	Representasi address dengan pointer */
/* Dimodofikasi dari ADT Pak Ade*/
/* Dibuat oleh : Intan Puspitasari(111511042)*/
/* Tanggal     : 07-04-2012*/

#ifndef list2_H
#define list2_H
#include "boolean.h"
#include <stdio.h>
#define Nil NULL
#define Info1(P) (P)->info1
#define Info2(P) (P)->info2
#define Next(P) (P)->next
#define First(L) (L).First

typedef int infotype;
typedef struct dTujuan *address;
typedef struct dTujuan {char *info1;
								char *info2;
								address next;
							  } Tujuan;
typedef struct dAsal {char *info1;
							 address next;
							} Asal;
typedef struct { address First;
					} List;

/*********** PROTOTYPE ****************/
/**** Konstruktor/Kreator List Kosong ****/
void CreateList (List * L);
/* IS : L sembarang */
/* FS : Terbentuk List Kosong */

/**** Manajemen Memory ****/
address Alokasi (char *X, char *Y);
/* Mengirimkan address hasil alokasi sebuah elemen */
/* Jika alokasi berhasil, maka address != Nil, 	   */
/*	dan misalnya menghasilkan P, maka Info1(P) = X, info2(P) = Y, Next(P) = Nil */
/* Jika alokasi gagal, mengirimkan Nil */

void InsertFirst (List * L, address P);
/* IS : L sembarang, P sudah dialokasi */
/* FS : menambahkan elemen ber-address P sebagai elemen pertama */

void InsVLast (List * L, char *X, char *Y);
/* IS : L mungkin Kosong */
/* FS : melakukan alokasi sebuah elemen dan */
/* menambahkan elemen list di akhir (elemen terakhir adalah yang baru) */
/* bernilai X jika alokasi berhasil. Jika alokasi gagal IS = FS */

void InsertLast (List * L, address P);
/* IS : L sembarang, P sudah dialokasi */
/* FS : P ditambahkan sebagai elemen terakhir yang baru */

int NbElmt (List L);
/* Mengirimkan banyaknya elemen list, mengirimkan 0 jika list kosong */

void PrintInfo (List L);
/* IS : L mungkin kosong */
/* FS : Jika List tidak kosong, semua info yang disimpan pada elemen list */
/*	diprint. Jika list kosong, hanya menuliskan "List Kosong" */

#endif
