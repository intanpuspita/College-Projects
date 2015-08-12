/*
	File name	: scanner.c
	Vers			: 0.01a
	Written by	: Setiadi Rachmat dimodifikasi oleh Intan Puspitasari (13-02-2013)
	Date			: Fri Aug 28 10:08:03 WIT 2009
*/

#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>

FILE *infile;
char token [50], character=NULL;
int i;

void clear_token(char *token);
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

int main(int argc, char *argv[])
{
	argv[1]="Praktek1.txt";
	init_token(argv[1]);
	while(get_token()!=EOF){
		printf("%s\n", token);
		clear_token(token);
	}
}

void clear_token(char *token)//menghapus isi token yang telah terisi
{
	int i=0;
	while(token[i] != 0)
	{
		token[i]=0;
		i++;
	}
}

int get_token(void)
{
	if(feof(infile))
		return EOF;
	else{
		i=0;
			while((isspace(character) || iscntrl(character)) && !feof(infile)){
				character=fgetc(infile);
			}
			if(isalnum(character)){
				while(!isspace(character) && !feof(infile) && !ispunct(character)){
					token[i]=character;
					i++;
					character=fgetc(infile);
				}
			}
			else{
				token[i]=character;
				character=fgetc(infile);
			}
		return i;
	}
}