		/*****************************************************************/
	  /*	File			:  bstree.c	 					 	  						 */
	 /*	Deskripsi	:  modul kamus Inggris - Indonesia					*/
	/*		Author		:  Wilvan Aneldi						  				  */
  /*		NIM			:  07501025							 	 				 */
 /*		Kelas			:  1B														*/
/*****************************************************************/
#include "bstree.h"

/***********PROTOTYPE*************/
/**predikat jika tree dalam keadaan kosong**/
boolean TreeEmpty(address T)
/* mengirim true jika tree kosong */
{
	return (T==NULL);
}

void CreateTree(address * T)
/* IS	: T sembarang */
/* FS	: Terbentuk List Kosong */
{
	*T=NULL;
}

/* MANAJEMEN MEMORY */
address Alokasi(char Indo[], char English[])
/* Mengirimkan address hasil alokasi sebuah root */
/* Jika alokasi berhasil, maka address != Nil, 	   */
/*	dan misalnya menghasilkan P, maka English(P) = kata bahasa inggris,*/
/* Indo(P)= kata bahasa indonesiam, right(P) = R, left(P) = L */
/* Jika alokasi gagal, mengirimkan Nil */
{
	address P;

	P=(address)malloc(sizeof(BinTree));	//alokasi P

	if(P!=NULL)
	{
		strcpy(English(P),English);	//mengcopy kata bahasa inggris ke node
		strcpy(Indonesia(P),Indo);		//mengcopy kata bahasa indonesia ke node
		Left(P)=NULL;	//pointer kiri=null
		Right(P)=NULL;	//pointer kanan=null
		return P;
	}
	else
		return NULL;	//jika p = null
}

/**** PRIMITIF BERDASARKAN NILAI ****/
void InsertNode(address * T, char Indo[], char English[])
/* IS : T tidak kosong
	FS : T bertambah simpulnya dengan Y sebagai anak kiri Y(jika kiri)
		  dan anak kanan Y(jika not kiri)
*/
{
	address ndbaru;

	if(TreeEmpty(*T))
	{
		ndbaru = Alokasi(Indo, English);	//ndbaru menunjuk hasil alokasi
		*T = ndbaru;	//address T menjadi root
		Left(*T) = NULL;
		Right(*T) = NULL;
	}
	else if(strcmp( English, English(*T))<0)	//jika kata yg akan diinsert lebih kecil dari kata pada node
		InsertNode(&(Left(*T)), Indo, English);	//maka insert kata ke kiri
	else if(strcmp( English, English(*T))>0)	//jika tidak insert ke kanan
		InsertNode(&(Right(*T)), Indo, English);
}

/*************** PROSES SEMUA ELEMEN TREE *******************/
void PrintTree (address T)
{
	//IS	: T sembarang
	//FS	: mencetak node-node pada Tree T berikut anak kanan dan kiri (secara inorder)
	address cetak;
	cetak=T;
	
	if(!TreeEmpty(cetak))
	{
		PrintTree(Left(cetak));
		printf(" %s = ",English(cetak)); 	//cetak kata bahasa inggris
		printf(" %s \n",Indonesia(cetak));	//cetak kata bahasa indonesia
		PrintTree(Right(cetak));
	}
}


void CariKata(address T,infotype kata[], int x, int y) //x dan y sebagai pengatur posisi tampilan
/*mencari kata yang pada kamus lalu menampilkan artinya*/
{
	address cari;
	boolean ketemu=false;
	cari=T;

	while(ketemu==false && cari!=NULL)	//selama kata belum ketemu dan tidak berada pada akhir tree
	{
		if(strcmp( English(cari), kata )==0) 	//jika kata ketemu, maka cetak
		{                                      //jika tidak lanjutkan pencarian
			ketemu=true;
			gotoxy(x,y); printf("%s",Indonesia(cari));
		}
		else if(strcmp( kata, English(cari) )<0)	//jika urutan kata lebih kecil dari node
			cari=Left(cari);                       // teruskan pencarian ke kiri
		else if(strcmp( kata, English(cari) )>0)	// jika tidak
			cari=Right(cari);                      // teruskan pencarian ke kanan
	}
	
	if(ketemu==false)	//jika kata yang dicari tidak ketemu
	{
		clrscr();
		gotoxy(15,12); printf("MAAF, KATA YANG DIINPUTKAN TIDAK ADA DALAM KAMUS");	//tampilanm pesan tidak ketemu
	}
	
}

/****************PROSES TRAVERSING******************/
/*void PreOrder(address T)
{
	if(!TreeEmpty(T))
	{
		printf(" %d |", Info(T));
		PreOrder(Left(T));
		PreOrder(Right(T));
	}
}

void PostOrder(address T)
{
	if(!TreeEmpty(T))
	{
		PostOrder(Left(T));
		PostOrder(Right(T));
		printf(" %d |",Info(T));
	}
}

void InOrder(address T)
{
	if(!TreeEmpty(T))
	{
		InOrder(Left(T));
		printf(" %d |",Info(T));
		InOrder(Right(T));
	}
}
*/
