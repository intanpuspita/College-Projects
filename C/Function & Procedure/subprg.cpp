#include<stdio.h>

int maxab(int a, int b);    // fungsi
void tukar(int *a, int *b); // prosedur

int main()
{
/* Program utama */
/* Membaca dua bilangan bulat */
/* Menuliskan maksimum dua bilangan yang dibaca dengan memanggil fungsi */
/* Menukar kedua bilangan dengan prosedur */

/* Kamus */
	int a, b;

	printf("Maksimum dua bilangan : \n");
	printf("Ketikkan dua bilangan, pisahkan dengan RETURN : \n");
	scanf("%d %d", &a, &b);
	printf("Kedua bilangan : a = %d, b = %d", a, b);
	printf("Maksimum = %d\n", maxab(a,b));
	printf("Menukar kedua bilangan diatas : \n");
	tukar(&a,&b);
	printf("Kedua bilangan setelah ditukar : a = %d, b = %d\n", a, b);
	return 0;
}

/* BODY realisasi prosedur/fungsi */
int maxab(int a, int b)
{
/* Algoritma mencari maksimum dua bilangan bulat */
	return ((a>=b) ? a : b);
} /* End function maxab */

void tukar(int *a, int *b)
{
	 int temp;
 /* Menukar dua bilangan integer */
	 temp=*a;
	 *a=*b;
	 *b=temp;
}/* End procedure tukar */
