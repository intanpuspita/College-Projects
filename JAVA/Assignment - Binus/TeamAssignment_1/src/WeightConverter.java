/**
 * Author      : Team 6 DLBA
 * Date        : 15 December 2018
 * Description : Team Assignment 1 - Introduction to Programming
 * 				 Mengubah satuan berat dari kilogram menjadi gram, ons dan pon
 **/

import java.util.Scanner;

public class WeightConverter {
	public static void main(String[] args) {
		// Read data from user
		Scanner scan = new Scanner(System.in);
		System.out.print("Masukkan jumlah kilogram yang akan dikonversi = ");
		int valueKg = scan.nextInt();
		scan.close();
		
		// Convert to gram, ons, and pon
		int valuePon = valueKg * 2;
		int valueOns = valuePon * 5;
		int valueGram = valueOns * 100;
		
		System.out.println(valueKg + " kg sama dengan = " + valuePon + " pon atau " + valueOns + " ons atau " + valueGram + " gram");
	}
}
