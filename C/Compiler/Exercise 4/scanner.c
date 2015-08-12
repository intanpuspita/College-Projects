/*
	File name	: scanner.c
	Vers			: 0.01a
	Written by	: Setiadi Rachmat dimodifikasi oleh Intan Puspitasari (21-02-2013)
	Date			: Fri Aug 28 10:08:03 WIT 2009
*/

#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#include <string.h>
#include "scanner.h"

FILE *infile;
token_t token;
char character=NULL;
int i, j, value;

void clear_token(void);
void checksymbol(void);
void checkalnum(void);
void checkkeyword(void);
void checknumber(void);
int get_token(void);

/*inisialisasi token*/
void init_token(char *name)
{
	if((infile=fopen(name,"r"))==NULL){
		printf("Error : Can't open source code %s\n", name);
		exit(-1);
	}
	else return;
}

/*int main(int argc, char *argv[])
{
	argv[1]="praktek2.txt";
	init_token(argv[1]);
	while(get_token()!=EOF){
		printf("%3d %3d %s \n",token.attr, token.value, token.charvalue);
		clear_token();
	}
	return 0;
}*/

void clear_token(void)//menghapus isi token yang telah terisi
{
	int i=0;
	while(token.charvalue[i] != 0)
	{
		token.charvalue[i]=0;
		i++;
	}
	token.attr=0;
	token.value=0;
}

int get_token(void)
{
	if(feof(infile))
		return EOF;
	else{
		clear_token();
		i=0;
			while((isspace(character) || iscntrl(character)) && !feof(infile)){
				character=tolower(fgetc(infile));
			}
			if(isalnum(character)){
				while(!isspace(character) && !feof(infile) && !ispunct(character)){
					token.charvalue[i]=character;
					i++;
					character=tolower(fgetc(infile));
				}
				checkalnum();
			}
			else{
				token.charvalue[i]=character;
				if((token.charvalue[i]=='<')||(token.charvalue[i]=='>')||(token.charvalue[i]==':')||(token.charvalue[i]=='.'))
				{
					character=tolower(fgetc(infile));
					if(ispunct(character))
					{
						i++;
						token.charvalue[i]=character;

					}
				}
				checksymbol();
				character=tolower(fgetc(infile));
			}
		return i;
	}
}

void checkalnum(void)
{
	j=0;
	if(isdigit(token.charvalue[j])){
		checknumber();
	}
	else
	{
		checkkeyword();
	}
}
char listkeyword[][14]={"begin","div","do","else","end","if","procedure","program","then","var","while","read","write","forward","function"};

void checkkeyword(void)
{
	j=0;
	//char listkeyword[][14]={"begin","div","do","else","end","if","procedure","program","then","var","while","read","write","forward","function"};
	while((j<=15)&&(strcmp(token.charvalue,listkeyword[j])!=0)){
		j++;
	}
	if(strcmp(token.charvalue,listkeyword[j])==0){
		value=j;
		token.attr=RWORD;
		token.value=j;
	}
	else{
		token.attr=IDENTIFIER;
		token.value=value;
	}
}

void checknumber(void)
{
	token.attr=NUMBER;
	token.value=atoi(token.charvalue);
}

char listsymbol[][19]={"+","-","*","(",")","=",",",".",";",":=","<","<=","<>",">",">=","[","]","..",":"};
void checksymbol(void)
{
	j=0;
	//char listsymbol[][19]={"+","-","*","(",")","=",",",".",";",":=","<","<=","<>",">",">=","[","]","..",":"};
	while(strcmp(token.charvalue,listsymbol[j])!=0)
	{
		j++;
	}
	token.attr=SYMBOL;
	token.value=j;
}