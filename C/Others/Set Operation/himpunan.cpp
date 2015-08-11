/*
  Program   : himpunan.c
  Deskripsi : Menampilkan operasi-operasi himpunan
  Author    : Intan Puspitasari
  Versi/Tgl : 02/23-01-2012
*/

#include<stdio.h>
#include<conio.h>

int A[6], B[6], U[11], i, j, k;
int max, iris, gab, jml;
int Irisan[6], l, Gabung[11], m;
void InputHimpunan();
void TampilHimpunan();

int main()
{
 int no_pil;
 void IrisanAB();
 void GabungAB();
 void KurangAB();
 void KomplemenA();
 void KomplemenB();
 void BedaSetangkup();

 InputHimpunan();
 TampilHimpunan();
 printf("\nPilihan operasi himpunan :\n");
 printf("1. Irisan\n");
 printf("2. Gabungan\n");
 printf("3. Pengurangan\n");
 printf("4. Komplemen A\n");
 printf("5. Komplemen B\n");
 printf("6. Beda setangkup\n");
 printf("Masukkan pilihan anda = "); scanf("%d",&no_pil);
 switch(no_pil)
  {
	case 1 : {TampilHimpunan();
				 printf("\nIrisan dari himpunan A dan B =\n");
				 IrisanAB();
				} break;
	case 2 : {TampilHimpunan();
				 printf("\nGabungan dari himpunan A dan B =\n");
				 GabungAB();
				} break;
	case 3 : {TampilHimpunan();
				 printf("\nPengurangan himpunan A - himpunan B =\n");
				 KurangAB();
				} break;
	case 4 : {TampilHimpunan();
				 printf("\nKomplemen A =\n");
				 KomplemenA();
				} break;
	case 5 : {TampilHimpunan();
				 printf("\nKomplemen B =\n");
				 KomplemenB();
				} break;
	case 6 : {TampilHimpunan();
				 printf("\nBeda Setangkup =\n");
				 BedaSetangkup();
				} break;
  }
 return 0;
}

void IrisanAB()
{
 l=1;
 iris=0;
 for(i=1; i<=5; i++)
  {
	j=1;
	jml=0;
	while((j<=5) && (jml==0))
	 {
	  if(A[i]==B[j])
		jml=jml+1;
		j=j+1;
	 }
	if(jml != 0)
	 {
	  Irisan[l]=A[i];
	  l=l+1;
	  iris=iris+1;
	 }
  }
 printf("{\t");
 for(l=1; l<=iris; l++)
  {
	printf("%d\t", Irisan[l]);
  }
 printf("}\n");
}

void GabungAB()
{
 gab=0;
 m=1;
 for(i=1; i<=5; i++)
  {
	Gabung[m]=A[i];
	m=m+1;
	gab=gab+1;
  }
 for(j=1; j<=5; j++)
  {
	i=1;
	jml=0;
	while((i<=5) &&  (jml==0))
	 {
	  if(B[j]==A[i])
		jml=jml+1;
		i=i+1;
	 }
	if(jml==0)
	 {
	  Gabung[m]=B[j];
	  m=m+1;
	  gab=gab+1;
	 }
  }
 printf("{\t");
 for(m=1; m<=gab; m++)
  {
	printf("%d\t", Gabung[m]);
  }
 printf("}\n");
}

void KurangAB()
{
 int Kurang[6], n;

 max=0;
 n=1;
 for(i=1; i<=5; i++)
  {
	j=1;
	jml=0;
	while((j<=5) && (jml==0))
	 {
	  if(A[i]==B[j])
		jml=jml+1;
		j=j+1;
	 }
	 if(jml==0)
	 {
	  Kurang[n]=A[i];
	  n=n+1;
	  max=max+1;
	 }
  }
 printf("{\t");
 for(n=1; n<=max; n++)
  {
	printf("%d\t", Kurang[n]);
  }
 printf("}\n");
}

void KomplemenA()
{
 int KompA[6], o;

 max=0;
 o=1;
 for(k=1; k<=10; k++)
  {
	i=1;
	jml=0;
	while((i<=5) && (jml ==0))
	 {
	  if(U[k]==A[i])
		{
		 jml=jml+1;
		}
		i=i+1;
	 }
	if(jml==0)
	 {
	  KompA[o]=U[k];
	  o=o+1;
	  max=max+1;
	 }
  }
 printf("{\t");
 for(o=1; o<=max; o++)
  {
	printf("%d\t", KompA[o]);
  }
 printf("}\n");
}

void KomplemenB()
{
 int KompB[6], p;

 max=0;
 p=1;
 for(k=1; k<=10; k++)
  {
	j=1;
	jml=0;
	while((j<=5) && (jml ==0))
	 {
	  if(U[k]==B[j])
		{
		 jml=jml+1;
		}
		j=j+1;
	 }
	if(jml==0)
	 {
	  KompB[p]=U[k];
	  p=p+1;
	  max=max+1;
	 }
  }
 printf("{\t");
 for(p=1; p<=max; p++)
  {
	printf("%d\t", KompB[p]);
  }
 printf("}\n");
}

void BedaSetangkup()
{
 int Beda[6], q;

 max=0;
 q=1;
 for(m=1; m<=gab; m++)
  {
	l=1;
	jml=0;
	while((l<=iris) && (jml==0))
	 {
	  if(Gabung[m]==Irisan[l])
		jml=jml+1;
		l=l+1;
	 }
	if(jml==0)
	 {
	  Beda[q]=Gabung[m];
	  q=q+1;
	  max=max+1;
	 }
  }
 printf("{\t");
 for(q=1; q<=max; q++)
  {
	printf("%d\t", Beda[q]);
  }
 printf("}");
}

void InputHimpunan()
{
 printf("Himpunan 1\n");
 for(i=1; i<=5; i++)
  {
	printf("Masukkan isi himpunan ke-%d = ", i); scanf("%d",&A[i]);
  }
 printf("\nHimpunan 2\n");
 for(j=1; j<=5; j++)
  {
	printf("Masukkan isi himpunan ke-%d = ", j); scanf("%d",&B[j]);
  }
 printf("\nHimpunan semesta\n");
 for(k=1; k<=10; k++)
  {
	printf("Masukkan isi himpunan ke-%d = ", k); scanf("%d",&U[k]);
  }
}

void TampilHimpunan()
{
 clrscr();
 printf("Himpunan 1 = { ");
 for(i=1; i<=5; i++)
  {
	printf("%d, ", A[i]);
  }
 printf("}\n");
 printf("Himpunan 2 = { ");
 for(j=1; j<=5; j++)
  {
	printf("%d, ", B[j]);
  }
 printf("}\n");
 printf("Himpunan semesta = { ");
 for(k=1; k<=10; k++)
  {
	printf("%d, ", U[k]);
  }
 printf("}\n");
}