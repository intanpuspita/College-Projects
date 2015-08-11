/*
File		: adtword.c
Author	: Indani Ambarsari      [111511041]
			  Intan Puspitasari     [111511042]
			  Putri Nur Frida       [111511048]
			  Riska Junia Wulandari [111511051]
*/

#include <conio.h>
#include <ctype.h>
#include "adtword.h"
#include "boolean.h"

/* ---------------- Konstruktor Tree ----------------------- */
boolean IsEmptyBTree(Address T)
//Mengirimkan true jika list kosong
//Author : Wilvan Aneldi
{
	return(T==NULL);
}

void CreateTree(Address *T)
// IS : Tree belum terbentuk
// FS : Tree telah terbentuk
//	Membuat tree kosong
// Author : Wilvan Aneldi
{
	*T=NULL;
}

/* ---------------- Alokasi node baru Tree ---------------- */
Address Alokasi(infotype X[])
// IS : Elemen tree belum teralokasi
// FS : Teralokasi elemen tree sebesar X dn jumlah
//	Alokasi untuk membuat node baru
// Author : Kiki-Indra-Laras dimodifikasi oleh Riska Junia
{
	Address N;

	N = (Address) malloc (sizeof(BinTree));
	if (N != NULL)
	{
		strcpy(Info(N) , X);
		Counter(N) = 1;
		Left(N) = NULL;
		Right(N) = NULL;
	}
return N;
}

/* ---------------- Operasi-operasi Tree ---------------- */
void InsertNode(Address *T, infotype X[])
// IS : T tidak kosong
//	FS : T bertambah simpulnya dengan Y sebagai anak kiri Y(jika kiri)
// 	  dan anak kanan Y(jika not kiri)
// Author : Wilvan Aneldi dimodifikasi oleh Intan Puspitasari
{
	Address NewNode;
	if(IsEmptyBTree(*T))
	{
		NewNode = Alokasi(X);	//NewNode menunjuk hasil alokasi
		*T = NewNode;							//address T menjadi root
	}
	else
	{
		if(strcmpi(X, Info(*T))==0)
		 {
			Counter(*T)=Counter(*T)+1; //jika kata yg akan diinsert sama dengan info node yang
												//telah ada, maka counter bertambah
		 }
		else
		 {
			if(strcmpi(X, Info(*T))<0)	//jika kata yg akan diinsert lebih kecil dari kata pada node
				InsertNode(&(Left(*T)), X);	//maka insert kata ke kiri
			else
				InsertNode(&(Right(*T)), X);  //jika tidak insert ke kanan
		 }
	}
}

void Searching(Address T, infotype X[])
// IS : T dalam keadaan terisi
// FS : Mencari kata X dalam tree
// Menampilkan kata dan jumlahnya bila ada, dan menampilkan pesan khusus bila tidak ada
// Author : Wilvan Aneldi dimodifikasi oleh Indani Ambarsari
{
	Address search;
	boolean found=false;

	search=T;
	while(found==false && search!=NULL)	//selama kata belum ketemu dan tidak berada pada akhir tree
	{
		if(strcmpi(Info(search), X)==0) 	//jika kata ketemu, maka cetak
		{                                      //jika tidak lanjutkan pencarian
			found=true;
			printf("\n\t\t %s\t : %d",Info(search), Counter(search));
		}
		else if(strcmpi(X, Info(search))<0)	//jika urutan kata lebih kecil dari node
			search=Left(search);              // teruskan pencarian ke kiri
		else if(strcmpi(X, Info(search))>0)	// jika tidak
			search=Right(search);             // teruskan pencarian ke kanan
	}

	if(found==false)	//jika kata yang dicari tidak ketemu
	{
		printf("\n\n\t\t KATA YANG ANDA CARI TIDAK TERDAPAT DALAM TEKS");	//tampilan pesan tidak ketemu
	}
}

/* ---------------- TRAVERSAL Tree ---------------------- */
void InOrder(Address root)
// IS : Tree dalam keadaan terisi
// FS : mencetak isi tree
// Inorder traversing
// Author : Wilvan Aneldi
{
	if(root != NULL)
	 {
		InOrder(Left(root));
		printf("\t\t %s :%d\n", Info(root), Counter(root));
		InOrder(Right(root));
	 }
}

/* --------------- Keyword Operation -------------------- */
boolean validasifile(char name[])
// Untuk mengecek apakah nama file valid atau tidak
// IS : Ada nama file
// FS : status nama file diketahui (mengembalikan nilai true jika valid)
// Author : Kiki-Indra-Laras dimodifikasi oleh Riska Junia
{
	int i;
	boolean valid;
	i=0;
	valid=false;
	while(name[i]!=0)
	{
		if((name[i]=='.')  && (name[i+1]=='t'))
		{
		i=i+2;
			if((name[i]=='x') && (name[i+1] == 't') && (name[i+2] == 0))
			{
				valid=true;
			}
			/*else if(name[i] == 0)
			{
				valid=true;
			} */
		}
		i++;
	}
	return valid;
}

int addString(char data, int i, char name[], FILE *f)
{
// membaca file dan memasukan ke dalam string jika berupa alphabet
// mengembalikan nilai int i(jumlah karakter dalam string nama)
// IS : string nama dalam keadaan kosong
// FS : string nama berisi string alphabet
// Author : Kiki-Indra-Laras dimodifikasi oleh Putri Nur Frida
	while(isalpha(data))
	{
		name[i] = data;
		i++;
		data=fgetc(f);
	}
	return i;
}

void clear(char name[])
// IS : String nama terisi atau kosong
// FS : String nama kosong
// membersihkan string yang sudah dipakai
// Author : Kiki-Indra-Laras dimodifikasi oleh Putri Nur Frida
{
	int i=0;
	while(name[i] != 0)
	{
		name[i]=0;
		i++;
	}
}

void Delete(Address *T)
// untuk Dealokasi tree yang sudah ada
// IS : tree tidak dalam keadaan kosong
// FS : tree kosong dan memori yang dialokasi untuk tree menjadi free
// Author : Intan Puspitasari
{
	if(! IsEmptyBTree(*T))
		{
			Delete(&(Left(*T)));
			Delete(&(Right(*T)));
			free(*T);
			(*T)=NULL;
		}
}

/*-------------------- Tampilan ---------------------*/
void PrintFile(char name[])
//IS : File 'name' ditemukan
//FS : untuk mengeprint file
/*Mendeklarasikan pointer ke file dengan nama f*/
// nama = file yang dibuka
// Author : Kiki-Indra-Laras
{
	FILE *f;
	char karakter;				/*Variabel bantu untuk menampung data dari FILE*/
	f= fopen(name, "r");		/*Membuka file dan menampungnya ke dalam pointer pf*/
									/*Mengecek apakah file tersebut dapat dibuka atau tidak*/
	if (f !=NULL) 				/*Apabila Berhasil*/
	{
		while(!feof(f))
		{
			karakter=fgetc(f);
			printf("%c", karakter);
		}
		fclose(f);
	}
	else 						/*Apabila gagal*/
	{
		printf("Kesalahan: File tidak dapat dibuka");
		exit(EXIT_FAILURE); 	/*Keluar program dengan nilai 1*/
	}
}

void PrintfInfo(Address root)
//IS : tree sudah terisi
//FS : menampilkan info tree pada layar
// Author : Kiki-Indra-Laras
{
	if(root != NULL)
	 {
		PrintfInfo(Left(root));
		printf("\t\t   %s\n", Info(root));
		PrintfInfo(Right(root));
	 }
}
