/**
 * Date: 3 December 2018
 * Description: Exercise - data type
 */

public class MyDataTypeClass {
	public static void main(String[] args) {
		
		// Numeric
		byte valueA = 127;
		short valueB = 32767;
		int valueC = 2147483647;
		long valueD = 9223372036854775807L;
		
		System.out.println("Sample Numeric Type:");
		System.out.println(valueA);
		System.out.println(valueB);
		System.out.println(valueC);
		System.out.println(valueD);
		System.out.println();
		
		// Numeric conversion
		long sum = valueB * 2;
		
		System.out.println("Sample Numeric conversion:");
		System.out.println(sum);
		System.out.println();
		
		// Char and String
		char valueE = 'b';
		String valueF = "Dia berkata \"hello\" tadi.";
		
		System.out.println("Sample Char and String:");
		System.out.println(valueE);
		System.out.println(valueF);
		System.out.println();
	}
}
