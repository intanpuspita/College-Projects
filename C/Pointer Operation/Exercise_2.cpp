/*
  File program : ptr2.cpp
					  Contoh pemakaian pointer yang salah
  Tujuan       : mengetahui panjang dan posisi variabel di memory
  Author       : Intan Puspitasari & Sri Fitriah
  Tgl          : 2 Maret 2012
*/

#include<stdio.h>

int main()
{
 float *pu;      //deklarasi variabel pu bertipe pointer yang akan menunjuk address yg bertipe float
 float nu;       //deklarasi variabel nu bertipe float

 int u = 1234;   //deklarasi sekaligus inisialisasi variabel u bertipe integer dengan nilai 1234

 pu=&u;     //variabel pu diisi oleh address dari u
 nu=*pu;    //variabel nu diisi oleh data yg ada dalam address yg ditunjuk pu

 printf("u = %d\n", u);        //menampilkan u
 printf("nu = %f\n", nu);      //menampilkan nu atau isi dari address pu

 return 0;
}