/**
 * Author	  : Intan Puspitasari
 * Date  	  : 7 Desember 2018
 * Description: Jawaban no 4 tugas individu 1
**/

import java.util.Scanner;

public class HitungBilangan {
	public static void main(String[] args) {
		
		// Read value from keyboard
		Scanner scan = new Scanner(System.in);
		System.out.print("Masukkan bilangan 1 = ");
		int number1 = scan.nextInt();
		System.out.print("Masukkan bilangan 2 = ");
		int number2 = scan.nextInt();
		scan.close();
		
		// Print answers
		System.out.println("a. Nilai terbesar = " + (number1 > number2 ? number1 : number2));
		System.out.println("b. Nilai terkecil = " + (number1 < number2 ? number1 : number2));
		System.out.println("c. Hasil pangkat dari bilangan 1 (" + number1 + ") dipangkat bilangan 2 (" + number2 + ") = " + Math.pow(number1, number2));
		System.out.println("d. Hasil kuadrat dari bilangan 1 (" + number1 + ") = " + (number1 * number1));
		System.out.println("d. Hasil kuadrat dari bilangan 2 (" + number2 + ") = " + (number2 * number2));
	}
}
