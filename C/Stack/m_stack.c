//-----------------------------------------------------------------------
// File m_stack.c (driver / main program)
//------------------------------------------------------------------------
#include "stackdin.h"
#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
int main()
{
// deklarasi
infotype data;
list L;
char pilihan;
do{
// menu
clrscr();
printf("\n UTS SDA\n\n");
printf("Pilihan:\n");
printf("1. Proses Utama \n");
printf("2. Keluar atau Tekan Q \n");
pilihan = getch();
// proses utama
if (pilihan=='1' || pilihan == 't' || pilihan == 'T')
{
do{
clrscr();
printf("Masukkan nilai yang akan dikonversi= ");
scanf("\n%d", &data);
L=XXXXX(data);
printf("\n\nHasil Proses = ");
printStack(L);
printf("\n\nTekan: \nC: Coba lagi \nQ: Keluar \nMenu utama: Home/Esc \n");
pilihan=getch();
}while ((pilihan=='C') || (pilihan=='c'));
}
} while (pilihan != '2' && pilihan != 'Q' && pilihan != 'q');
clrscr();
printf("Thank you.. \n\nPress any key ...");
getch();
_exit(0);
return 0;
}