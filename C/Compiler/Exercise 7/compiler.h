/*
	File name	: compiler.h
	Vers			: 0.01a
	Written by	: Setiadi Rachmat
	Date			: Fri Aug 28 10:08:03 WIT 2009
*/

#define isidentifier (token.attr == IDENTIFIER)

#define isprogram		(token.attr == RWORD && token.value == PROGRAM)
#define isbegin		(token.attr == RWORD && token.value == BEGIN)
#define isend			(token.attr == RWORD && token.value == END)
#define isvar			(token.attr == RWORD && token.value == VAR)
#define isprocedure	(token.attr == RWORD && token.value == PROCEDURE)
#define iswhile		(token.attr == RWORD && token.value == WHILE)
#define isdo			(token.attr == RWORD && token.value == DO)
#define isif			(token.attr == RWORD && token.value == IF)
#define isthen			(token.attr == RWORD && token.value == THEN)
#define iselse			(token.attr == RWORD && token.value == ELSE)
#define isdiv			(token.attr == RWORD && token.value == DIV)
#define iswrite		(token.attr == RWORD && token.value == WRITE)
#define isread			(token.attr == RWORD && token.value == READ)

#define isnumbr		(token.attr == NUMBER)

#define issemicolon	(token.attr == SYMBOL && token.value == SEMICOLON)
#define isperiod		(token.attr == SYMBOL && token.value == PERIOD)
#define iscomma		(token.attr == SYMBOL && token.value == COMMA)
#define isbecomes		(token.attr == SYMBOL && token.value == BECOMES)
#define isplus			(token.attr == SYMBOL && token.value == PLUS)
#define isminus		(token.attr == SYMBOL && token.value == MINUS)
#define istimes		(token.attr == SYMBOL && token.value == TIMES)
#define isrparen		(token.attr == SYMBOL && token.value == RPAREN)
#define islparen		(token.attr == SYMBOL && token.value == LPAREN)
#define iseql			(token.attr == SYMBOL && token.value == EQL)
#define isnoteql		(token.attr == SYMBOL && token.value == NOTEQL)
#define islessthan	(token.attr == SYMBOL && token.value == LESSTHAN)
#define isgrtrthan	(token.attr == SYMBOL && token.value == GRTRTHAN)
#define islesseql		(token.attr == SYMBOL && token.value == LESSEQL)
#define isgrtreql		(token.attr == SYMBOL && token.value == GRTREQL)

