/**
 * Author: 2201831506 - Intan Puspitasari
 * Date: 15 December 2018
 * Description: Exercise - Assignment operators & logical operators
 */

public class MyAssignmentAndLogicalOperatorClass {
	public static void main(String[] args) {
		boolean valueA = true;
        boolean valueB = false;
        
        System.out.println("valueA && valueB = " + (valueA && valueB)); //AND operator
        System.out.println("valueA || valueB = " + (valueA || valueB)); //OR operator
        System.out.println("valueA ^ valueB = " + (valueA ^ valueB)); //XOR operator
        System.out.println("!valueA = " + !valueA); //NOT operator
	}
}
