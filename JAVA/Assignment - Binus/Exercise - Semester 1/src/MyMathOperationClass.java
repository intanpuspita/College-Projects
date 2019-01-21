/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 15 December 2018
 * Description: Exercise - Math Operations, Operator Precedence and Associativity
 */

public class MyMathOperationClass {
	public static void main(String[] args) {
		// Variable declaration
		int valueA = 20;
		double valueB = -3.988;
		
		// Math operation
		System.out.println("Absolute value from " + valueB + " = " + Math.abs(valueB));
		System.out.println("Maximum value from " + valueA + " and " + valueB + " = " + Math.max(valueA, valueB));
		System.out.println("Minimum value from " + valueA + " and " + valueB + " = " + Math.min(valueA, valueB));
		System.out.println("Random value = " + Math.random());
		System.out.println("Constant PI = " + Math.PI);
		System.out.println("Constant E = " + Math.E);
		
		boolean resultPrecedence = 13 >= (valueA * 2) + valueB;
		System.out.println("Result precendence and associativity = " + resultPrecedence);
	}
}