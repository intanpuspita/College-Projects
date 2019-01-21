/**
 * Author	  : Intan Puspitasari
 * Date  	  : 7 Desember 2018
 * Description: Jawaban no 5 tugas individu 1
**/

import java.util.concurrent.ThreadLocalRandom;
import java.util.Scanner;

public class BilanganRandom {
	public static void main(String[] args) {
		
		// Read value from keyboard
		Scanner scan = new Scanner(System.in);
		System.out.print("Masukkan bilangan 1 = ");
		int number1 = scan.nextInt();
		System.out.print("Masukkan bilangan 2 = ");
		int number2 = scan.nextInt();
		scan.close();
		
		// Get random number and add 1 for odd number
		int numberRandom = ThreadLocalRandom.current().nextInt(number1, number2);
		if(numberRandom % 2 == 1) {
			numberRandom++;
		}
		
		// Print answer
		System.out.println("Bilangan random = " + numberRandom);
	}
}
