/*Program		: queue1.c*/
/*Deskripdi		: deklarasi elmen queue dan medul queue*/
/*Author			: Ade Astriani(111511032) mengedit dari ADTlist dari Pak Ade Candra 
					  kelompok 3  kelas : 1B */
/*Date			: 03 - 05-2012 */
#ifndef queue1_H
#define queue1_H
#include "boolean.h"
#include <stdio.h>
#include "time1.h"


typedef struct tElmntQueue *address;
typedef struct tElmntQueue{ char task[30];
									 int volume;
									 Time arri_time;
									 Time serv_time;
									 Time fin_time;
									 address next;
									}ElmntQueue;
typedef struct{
					address First;
					}Queue;
void inputfcfs();
void printfcfs();
void CreateQueue(Queue *Q);
address Alokasi(char T[30],int V,Time A,Time S,Time F);
void Insert(Queue *Q, address P);
void InsertV(Queue *Q,char T[30],int V, Time A, Time S,Time F);
void PrintQueue(Queue Q);

 #endif
