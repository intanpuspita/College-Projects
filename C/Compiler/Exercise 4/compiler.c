/*
	File name	: compiler.c
	Vers			: 0.01a
	Written by	: Setiadi Rachmat
	Date			: Fri Aug 28 10:08:03 WIT 2009
*/

#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#include <string.h>
#include "scanner.h"
#include "compiler.h"

extern token_t token;

void program(void);
void statement(void);
void number(void);
void expression(void);
void term(void);
void factor(void);
void error(void);

int main(int argc, char *argv[])
{
	int c = 0;
	argv[1]="text3.txt";
	init_token(argv[1]);
	program();
	printf("Congratulation : No error is found\n");
	return 0;
}

void program(void)
{
	get_token();

	if(!isprogram) {
		printf("Error : Reserved Word 'program' is expected");
		exit(-1);
	}
	get_token();

	if(!isidentifier){
		printf("Error : Identifier is expected after 'program\n'");
		exit(-1);
	}
	get_token();

	if(!issemicolon) {
		printf("Error : Symbol ';' is expected\n");
		exit(-1);
	}

	get_token();
	statement();
	if(!isperiod) {
		printf("Error : Symbol '.' is expected\n");
		exit(-1);
	}
}

void statement(void)
{
	 if(isbegin) {  //untuk mengecek statement yang diawali begin
		get_token();
		statement();
		while(issemicolon) {
			get_token();
			statement();
		}
		if(!isend) {
			if(isrparen){
				printf("Error : ( is expected\n");
				exit(-1);
			}
			else
			{
				printf("Error : end is expected\n");
				exit(-1);
			}
		}
		get_token();
	 }
	 else {
		//if(isnumbr) {
			//number();
			//get_token();
			expression();
		//}
	 }
}

/*void number(void) //untuk mengecek statement yang angka
{
	if(isnumbr) {
		clear_token();
		get_token();
		if(!isplus && !isminus && !istimes)
		{
			printf("Error : operator is expected\n");
			exit(-1);
		}
		clear_token();
		get_token();
		if(!isnumbr)
		{
			printf("Error : statement is expected\n");
			exit(-1);
		}
	 }
}*/

void expression(void)
{
	if(isplus || isminus){ get_token(); }

	term();
	while(isplus || isminus){
		get_token();
		term();
	}
}

void term(void)
{
	factor();
	while(istimes || isdiv){
		get_token();
		factor();
	}
}

void factor(void)
{
	if(isnumbr){
		get_token();
		return;
	} else if(islparen){
		get_token();
		expression();
		if(isrparen) {
			get_token();
			return;
		} else error();
	} else error();
}

void error(void)
{
	printf("Error : statement is expected\n");
	exit(-1);
}
