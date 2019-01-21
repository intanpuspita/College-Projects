/**
 * Date: 3 December 2018
 * Description: Exercise - reading input, identifier, variable, constants
 */

import java.util.*;

public class MyDummyClass {
	public static void main(String[] args) {
		
		// Initialize Scanner
		Scanner scan = new Scanner(System.in);

		// Read value from keyboard and assign it to variable
		int valueInt = scan.nextInt();
		String valueStr = scan.next();
		
		// Close Scanner because there is no more input to read
		scan.close();
		
		// Set constant value
		final String valueConst = "Latihan Programming Binus";
		
		// Print variable value
		System.out.println(valueInt);
		System.out.println(valueStr);
		System.out.println(valueConst);
		
	}
}
