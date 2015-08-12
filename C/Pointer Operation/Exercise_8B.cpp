/*--------------------------------------------------------------*/
/*File Program : PTR8b.CPP                                                                                                                                          */
/*(Pointer dan string bagian ke_2)                              */
/*Deskripsi :menukar isi duah buah string yang ditunjuk oleh pointer*/
/*PERHATIKAN!Bila dibandingkan dengan program PTR8A.cpp,maka dengan*/
/*pointer,penyalinan isi array tidak perlu dilakukan.sehingga bisa menghemat waktu eksekusi*/
/*--------------------------------------------------------------*/

#include<stdio.h>

int main()
{
					 /*Kamus data(deklarasi,inisialisasi nilai variabel)*/
					 char *nama1="DEWI SARTIKA";
					 char *nama2="SULTAN HASANUDIN";
					 char *namax;

					 puts("Nama semula:");
					 printf("Nama 1-->%s\n",nama1);
					 printf("Nama 2-->%s\n",nama2);

					 /*Penukaran string yang ditunjuk oleh pointer nama1 dan nama2*/
					 namax=nama1;
					 nama1=nama2;
					 nama2=namax;

					 puts("Nama sekarang");
					 printf("Nama 1-->%s\n",nama1);
					 printf("Nama 2-->%s\n",nama2);

					 return 0;
}
