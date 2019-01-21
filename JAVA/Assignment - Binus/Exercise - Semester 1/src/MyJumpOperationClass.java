/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 5 January 2019
 * Description: Exercise - Jump Operation
 */


public class MyJumpOperationClass {
	public static void main(String[] args) {
		System.out.println("Contoh jump operation");
		jumpOperation(10);
	}
	
	public static void jumpOperation(int maxNumber) {
		if(maxNumber < 0) return;
		
		labelBreak:
		for(int i=0; i<=maxNumber; i++) {
			for(int j=i; j<=(maxNumber+5); j++) {
				// Using continue to skip iteration if i = j
				if(i == j) continue;
				
				// Break the loop
				if(j == (maxNumber + 4)) break;
				
				// Break with label
				if((i+j) == Math.random()) break labelBreak;
				
				System.out.print(j + " ");
			}
			System.out.println();
		}
	}
}
