/*--------------------------------------------------------------*/
/*File Program : PTR8a.CPP                                                                                                                                          */
/*(Pointer dan string bagian ke_2)                              */
/*Deskripsi :menukar isi duah buah string TANPA pemakain pointer*/
/*--------------------------------------------------------------*/

#include<stdio.h>
#include<string.h>
#define panjang 20

int main()
{
					 /*Kamus Data(deklarasi,inisialisasi nilai variabel)*/
					 char nama1[panjang]="DEWI SARTIKA";
					 char nama2[panjang]="SULTAN HASANUDIN";
					 char namax[panjang];

					 puts("Nama semula: ");
					 printf("Nama 1-->%s\n",nama1);
					 printf("Nama 2-->%s\n",nama2);

					 /*Pertukaran string*/
					 strcpy(namax,nama1);
					 strcpy(nama1,nama2);
					 strcpy(nama2,namax);

					 puts("Nama sekarang:");
					 printf("Nama 1-->%s\n",nama1);
					 printf("Nama 2-->%s\n",nama2);


return 0;
}
