/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 15 December 2018
 * Description: Exercise - Bitwise Operators, Increment and Decrement Operators, Relational Operators
 */

public class MyOperatorsClass {
	public static void main(String[] args) {
		// Variable declaration
		int valueA = 4;
		int valueB = 15;
		
		// Bitwise operator
		System.out.println("Bitwise Operator Example:");
		System.out.println("valueA & valueB = " + (valueA & valueB));
		System.out.println("valueA | valueB = " + (valueA | valueB));
		System.out.println("~ valueA = " + (~valueA));
		System.out.println("valueA >> 2 = " + (valueA >> 2));
		System.out.println("valueA << 2 = " + (valueA << 2));
		System.out.println("valueA >>> 2 = " + (valueA >>> 2));
		System.out.println();
		
		// Increment and Decrement operator
		int prefixIncrementA = ++valueA;
		int prefixDecrementA = --valueA;
		int postIncrementA = valueA++;
		int postDecrementA = valueA--;
		
		System.out.println("Increment and Decrement Operator Example:");
		System.out.println("Prefix increment from " + valueA + " = " + prefixIncrementA);
		System.out.println("Prefix decrement from " + valueA + " = " + prefixDecrementA);
		System.out.println("Post increment from " + valueA + " = " + postIncrementA);
		System.out.println("Post decrement from " + valueA + " = " + postDecrementA);
		System.out.println();
		
		// Relational Operator
		System.out.println("Relational Operator Example:");
		System.out.println("valueA == valueB = " + (valueA == valueB));
	    System.out.println("valueA != valueB = " + (valueA != valueB));
	    System.out.println("valueA > valueB = " + (valueA > valueB));
	    System.out.println("valueA < valueB = " + (valueA < valueB));
	    System.out.println("valueA >= valueB = " + (valueA >= valueB));
	    System.out.println("valueA <= valueB = " + (valueA <= valueB));
	}
}
