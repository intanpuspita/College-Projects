/* File        : m_linked.c */
/* Deskripsi   : Driver / main program untuk ADT Linked List */
/* Dibuat oleh : Ade Chandra Nugraha*/
/* Tanggal     : 25-10-2001 */

#include "list1.h"
#include <stdio.h>

int main()
{
	/* Kamus Lokal */
		List MyList, List2, List3;
		int i;
		infotype isi;
		address P, Prec;
		
	/* Program */
	CreateList (&MyList);
	printf ("Jml Elemen List adalah : %d \n", NbElmt(MyList));
/* Menambah List di awal */
	i = 1;
	while (i <= 5)
	{
		InsVFirst (&MyList, i*5);
		i++;
	}
	printf ("Hasil InsVFirst 5 x adalah : "); PrintInfo (MyList);
	printf ("Node Maksimal = %d ",Max (MyList));
	printf ("Node Minimal = %d ",Min (MyList));
	printf ("Rata-rata = %d \n",Average (MyList));
/* Mencari suatu elemen di list */	

	P = Search(MyList, 15);
printf ("Search yang berhasil (15) : P = %d, Ketemu = %d \n",P,FSearch(MyList,P));
	DelP (&MyList, 15);

/* Insert di Last */
	printf ("Insert di akhir nilai 723 : ");
	InsVLast (&MyList, 723); 
	PrintInfo (MyList);

/* Insert diantara 2 elemen */
	printf ("Insert sebelum elemen 10  : ");
	Prec = SearchPrec (MyList, 10);
	P = Alokasi (2712);
	if (P != Nil)
	{   InsertAfter (&MyList, P, Prec);	}
	PrintInfo (MyList);
	
/* Menghapus elemen List */	
	printf ("\tHasil Delete dari elemen List :\n");
	printf ("Jumlah elemen list = %d \n", NbElmt(MyList));
	DelVFirst (&MyList, &isi);		
	printf ("DelVFirst adalah %d\t", isi);
	
	DelVLast (&MyList, &isi);		
	printf ("DelVLast adalah %d\t", isi);

/* Menghapus elemen di tengah-tengah */
	Prec = SearchPrec (MyList, 10);	/* Node yang akan dihapus */
	if (Prec != Nil)
	{
	    DelAfter (&MyList, &P, Prec);		
	    isi = Info(P);
	    DeAlokasi (P);
	    printf ("DelAfter adalah %d\n", isi);
	}    
	printf ("Hasil setelah delete : ");
        PrintInfo (MyList);
	
	printf ("Insert sebelum elemen 5 : ");
	Prec = SearchPrec (MyList, 5);
	P = Alokasi (-987);
	if (P != Nil)
	{   InsertAfter (&MyList, P, Prec);	}
	PrintInfo (MyList);

/* Invers List */
	printf ("\tHasil Invers dari List yang ada : \n");
	printf ("Versi 1 : ");
	List2 = FInversList (MyList);	
	PrintInfo (List2);
	
	printf ("Versi 2 : ");
	InversList (&MyList);
        PrintInfo (MyList);

/* Copy List */
	printf ("\tHasil Copy dari List yang ada : \n");
	printf("Versi 1 : ");
	CopyList (MyList, &List2);
	PrintInfo (List2);	

	printf ("Versi 2 : ");
	List3 = FCopyList (MyList);
	PrintInfo (List3);	
	
	printf ("Versi 3 : ");
	CpAlokList (MyList, &List2);
	PrintInfo (List2);	

/* Konkat */ 
	printf("\tHasil Konkat Invers dan List asli : \n");
	List2 = FInversList (MyList);	
	Konkat (List2, List3, &MyList);
	printf("Versi 1 : ");
	PrintInfo (MyList);	

	Konkat1 (&List2, &List3, &MyList);
	printf("Versi 2 : ");
	PrintInfo (MyList);	

/* Pecah List */
	PecahList (&List2, &List3, MyList);
	printf ("\tHasil membagi dua list adalah : \n");
	printf ("L1 = "); PrintInfo (List2);
	printf ("L2 = "); PrintInfo (List3);
/* Finishing */	
	P = First(MyList);
	DeAlokasi (P); 
	P = First(List2);
	DeAlokasi (P); 
	P = First(List3);
	DeAlokasi (P); 
	return 0;
}	
