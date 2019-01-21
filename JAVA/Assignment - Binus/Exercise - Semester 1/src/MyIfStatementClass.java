import java.util.Scanner;

/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 22 December 2018
 * Description: Exercise - If statement
 */

public class MyIfStatementClass {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		System.out.print("Masukkan angka (1-100) = ");
		int value = scan.nextInt();
		scan.close();
		
		// Sample if statement
		if(value > 100) {
			System.out.println("Angka yang dimasukkan tidak boleh lebih dari 100!");
			return;
		}
		
		if(value < 1) {
			System.out.println("Angka yang dimasukkan tidak boleh kurang dari 1");
			return;
		}
		
		// Sample nested if statement
		if(value % 2 == 0) {
			System.out.println("Angka " + value + " merupakan kelipatan 2");
		}
		else if(value % 3 == 0) {
			System.out.println("Angka " + value + " merupakan kelipatan 3");
		}
		else {
			System.out.println("Angka " + value + " bukan merupakan kelipatan 2 maupun 3");
		}
	}
}
