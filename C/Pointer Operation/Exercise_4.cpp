/*
  File program : ptr4.cpp
					  Contoh pemakaian pointer
  Tujuan       : mengetahui panjang dan posisi variabel di memory
  Author       : Intan Puspitasari & Sri Fitriah
  Tgl          : 2 Maret 2012
*/

#include<stdio.h>

int main()
{
 int z, s, *pz, *ps;     //deklarasi variabel z, s, pz, ps bertipe integer

 z=20;                   //inisialisasi variabel z diisi dengan nilai 20
 s=30;                   //inisialisasi variabel s diisi dengan nilai 30

 pz=&z;                  //variabel pz diisi oleh address dari z
 ps=&s;                  //variabel ps diisi oleh address dari s
 *pz = *pz + *ps;        //nilai dalam address pz diisi oleh nilai dalam address pz ditambah nilai dalam address ps

 printf("z = %d, s = %d\n", z, s);  //menampilkan z dan s
 return 0;
}