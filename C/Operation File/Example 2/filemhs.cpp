/*
  Program   : filemhs.c
  Deskripsi : Membuat file record dari data mahasiswa
  Author    : Intan Puspitasari
  Versi/Tgl : 01/30-12-2011
*/

#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#include<ctype.h>
#include<string.h>

#define JUM_BLOK 1

void Input();
void Tampil();
void Bandung();
void CariMhs();
void Statistika();

struct data_mhs{
					 char nim[10];
					 char nama[25];
					 char alamat[30];
					 char kota[12];
					 int tb;
					 int bb;
					 char jk;
					}mhs;
FILE *filemhs;

int main()
{
 int pil;
 gotoxy(20,0); printf("Data Mahasiswa JTK Polban Kelas 1-B 2011\n\n");
 printf("1. Input data mahasiswa\n");
 printf("2. Tampilkan data mahasiwa\n");
 printf("3. Daftar Mahasiswa yang tinggal di Bandung\n");
 printf("4. Daftar Mahasiswa laki-laki yang tingginya lebih dari 170cm\n");
 printf("5. Statistika Mahasiswa berdasarkan kota\n\n");
 printf("Masukkan pilihan anda = "); scanf("%d",&pil);
 switch(pil)
  {
	case 1 : Input(); break;
	case 2 : Tampil(); break;
	case 3 : Bandung(); break;
	case 4 : CariMhs(); break;
	case 5 : Statistika(); break;
	default : printf("Nomor yang anda masukkan salah!\n");
  }
 return 0;
}

void Input()
{
 char jawab;
 if((filemhs=fopen("DATA_MHS.DAT", "ab"))==NULL)
  {
	printf("File tidak dapat dibuat!\r\n");
	exit(1);
  }
 do
  {
	clrscr();
	printf("NIM                : "); fflush(stdin);
	gets(mhs.nim);
	printf("Nama lengkap       : "); fflush(stdin);
	gets(mhs.nama);
	printf("Alamat             : "); fflush(stdin);
	gets(mhs.alamat);
	printf("Kota               : "); fflush(stdin);
	gets(mhs.kota);
	printf("Tinggi badan (cm)  : "); fflush(stdin);
	scanf("%d",&mhs.tb);
	printf("Berat badan (kg)   : "); fflush(stdin);
	scanf("%d",&mhs.bb);
	printf("Jenis kelamin (P/L): "); fflush(stdin);
	scanf("%c",&mhs.jk);

	fwrite(&mhs, sizeof(mhs), 1, filemhs);
	printf("\r\nMasukkan data lagi (Y/T)? "); fflush(stdin);
	jawab=toupper(getche());
  }
 while(jawab=='Y');
 fclose(filemhs);
 printf("\r\nData berhasil disimpan di dalam file.\r\n");
}

void Tampil()
{
 clrscr();
 if((filemhs=fopen("DATA_MHS.DAT", "rb"))==NULL)
  {
	printf("File tidak dapat dibuka!\r\n");
	exit(1);
  }
 gotoxy(30,0); printf("Daftar Mahasiswa 1-B\n\n");
 printf("-------------------------------------------------------------------------------\n");
 printf("    NIM     Nama Lengkap              Alamat                 Kota      TB BB JK\n");
 printf("-------------------------------------------------------------------------------\n");
 while((fread(&mhs, sizeof(mhs), JUM_BLOK, filemhs))==JUM_BLOK)
  printf("%-10s %-19s %-27s %-11s %d %d %c\r\n", mhs.nim, mhs.nama, mhs.alamat, mhs.kota, mhs.tb, mhs.bb, mhs.jk);
 fclose(filemhs);
}

void Bandung()
{
 clrscr();
 if((filemhs=fopen("DATA_MHS.DAT", "rb"))==NULL)
  {
	printf("File tidak dapat dibuka!\r\n");
	exit(1);
  }
 gotoxy(27,0); printf("Daftar Mahasiswa yang Tinggal di Bandung\n");
 printf("-----------------------------\n");
 printf("    NIM     Nama Lengkap\n");
 printf("-----------------------------\n");
 while((fread(&mhs, sizeof(mhs), JUM_BLOK, filemhs))==JUM_BLOK)
  {
	if(strcmp(mhs.kota,"bandung")==0)
	 printf("%-10s %-18s\r\n", mhs.nim, mhs.nama);
  }
 fclose(filemhs);
}

void CariMhs()
{
 clrscr();
 if((filemhs=fopen("DATA_MHS.DAT", "rb"))==NULL)
  {
	printf("File tidak dapat dibuka!\r\n");
	exit(1);
  }
 printf("Daftar Mahasiswa Laki-Laki yang Tingginya Lebih dari 170cm\n\n");
 printf("-----------------------------\n");
 printf("    NIM     Nama Lengkap\n");
 printf("-----------------------------\n");
 while((fread(&mhs, sizeof(mhs), JUM_BLOK, filemhs))==JUM_BLOK)
  {
	if((mhs.tb>=170) && (mhs.jk=='l'))
	 printf("%-10s %-18s\r\n", mhs.nim, mhs.nama);
  }
 fclose(filemhs);
}

void Statistika()
{
 int i, sama, Counter[11];
 char Kota[12][12]={"bandung", "cimahi", "sumedang", "tasikmalaya", "cirebon",
					 "jakarta", "subang", "garut", "sukabumi", "karawang", "anyer", "majalaya"};
 clrscr();
 if((filemhs=fopen("DATA_MHS.DAT", "rb"))==NULL)
  {
	printf("File tidak dapat dibuka!\r\n");
	exit(1);
  }
 for(i=0; i<=12; i++)
  {
	Counter[i]=0;
  }
 while((fread(&mhs, sizeof(mhs), JUM_BLOK, filemhs))==JUM_BLOK)
  {
	i=0;
	sama=0;
	while((i<=11)&&(sama==0))
	 {
	  if(strcmp(mhs.kota,Kota[i])==0)
		{
		 Counter[i]=Counter[i]+1;
		 sama=1;
		}
	  else
		i++;
	 }
  }
 fclose(filemhs);
 gotoxy(27,0); printf("Statistika Mahasiswa Berdasarkan Kota\n\n");
 for(i=0; i<=11; i++)
  {
	printf("%-12s = %d orang\r\n", Kota[i], Counter[i]);
  }
}
