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
void outblock(void);
void inblock(void);
void statement(void);
void number(void);
void expression(void);
void term(void);
void factor(void);
void paramlist(void);
void condition(void);
void error(void);

int main(int argc, char *argv[])
{
	int c = 0;
	argv[1]="text1.txt";
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
	outblock();
	//get_token();
	if(!isperiod) {
		printf("Error : Symbol '.' is expected\n");
		exit(-1);
	}
}

///////////////////////////OUTBLOCK///////////////////////
void outblock(void)
{
	if(!isvar){
		printf("Error : Var is expected\n");
		exit(-1);
	}
	do{
		get_token();
		if(!isidentifier){
			printf("Error : Identifier is expected\n");
			exit(-1);
		}
		get_token();
	}while(iscomma);
	if(!issemicolon){
		printf("Error : Symbol ';' is expected\n");
		exit(-1);
	}
	get_token();
	while(isprocedure)
	{
		get_token();
		if(!isidentifier)
		{
			  printf("Error : Identifier is expected\n");
				exit(-1);
		}
		get_token();
		inblock();
		if(!issemicolon)
		{
			printf("Error : Symbol ';' is expected\n");
			exit(-1);
		}
		get_token();
	}
	statement();

}

/////////////////////////INBLOCK/////////////////////////////
void inblock(void)
{
	if(islparen){
		do{
			get_token();
			if(!isidentifier){
				printf("Error : Identifier is expected\n");
				exit(-1);
			}
			get_token();
		}while(iscomma);
		if(!isrparen){
			printf("Error : Symbol '}' is expected\n");
			exit(-1);
		}
		get_token();
	}
	if(!issemicolon){
		printf("Error : Symbol ';' is expected\n");
		exit(-1);
	}
	get_token();
	if(isvar){
		do{
			get_token();
			if(!isidentifier){
				printf("Error : Identifier is expected\n");
				exit(-1);
			}
			get_token();
		}while(iscomma);
		if(!issemicolon){
			printf("Error : Symbol ';' is expected\n");
			exit(-1);
		}
		get_token();
	}
	statement();
}

/////////////////STATEMENT/////////////////////////////////
void statement(void)
{
	if(isidentifier){  // jika identifier
		get_token();
		if(isbecomes){
			get_token();
			expression();
		}
		else{
			paramlist();
		}
		//get_token();
	}
	else{
		if(isbegin){    // jika begin
			do{
				get_token();
				statement();
			} while(issemicolon);
			if(!isend){
				printf("Error : End is expected\n");
				exit(-1);
			}
			get_token();
		}
		else{
			if(iswhile){
				get_token();
				condition();
				if(!isdo){
					printf("Error : Do is expected\n");
					exit(-1);
				}
				get_token();
				statement();
			}
			else{
				if(isif){
					get_token();
					condition();
					if(!isthen){
						printf("Error : Then is expected\n");
						exit(-1);
					}
					get_token();
					statement();
					if(iselse){
						get_token();
						statement();
					}
				}
				else{
					if(isread){
						get_token();
						if(!islparen){
							printf("Error : Symbol '(' is expected\n");
							exit(-1);
						}
						do{
							get_token();
							if(!isidentifier){
								printf("Error : Identifier is expected\n");
								exit(-1);
							}
							get_token();
						} while(iscomma);
						if(!isrparen){
							printf("Error : Symbol ')' is expected\n");
							exit(-1);
						}
						get_token();
					}
					else{
						if(iswrite){
							get_token();
							if(!islparen){
								printf("Error : Identifier is expected\n");
								exit(-1);
							}
							do{
								get_token();
								expression();
							} while(iscomma);
							if(!isrparen){
								printf("Error : Symbol ')' is expected\n");
								exit(-1);
							}
							get_token();
						}
						else{
							printf("Error : Statement is expected\n");
							exit(-1);
						}
					}
				}
			}
		}
	}
}

///////////////////EXPRESSION///////////////////////////////////
void expression(void)
{
	if(isplus || isminus){ get_token(); }

	term();
	while(isplus || isminus){
		get_token();
		term();
	}
}

//////////////////////////TERM///////////////////////////////////
void term(void)
{
	factor();
	while(istimes || isdiv){
		get_token();
		factor();
	}
}

//////////////////FACTOR//////////////////////////////////////
void factor(void)
{
	if(isnumbr){
		get_token();
		return;
	}
	else
	{
		if(isidentifier){
			get_token();
			return;
		}
		else
		{
			if(islparen){
				get_token();
				expression();
				if(isrparen) {
					get_token();
					return;
				} else error();
			}else error();
		}
	}
}

void error(void)
{
	printf("Error : statement is expected\n");
	exit(-1);
}

/////////////////////////PARAMLIST///////////////////////////
void paramlist(void)
{
	if(islparen){
		do{
			get_token();
			expression();
			//get_token();
		} while(iscomma);
		if(!isrparen){
			printf("Error : Symbol ')' is expected\n");
			exit(-1);
		}
		get_token();
	}
}

/////////////////////CONDITION/////////////////////////////////
void condition(void)
{
	expression();
	if(iseql || isnoteql || islessthan || isgrtrthan || islesseql || isgrtreql){
		get_token();
		expression();
	}
	else{
		printf("Error : Condition is expected\n");
		exit(-1);
	}
}
