/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 5 January 2019
 * Description: Exercise - While-do and Do-while loop
 */

public class MyWhileLoopClass {
	public static void main(String[] args) {
		System.out.println("Contoh While-DO");
		whileDo(10);
		System.out.println();
		
		System.out.println("Contoh DO-While");
		doWhile(10);
	}
	
	public static void whileDo(int maxNumber){
		if(maxNumber < 0) return;
		
		int i= 0;
		
		while(i <= maxNumber) {
			System.out.println("Loop ke - " + i);
			i++;
		}
	}
	
	public static void doWhile(int maxNumber){
		if(maxNumber < 0) return;
		
		do {
			System.out.println("Nilai = " + maxNumber);
			maxNumber--;
		} while(maxNumber >= 0);
	}
}
