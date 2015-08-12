/*-------------------------------------------*/
/*File Program : PTR6.CPP                    */
/*Deskripsi : pointer yang nmenunjuk ke array*/
/*-------------------------------------------*/

#include<stdio.h>

int main()
{
					 //Kamus data(deklarasi inisialisasi nilai variabel)
					 static int tgl_lahir[] = {18,6,1989};
					 int *ptgl, i;

					 ptgl=tgl_lahir;
					 printf("Nilai yang ditunjuk oleh ptgl=%d\n",*ptgl);
					 printf("Nilai dari tgl_lahir[0] =%d\n",tgl_lahir[0]);

					 for(i=1; i<=3; i++)
					 {
					  printf("%d\t", *(ptgl+i-1));
					 }

					 return 0;

}

/*STUDI KASUS*/
/*Eksekusi dan pahami maksud program ini(tulis tujuan program ini)*/
/*Modifikasi program tersebut agar bisa menampilkan seluruh elemen array tgl_lahir*/
