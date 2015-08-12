/*
File program : ptr1.cpp
					Contoh pemakaian pointer
Tujuan       : mengetahui panjang dan posisi variabel di memory
Author       : Intan Puspitasari
Tgl          : 2 Maret 2012
*/

#include<stdio.h>

int main()
{
 int x, y;  //deklarasi variabel x dan y bertipe integer
 int *px;   //deklarasi variabel px bertipe pointer yang akan menunjuk address yg bertipe integer

 x=87;      //inisialisasi variabel x diisi oleh 87

 px=&x;     //variabel px diisi oleh address dari x
 y=*px;     //variabel y diisi oleh data yg ada dalam address yg ditunjuk px

 printf("Alamat x = %p\n", &x);                      //menampilkan address dari x
 printf("Isi px = %d\n", x);                         //menampilkan x
 printf("Nilai yang ditunjuk oleh px = %d\n", *px);  //menampilkan isi dari address px
 printf("Nilai y = %d\n", y);                        //menampilkan y

 return 0;
}