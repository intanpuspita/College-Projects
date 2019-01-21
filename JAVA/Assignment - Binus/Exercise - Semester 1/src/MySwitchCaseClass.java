/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 23 December 2018
 * Description: Exercise - Switch case statement
 */

import java.util.Scanner;

public class MySwitchCaseClass {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		System.out.println("Pilihan menu:\n1. Info pulsa\n2. Info masa berlaku\n3. Info kuota");
		System.out.println();
		System.out.print("Masukkan pilihan anda = ");
		int option = scan.nextInt();
		scan.close();
		
		// Switch case option
		switch(option) {
			case 1: 
				System.out.println("Pulsa anda Rp 20000");
				break;
			case 2:
				System.out.println("Masa berlaku sampai dengan 15/01/2019");
				break;
			case 3:
				System.out.println("Kuota anda tersisa 3.9 GB");
				break;
			default:
				System.out.println("Pilihan yang anda masukkan salah!");
				break;
		}
	}
}
