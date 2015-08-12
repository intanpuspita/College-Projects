/*
  File program : ptr3.cpp
					  Contoh pemakaian pointer
  Tujuan       : mengetahui panjang dan posisi variabel di memory
  Author       : Intan Puspitasari &
  Tgl          : 2 Maret 2012
*/

#include<stdio.h>

int main()
{
 float d, *pd;

 d=54,5;

 printf("Isi d semula \ %g\n", d);

 pd = &d;
 *pd = *pd+10;
 printf("Isi d kini = %g\n",d);

 return 0;
}