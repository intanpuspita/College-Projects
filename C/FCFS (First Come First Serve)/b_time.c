/*************************************************************/
/* File			: time1.c					*/
/* Deskripsi   : Body ADT Time 			*/
/* Author		: Intan Puspitasar "mengedit dari ADTjam ibu Ani	*/
/* NIM			: 111511042			 		*/
/* Tanggal		: 02-05-2012  	  			*/
/*************************************************************/

#include "time1.h"
Time T;

void SetTime(Time *T,int hh, int mm, int ss)
{
  (*T).hh=hh;
  (*T).mm=mm;
  (*T).ss=ss;

 }

void SetDefaultJam (Time *T)
{
 (*T).hh=0;
 (*T).mm=0;
 (*T).ss=0;
}

int GetJam (Time T)
{
 return T.hh;
}

int GetMenit (Time T)
{
 return T.hh;
}

int GetDetik (Time T)
{
 return T.hh;
}

void MenitToJam(Time *T)
{
 int jmljam;

 jmljam=(*T).mm/60;
 (*T).hh=(*T).hh+jmljam;
 (*T).mm=(*T).mm-(60*jmljam);
}

void DetikToMenit(Time *T)
{
 int jmlmenit;

 jmlmenit=(*T).ss/60;
 (*T).mm=(*T).mm+jmlmenit;
 (*T).ss=(*T).ss-(60*jmlmenit);
}

boolean IsValidJam(int hh)
{
 if((hh>=0) && (hh<=23))
  {
	return true;
  }
 else
  {
	return false;
  }
}

boolean IsValidMenit(int mm)
{
 if((mm>=0) && (mm<=59))
  {
	return true;
  }
 else
  {
	return false;
  }
}

boolean IsValidDetik(int ss)
{
 if((ss>=0) && (ss<=59))
  {
	return true;
  }
 else
  {
	return false;
  }
}


Time NextDetikX (Time T1, int X)
{
 Time T2;

 T2=T1;
 T2.ss=T2.ss+X;
 if(T2.ss>59)
  {
	DetikToMenit(&T2);
	if(T2.mm>59)
	 {
	  MenitToJam(&T2);
	 }
  }
 return T2;
}

void PrintTime (Time T)
{
 if((T.hh<10)&&(T.mm>=10)&&(T.ss>=10))
  {
	printf("0%d : %d : %d", T.hh, T.mm, T.ss);
  }
 else
  {
	if((T.hh<10)&&(T.mm<10)&&(T.ss>=10))
	 {
	  printf("0%d : 0%d : %d", T.hh, T.mm, T.ss);
	 }
	else
	 {
	  if((T.hh<10)&&(T.mm<10)&&(T.ss<10))
		{
		 printf("0%d : 0%d : 0%d", T.hh, T.mm, T.ss);
		}
	  else
		{
		 printf("%d : %d : %d", T.hh, T.mm, T.ss);
		}
	 }
  }
}


