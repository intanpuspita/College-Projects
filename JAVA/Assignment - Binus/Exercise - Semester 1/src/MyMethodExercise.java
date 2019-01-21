/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 16 January 2019
 * Description: Exercise - Create Method
 */

import java.util.Scanner;

public class MyMethodExercise {
	public static void main(String[] args) {
		Scanner scan = new Scanner(System.in);
		
		System.out.println("Menghitung luas segitiga");
		System.out.print("Masukkan alas = ");
		double a = scan.nextInt();
		System.out.print("Masukkan tinggi = ");
		double t = scan.nextInt();
		
		scan.close();
		double luas = hitungLuasSegitiga(a, t);
		
		System.out.println("Luas segitiga = " + String.format("%.2f", luas));
	}
	
	public static double hitungLuasSegitiga(double alas, double tinggi) {
		double luas = (alas * tinggi) /2;
		return luas;
	}
}
