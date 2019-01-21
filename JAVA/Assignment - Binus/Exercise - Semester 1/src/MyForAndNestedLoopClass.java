/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 5 January 2019
 * Description: Exercise - For and Nested Loop
 */

public class MyForAndNestedLoopClass {
	public static void main(String[] args) {
		System.out.println("Contoh For Loop");
		forLoop(5);
		System.out.println();
		
		System.out.println("Contoh Nested Loop");
		nestedLoop(5);
		
	}
	
	public static void forLoop(int maxNumber) {
		if(maxNumber < 0) return;
		
		for(int i=0; i<=maxNumber; i++) {
			System.out.println("Nilai = " + i);
		}
	}
	
	public static void nestedLoop(int maxNumber) {
		if(maxNumber < 0) return;
		
		for(int i=0; i<=maxNumber; i++) {
			for(int j=i+1; j<=maxNumber; j++) {
				System.out.print(j + " ");
			}
			System.out.println();
		}
	}
}
