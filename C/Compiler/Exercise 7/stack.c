#include "stack.h"
#include <stdio.h>

void createList (list *L)
{
	(*L).top=NULL;
}

address alokasi(char token[], char type, int param)
{
	/* Kamus Lokal */
	address P;
	/* Algoritma */
	P = (address) malloc (sizeof (stack_t));
	if (P != NULL) /* Alokasi berhasil */
	{
		strcpy((P)->key, token);
		(P)->type = type;
		(P)->address = 0;
		(P)->nparam = param;
		(P)->next = NULL;
	}
	return (P);
}

void deAlokasi (address P)
{
	if (P != NULL)
	{
		free (P);
	}
}

void PUSH (list *L, char token[], char type, int param)
{
	/* Kamus Lokal */
	address P;
	/* Aloritma */
	P = alokasi(token, type, param);
	if (P != NULL)
	{
		(P)->next = (*L).top;
		(*L).top = P;
	}
}

void POP (list *L)
{
	//infotype temp;
	address P;
	P=(*L).top;
	//temp=data(P);
	(*L).top=((*L).top)->next;
	(P)->next=NULL;
	deAlokasi(P);
	//return temp;
}

void printStack (list L)
{
	address P;
	P=(L).top;
	while (P != NULL)
	{
		printf("%s %d\n", (P)->key, (P)->nparam);
		POP(&L);
		P=(L).top;
	}
}

stack_t *search(list L, char cari[])
{
	int ketemu = 0;
	stack_t *P;
	P=(L).top;
	while((P != NULL) && (ketemu == 0)){
		if(strcmp((P)->key, cari)==0){
			ketemu=1;
			return P;
		}
		else{
			P=P->next;
		}
	}
	if(ketemu==0){
		return NULL;
	}
}

void hapusvlokal(list *L)
{
	address P;
	P=(*L).top;
	while(P->type == 2){
		POP(&(*L));
		P=(*L).top;
	}
}

void hapusparameter(list *L)
{
	address P;
	P=(*L).top;
	while(P != NULL){
		POP(&(*L));
		P=(*L).top;
	}
}
