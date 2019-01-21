/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 16 January 2019
 * Description: Exercise - Create Method
 */

import java.util.Scanner;

public class MyReverseStringClass {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		System.out.print("Masukkan text = ");
		String text = scan.nextLine();
		scan.close();
		
		String reversedText = pembalikKata(text);
		System.out.println("Kata diatas dibalikkan menjadi " + reversedText);
	}
	
	public static String pembalikKata(String text) {
		String reversedText = "";
		
		for (int i = (text.length()-1); i >= 0; i--) {
			reversedText = reversedText + text.charAt(i);
		}
		
		return reversedText;
	}
}
