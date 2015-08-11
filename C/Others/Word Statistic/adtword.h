/*
File		: adtword.h
Author	: Indani Ambarsari      [111511041]
			  Intan Puspitasari     [111511042]
			  Putri Nur Frida       [111511048]
			  Riska Junia Wulandari [111511051]
*/

#ifndef adtword_H
#define adtword_H
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "boolean.h"
#define Info(N) (N)->info
#define Counter(N) (N)->counter
#define Left(N) (N)->left
#define Right(N) (N)->right

typedef struct binTreeNode *Address;
typedef char infotype;

typedef struct binTreeNode{
	infotype info[BUFSIZ];
	int counter;
	Address left;  //Left child
	Address right; //Right child
}BinTree;

typedef Address Tree;

/* ---------------- Konstruktor Tree ---------------- */
boolean IsEmptyBTree(Address T);
//Mengirimkan true jika list kosong
// Author : Wilvan Aneldi

void CreateTree(Address *T);
// IS : Tree belum terbentuk
// FS : Tree telah terbentuk
//Membuat tree kosong
// Author : Wilvan Aneldi

/* ---------------- Alokasi node baru Tree ---------------- */
Address Alokasi(infotype X[]);
// IS : Elemen tree belum teralokasi
// FS : Teralokasi elemen tree sebesar X dgn jumlah
// Alokasi untuk membuat node baru
// Author : Kiki-Indra-Laras dimodifikasi oleh Riska Junia

/* ---------------- Operasi-operasi Tree ---------------- */
void InsertNode(Address *T, infotype X[]);
// IS : T tidak kosong, X adalah salah satu daun pada pohon biner T
//	FS : T bertambah simpulnya dengan Y sebagai anak kiri Y(jika kiri)
//		  dan anak kanan Y(jika not kiri)
// Author : Wilvan Aneldi dimodifikasi oleh Intan Puspitasari

void Searching(Address T,infotype X[]);
// IS : T dalam keadaan terisi
// FS : Mencari kata X dalam tree
// Menampilkan kata dan jumlahnya bila ada, dan menampilkan pesan khusus bila tidak ada
// Author : Wilvan Aneldi dimodifikasi oleh Indani Ambarsari

/* ---------------- TRAVERSAL Tree ---------------- */
void InOrder(Address root);
// IS : Tree dalam keadaan terisi
// FS : mencetak isi tree
// Inorder traversing
// Author : Wilvan Aneldi

/* --------------- Keyword Operation -------------- */
boolean validasifile(char name[]);
// Untuk mengecek apakah nama file valid atau tidak
// IS : Ada nama file
// FS : status nama file diketahui
// Author : Kiki-Indra-Laras dimodifikasi oleh Riska Junia

int addString(char data, int i, char name[], FILE *f);
// membaca file dan memasukan ke dalam string jika berupa alphabet
// mengembalikan nilai int i(jumlah karakter dalam string nama)
// IS : string nama dalam keadaan kosong
// FS : string nama berisi string alphabet
// Author : Kiki-Indra-Laras dimodifikasi oleh Putri Nur Frida

void clear( char name[]);
// IS : String nama terisi atau kosong
// FS : String nama kosong
// membersihkan string yang sudah dipakai
// Author : Kiki-Indra-Laras dimodifikasi oleh Putri Nur Frida

void Delete(Address *T);
// untuk Dealokasi tree yang sudah ada
// IS : tree tidak dalam keadaan kosong
// FS : tree kosong dan memori yang dialokasi untuk tree menjadi free
// Author : Intan Puspitasari

/*-------------------- Tampilan ---------------------*/
void PrintFile(char name[]);
// IS : untuk membaca file
// FS : mencetak file pada layar
// Author : Kiki-Indra-Laras

void PrintfInfo(Address root);
// IS : tree sudah terisi
// FS : menampilkan info tree pada layar
// Author : Kiki-Indra-Laras

#endif
