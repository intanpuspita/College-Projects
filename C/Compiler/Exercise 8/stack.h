#include <limits.h>
#include <malloc.h>
#include <stdlib.h>
#include <string.h>
#define VGLOBAL 1    /* Global variable   */
#define VLOCAL  2		/* Local variable    */
#define PNAME   3    /* Procedure variable*/
#define FNAME   4    /* Function name     */

typedef struct _stack *address;
typedef struct _stack {
	char key[30];		/* String of token */
	char type;			/* VGLOBAL | VLOCAL | FNAME | PNAME */
	int address;		/* reserved for code generator */
	int nparam;			/* parameter number(s) if type := PNAME | FNAME */
	struct _stack *next;
} stack_t;

typedef struct{
	address top;
} list;

void createList (list *L);
address alokasi(char token[30], char type, int param);
void deAlokasi (address P);
void PUSH (list *L, char token[], char type, int param);
void POP (list *L);
void printStack (list L);
stack_t *search(list L, char cari[]);
void hapusvlokal(list *L);
void hapusparameter(list *L);
//stack_t * push(stack_t *list, char *name, char type, int addr);
//stack_t * pop(stack_t * list);
//stack_t * search(stack_t *list, char *name);



