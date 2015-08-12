// ------------------------------------------------------------------------
// File stackdin.h (library)
// ------------------------------------------------------------------------
#ifndef stackdin_H
#define stackdin_H
#include "boolean.h"
#define Nil NULL
#define next(P) (P)->next
#define data(P) (P)->data
#define top(L) (L).top
#include <limits.h>
#include <malloc.h>
typedef struct telStack *address;
typedef int infotype;
typedef struct telStack{
infotype data;
address next;
} elStack;
typedef struct{
address top;
} list;
// PROTOTYPE
// Predikat untuk keadaan list
boolean listEmpty (list L);
/* Fungsi : Mengirim true jika List Kosong */
// Konstruktor/Kreator List Kosong
void createList (list *L);
/* IS : L sembarang */
/* FS : Terbentuk List Kosong */
// Manajemen Memory
address alokasi (infotype X);
/* Fungsi : Mengirimkan address hasil alokasi sebuah elemen */
/* Jika alokasi berhasil, maka address != Nil, */
/* dan misalnya menghasilkan P, maka data(P) = X, next(P) = Nil */
/* Jika alokasi gagal, mengirimkan Nil */
void deAlokasi (address P);
/* IS : P terdefinisi */
/* FS : P dikembalikan ke sistem */
/* Fungsi : Melakukan dealokasi / pengembalian address P ke system */
void PUSH (list *L, infotype X);
/* IS : X adalah data yang akan diinput */
/* FS : Stack bertambah */
/* Fungsi : Melakukan penambahan stack*/
infotype POP (list *L);
/* IS : terdapat list of Stack */
/* FS : stack terhapus satu */
/* Fungsi : Melakukan penghapusan salah satu stack */
void printStack (list L);
/* IS : terdapat list of stack */
/* FS : stack ditampilkan */
/* Fungsi : Melakukan penampilan stack */
list XXXXX(infotype data);
/* IS : ............................................................ */
/* FS : ............................................................ */
/* Fungsi : .........................................................*/
#endif