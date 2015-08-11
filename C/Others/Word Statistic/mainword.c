/*
File		: mainword.c
Author	: Indani Ambarsari      [111511041]
			  Intan Puspitasari     [111511042]
			  Putri Nur Frida       [111511048]
			  Riska Junia Wulandari [111511051]
*/

#include <conio.h>
#include "adtword.h"


int main()
{
	FILE *f_teks, *record;
	Tree Teks, nama_f;
	char jawab, judul_f[BUFSIZ], kata[BUFSIZ];

	CreateTree(&Teks);
	CreateTree(&nama_f);
	do
	{
		clrscr();
		gotoxy(17,1);printf ("*=================================================*");
		gotoxy(17,2);printf ("*                    PROGRAM                      *");
		gotoxy(17,3);printf ("*                 STATISTIK KATA                  *");
		gotoxy(17,4);printf ("*=================================================*");
		gotoxy(17,5);printf ("*                  Menu pilihan                   *");
		gotoxy(17,6);printf ("*  1. Tampilkan statistik kata                    *");
		gotoxy(17,7);printf ("*  2. Cari kata yang diinginkan                   *");
		gotoxy(17,8);printf ("*  3. Help                                        *");
		gotoxy(17,9);printf ("*  4. Profil Author                               *");
		gotoxy(17,10);printf("*  5. Exit                                        *");
		gotoxy(17,11);printf("*=================================================*");
		gotoxy(17,12);printf("   Masukkan pilihan Anda ...");
		jawab=getch();
		switch(jawab)
		{
			case '1': clrscr();
						 gotoxy(17,1);printf("*=================================================*");
						 gotoxy(17,2);printf("*                     NAMA FILE                   *");
						 gotoxy(17,3);printf("* (Contoh : sample.txt atau C:\\Folder\\sample.txt) *");
						 gotoxy(17,4);printf("*=================================================*");
						 record = fopen("file", "rb"); //membuka file berisi nama file teks yang pernah dibuka
						 if(record != NULL)
						 {
							printf("\n\t\t   File yang terakhir dibuka :\n");
							while ((fread(&judul_f,sizeof(judul_f),1,record))==1)
							{
								  InsertNode(&nama_f, judul_f);
							}
							PrintfInfo(nama_f);

							printf("\n\t\t*=================================================*");
						 }
						 fclose(record);
						 printf("\n\t\t  Masukkan nama file : "); gets(judul_f);
						 if(!validasifile(judul_f))
						 {
							printf("\n\n\t\t FILE YANG ANDA INPUTKAN BUKAN FILE TEKS");
						 }
						 else
						 {
							f_teks = fopen(judul_f, "r");
							if( f_teks == NULL ) // jika program tidak menemukan file yang ingin dibuka user,
							{
								gotoxy(17,7);printf("  FILE TIDAK DITEMUKAN");
							}
							else
							{
								if(!IsEmptyBTree(Teks))
								{
									Delete(&Teks);
								}
								CreateTree(&Teks);
								clrscr();
								printf("*=============================================================================*\n");
								printf("*                                    ISI FILE                                 *\n");
								printf("*=============================================================================*\n");
								printf("\nNama file : %s\n\n", judul_f);
								PrintFile(judul_f);
								while(!feof(f_teks))
								{
									if(addString(fgetc(f_teks), 0, kata, f_teks)!=0)
									{
										InsertNode(&Teks, kata);
										clear(kata);
									}
								}
								fclose(f_teks);
								record = fopen("file", "ab");  //menyimpan nama file teks yang pernah dibuka ke file
								if(record != NULL)
								{
									fwrite(&judul_f,sizeof(judul_f),1,record);
								}
								fclose(record);
								printf("\n\n\t\t*---------------------------------------------------*");
								printf("\n\t\t Tekan Sembarang Tombol Untuk Melihat Statistik Kata");getch();
								clrscr();
								gotoxy(17,1);printf("*=================================================*");
								gotoxy(17,2);printf("*              STATISTIK KATA                     *");
								gotoxy(17,3);printf("*=================================================*\n\n");
								InOrder(Teks);
							}
						 }
						 break;
			case '2': clrscr();
						 gotoxy(17,1);printf("*=================================================*");
						 gotoxy(17,2);printf("*                  PENCARIAN                      *");
						 gotoxy(17,3);printf("*=================================================*");
						 gotoxy(17,5);printf(" Masukkan kata yang ingin dicari : "); gets(kata);
						 if(IsEmptyBTree(Teks))
						 {
							gotoxy(17,6);printf("  BELUM ADA FILE TEKS YANG DIBUKA");
						 }
						 else
						 {
							Searching(Teks, kata);
						 }
						 break;
			case '3': clrscr(); PrintFile("help.txt"); break;
			case '4': clrscr(); PrintFile("author.txt"); break;
			case '5': clrscr(); gotoxy(34,15); printf("...TERIMA KASIH...");
						 getch();_exit(1);
			default : gotoxy(17,14); printf("   Pilihan yang anda masukkan salah, coba lagi...");
		}

		if (jawab !='5')
			{
				printf("\n\n\n\t\t*-------------------------------------------------*");
				printf("\n\n\t\tTekan Sembarang Tombol Untuk Kembali ke Menu Utama");getch();
			}
	} while(jawab!='5');
	return 0;
}