/*************************************************************/
/* File			: time1.h					*/
/* Deskripsi   : Spesifikasi ADT Time 	*/
/* Author		: Intan Puspitasari "Mengedit ADTjam dari Ibu Ani*/
/* NIM			: 111511042 				*/
/* Tanggal		: 	02-05-2012				*/
/*************************************************************/

#ifndef time1_h
#define time1_h

#include "boolean.h"
#include <stdio.h>
/***************************/
/*  Type data */
/***************************/
/* Kamus */
typedef struct { int hh; int mm; int ss;} Time;

/***************************/
/*  S P E S I F I K A S I  */
/***************************/

void SetDefaultJam (Time *T);
/* Constructor Membentuk sebuah Jam, dengan nilai default adalah 00:00:00 */

int GetJam (Time T);
/* Mengambil bagian hh(jam) dari Jam */

int GetMenit (Time T);
/* Mengambil bagian mm(menit) dari Jam */

int GetDetik (Time T);
/* Mengambil bagian ss(detik) dari Jam */

void MenitToJam(Time *T);
//Mengkonversi Menit ke Jam

void DetikToMenit(Time *T);
//Mengkonversi Detik ke Menit

boolean IsValidJam(int hh);
//Memeriksa komponen Jam (jam) valid

boolean IsValidMenit(int mm);
//Memeriksa komponen Jam (menit) valid

boolean IsValidDetik(int ss);
//Memeriksa komponen Jam (detik) valid

Time NextDetikX (Time T1, int X);
//Untuk membentuk Time baru (T2) dengan nilai detiknya
//yaitu detik T1 ditambah X detik

void PrintTime (Time T);
//Print Jam dengan format 00:00:00
void SetTime(Time *T,int hh, int mm, int ss);
//membentuk jam
#endif