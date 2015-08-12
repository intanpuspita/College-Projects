// ------------------------------------------------------------------------
// File b_stack.c (body stack)
// ------------------------------------------------------------------------
#include "stackdin.h"
#include <stdio.h>
// PROTOTYPE
boolean listEmpty (list L)
{
return (top(L) == Nil);
}
void createList (list *L)
{
top(*L)=Nil;
}
// Manajemen Memory
address alokasi (infotype X)
{
/* Kamus Lokal */
address P;
/* Algoritma */
P = (address) malloc (sizeof (elStack));
if (P != Nil) /* Alokasi berhasil */
{
data(P) = X;
next(P) = Nil;
}
return (P);
}
void deAlokasi (address P)
{
if (P != Nil)
{
free (P);
}
}
void PUSH (list *L, infotype X)
{
/* Kamus Lokal */
address P;
/* Aloritma */
P = alokasi(X);
if (P != Nil)
{
next(P) = top(*L);
top(*L) = P;
deAlokasi(P);
}
}

infotype POP (list *L)
{
infotype temp;
address P;
P=top(*L);
temp=data(P);
top(*L)=next(top(*L));
next(P)=Nil;
deAlokasi(P);
return temp;
}
void printStack (list L)
{
infotype nilai;
while (top(L) != Nil)
{
nilai=POP(&L);
printf("%d ", nilai);
}
}
list XXXXX(infotype data)
{
infotype data2;
list L;
createList(&L);
while (data!=0)
{
if (data%2==0)
{
data2=data%2;
PUSH(&L, data2);
data=data-(data/2);
}
else
{
data2=data%2;
PUSH(&L, data2);
data=(data-(data%2))/2;
}
}
return (L);
}